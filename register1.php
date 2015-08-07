<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content="" width="device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="mystyle.css">
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
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

echo "<body id='navScroll'>";
?>
<script>
    //function to validate that the two passwords match
function validate() {
    var pass1 = document.userCreate.password1.value;
    var pass2 = document.userCreate.password2.value;
    
    if(pass1.length >= 8)
    {
        if(pass1 == pass2) {
            document.userCreate.submit();
        }
        else {
            alert("Passwords do not match.");
        }
    }
    else {
        alert("Password must be at least 8 characters in length.")
    }
}
    /*checkName function to check if the username input is already taken in the database.
     *if username is taken, program will hide the next button and not allow the user 
     *to submit their data.
     */
function checkName() {
    var input = document.userCreate.usernamereg.value;
    $.ajax({url: 'register1.ajax.php', data: {input: input}}).done(function(data){
        console.log(data);
       if(data === "true") {
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
/*
 * if there is no existing username and password saved then the user will be
 * able to create an account. They need a unique username and a password.
 * There is a password verification field as well. Form sends info to
 * register2.php when submitted.
 */
echo "<nav class='navbar navbar-default navbar-fixed-top' position='static'>";
    echo "<div class='container-fluid'>";
        echo "<div class='navbar-header'>";
            echo "<a class='navbar-brand' href='index.php'>";
            echo "<img alt='Brand' src=''>";
        echo "</div>";
        echo "<div class='navbar-form navbar-right'>";
            echo "<div align='right'>";
            echo "<a type='button' class='btn btn-lg btn-primary navbar btn' href='userLogin.php'>Log In</a></span>";
            //echo "<a type='button' class='btn btn-lg btn-default navbar btn' href='register1.php'>Register</a></span>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</nav>";

if(!$_POST['username'] && !$_POST['password1']) {
echo "<div class='outer'>";
    echo "<div class='middle'>";
        echo "<div class='inner form-group'>";
            echo "<h2 align='center'>Handy Dandy Notebook</h2>";
            echo "<h3 align='center'>Create an Account:</h3>";
            echo "<form id='center' name='userCreate' action='register2.php' method='POST'>";
            echo "<p align='center'><h4>Username:</h4><input class='form-control' id='inputdefault' type='text' name='usernamereg' placeholder='Type your username here...' onkeyup='checkName()'>"
            . "<span id='nameMsg'></span></p>";
            echo "<p align='center'><h4>Password:</h4><input class='form-control' id='inputdefault' type='password' name='password1' placeholder='Type password here...'></p>";
            echo "<p align='center'><h4>Re-enter:</h4><input class='form-control' id='inputdefault' type='password' name='password2' placeholder='Re-enter password...'></p>";
            echo "<p align='center'><button class='btn btn-primary' type='button' name='create' id='create' onclick='validate()'>Next</button></p>";
            echo "</form>";
        echo "</div>";
    echo "</div>";
echo "</div>";
}

echo "</body>";
?>
</html>
