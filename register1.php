<!DOCTYPE html>

<head>
    <script src="jquery-2.1.4.min.js"></script>
</head>
    
<?php

/* 
 * Copyright (C) 2015 Joe
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<script>
    $(document).ready(function(){
       $("form").submit(false);
    });
function checkName() {
    var input = document.userCreate.username.value;
    //$("#nameMsg").load('register1.ajax.php', {input: input});
    $.ajax({url: 'register1.ajax.php', data: {input: input}}).done(function(data){
        console.log(data);
       if(data == "true") {
           $("#nameMsg").text("Username Available");
           $("#create").show();
           $("form").submit(true);
       } 
       else {
           $("#nameMsg").text("Username Taken");
           $("#create").hide();
           $("form").submit(false);
       }
    });
}
</script>
    
<?php

if(!$_POST['username'] && !$_POST['password1']) {
echo "Create an Account:";
echo "<form name='userCreate' action='register1.php' method='POST'>";
echo "<p>Username:<input type='text' name='username' placeholder='Type your username here...' onkeyup='checkName()'>"
. "<span id='nameMsg'></span></p>";
echo "<p>Password:<input type='password' name='password1' placeholder='Type password here...'></p>";
echo "<p>Re-enter:<input type='password' name='password2' placeholder='Re-enter password...'></p>";
echo "<p><input type='submit' name='create' value='Next' id='create'></p>";
echo "</form>";
}
elseif($_POST['username'] && $_POST['password1']) {
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$sql  = "SELECT * FROM users";
$sql .= " WHERE Username = '$username'";
$results = mysql_query($sql);

    if($results && mysql_num_rows($results)) {
        echo "Username has already been taken...";
        echo "<br>";
        echo "Please select a different username.";

        header("Location: register1.php");
    }
    else {
        
    }
}
else {
    echo "Something isn't working. FIX IT!";
}


?>
