<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content=""width="device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="mystyle.css">
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


require_once("debugLog.inc");

debugLog("");

//user can either log in with an existing account, or create one by redirecting to register1.php
echo "<body>";
echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
        echo "<div class='navbar-header'>";
            echo "<a class='navbar-brand' href=''>";
            echo "<img alt='Brand' src=''>";
        echo "</div>";
        echo "<div class='navbar-form navbar-right'>";
            echo "<div align='right'>";
            echo "<a type='button' class='btn btn-lg btn-primary navbar btn' href='userLogin.php'>Log In</a></span>";
            echo "<a type='button' class='btn btn-lg btn-default navbar btn' href='register1.php'>Register</a></span>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</nav>";
echo "</body>";

?>