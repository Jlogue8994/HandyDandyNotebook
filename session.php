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

if(!session_id()) {

$username = $_POST['username'];
$password = $_POST['password'];

    if($username && $password) {
        $sql  = "SELECT UserID ";
        $sql .= "FROM users WHERE ";
        $sql .= "Username = '$username' AND ";
        $sql .= "Password = '$password'";
        $results = mysql_query($sql);
        
        if($results) {
            session_start();
            echo session_start();
            $userid = mysql_result($results, 0, "UserID");
            $_SESSION['UserID'] = $userid;
        }
        else echo "Not a valid Username and Password combination.";
        header("Location: userLogin.php");
    }
    else {
        
    }
}
else {
    session_start();
    echo session_start();
    $userid = $_SESSION['UserID'];
}

?>