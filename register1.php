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

require_once("dbconnect.php");
require_once("debugLog.inc");
?>
<script>
function validate() {
    var pass1 = document.userCreate.password1.value;
    var pass2 = document.userCreate.password2.value;
    
    if(pass1 == pass2) {
        document.userCreate.submit();
    }
    else {
        alert("Passwords do not match.");
    }
}
    /**/
function checkName() {
    var input = document.userCreate.usernamereg.value;
    //$("#nameMsg").load('register1.ajax.php', {input: input});
    $.ajax({url: 'register1.ajax.php', data: {input: input}}).done(function(data){
        console.log(data);
       if(data == "true") {
           $("#nameMsg").text("Username Available");
           $("#create").show();
       } 
       else {
           $("#nameMsg").text("Username Taken");
           $("#create").hide();
       }
    });
}
</script>
    
<?php

if(!$_POST['username'] && !$_POST['password1']) {
echo "Create an Account:";
echo "<form name='userCreate' action='register2.php' method='POST'>";
echo "<p>Username:<input type='text' name='usernamereg' placeholder='Type your username here...' onkeyup='checkName()'>"
. "<span id='nameMsg'></span></p>";
echo "<p>Password:<input type='password' name='password1' placeholder='Type password here...'></p>";
echo "<p>Re-enter:<input type='password' name='password2' placeholder='Re-enter password...'></p>";
echo "<p><button type='button' name='create' id='create' onclick='validate()'>Next</button></p>";
echo "</form>";
}
?>
