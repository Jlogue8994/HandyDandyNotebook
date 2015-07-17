<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30">
         <meta name="viewport" content=""width="device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
    </head>
</html>
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
//end any saved session that may have existed prior to user login.
if(isset($_COOKIE["PHPSESSID"])) {
header("Location: logOut.php");
}

//send login information to homepage
echo "<form name='userlog' action='homepage.php' method='POST' >";
echo "<p>Username:<input type='text' name='username' placeholder='Type your username here...' onclick='this.focus();this.select()'></p>";
echo "<p>Password:<input type='password' name='password' placeholder='Type your password here...' onclick='this.focus();this.select()'></p>";
echo "<p><input type='submit' name='login' value='Submit'></p>";
echo "</form>";

//debugging info.
echo session_status();

echo "</body>";
?>