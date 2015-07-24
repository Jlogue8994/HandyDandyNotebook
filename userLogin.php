<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content="" width="device-width, initial-scale=1">
        <link type='text/css' rel='stylesheet' href='mystyle.css'>
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
    </head>
<?php

/* 
 * Copyright (C) 2015 Joe Logue
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
echo "<body>";

require_once("debugLog.inc");
//end any saved session that may have existed prior to user login.
if(isset($_COOKIE["PHPSESSID"])) {
header("Location: logOut.php");
}

//send login information to homepage
echo "<nav class='navbar navbar-default navbar-fixed-top' position='static'>";
        echo "<div class='container-fluid'>";
            echo "<div class='navbar-header'>";
                echo "<a class='navbar-brand' href='index.php'>";
                echo "<img alt='Brand' src=''>";
            echo "</div>";
            echo "<div class='navbar-form navbar-right'>";
                echo "<div align='right'>";
                //echo "<a type='button' class='btn btn-lg btn-primary navbar btn' href='userLogin.php'>Log In</a></span>";
                echo "<a type='button' class='btn btn-lg btn-default navbar btn' href='register1.php'>Register</a></span>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</nav>";
echo "<div class='outer'>";
    echo "<div class='middle'>";
        echo "<div class='inner form-group'>";
        echo "<h2 align='center'>Handy Dandy Notebook</h2>";
        echo "<h3 align='center'>Log In:</h3>";
            echo "<form id='center' name='userlog' action='homepage.php' method='POST'>";
            echo "<p align='center'><h4>Username:</h4><input class='form-control' id='inputdefault' type='text' name='username' placeholder='Type your username here...' onclick='this.focus();this.select()'></p>";
            echo "<p align='center'><h4>Password: </h4><input class='form-control' id='inputdefault' type='password' name='password' placeholder='Type your password here...' onclick='this.focus();this.select()'></p>";
            echo "<p align='center'><input class='btn btn-primary' type='submit' name='login' value='Submit'></p>";
            echo "</form>";
        echo "</div>";
    echo "</div>";
echo "</div>";

//debugging info.
debugLog(session_status());

echo "</body>";
?>
</html>