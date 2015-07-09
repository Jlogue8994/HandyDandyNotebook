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
session_start();

echo session_status();
echo "SessionID: ";
echo session_id();
echo "<br>";

$username = $_POST['username'];
$password = $_POST['password'];
$userid=$_SESSION['UserID'];

if($username && $password) {
    $sql  = "SELECT UserID ";
    $sql .= "FROM users WHERE ";
    $sql .= "Username = '$username' AND ";
    $sql .= "Password = '$password'";
    $results = mysql_query($sql);

    if($results && mysql_num_rows($results)) {
        session_start();
        echo "Session started!";
        echo session_id();
        echo "<br>";
        $userid = mysql_result($results, 0, "UserID");
        $_SESSION['UserID'] = $userid;
    }
    else {
        echo "Not a valid Username and Password combination.";
        header("Location: userLogin.php?invalid=1");
    }
}
elseif(!$userid) {
    echo "Session expired.";
    header("Location: userLogin.php");
}
else {
    session_start();
    echo "Resuming session";
    $userid = $_SESSION['UserID'];
    
    echo session_id();
    echo "<br>";
    echo session_status();
}

?>