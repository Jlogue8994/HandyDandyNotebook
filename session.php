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

debugLog("SessionID: ");
debugLog(session_id());

debugLog("You're getting into session.php");

$username = $_POST['username'];
$password = $_POST['password'];
$userid = $_SESSION['UserID'];
$usernamereg = $_POST['usernamereg'];
$password1 = $_POST['password1'];

debugLog($usernamereg, $password1);

if(!isset($_COOKIE['PHPSESSID'])) {
    
    if($username && $password) {
        $sql  = "SELECT UserID ";
        $sql .= "FROM users WHERE ";
        $sql .= "Username = '$username' AND ";
        $sql .= "Password = '$password'";
        $results = mysql_query($sql);
        
        debugLog($sql);

        if($results && mysql_num_rows($results)) {
            session_start();
            debugLog("Session started!");
            debugLog("Session ID: ");
            debugLog(session_id());
            $userid = mysql_result($results, 0, "UserID");
            $_SESSION['UserID'] = $userid;
            /**/
        }
        else {
            debugLog("Not a valid Username and Password combination.");
            header("Location: userLogin.php");
        }
    }
    elseif($usernamereg && $password1) {
        
        debugLog("CONGRATULATIONS! Something worked!");
        
        session_start();
        debugLog("Session ID: ");
        debugLog(session_id());
    }
    else {        
        header("Location: userLogin.php");
    }
    
}
else {
session_start();
debugLog("Resuming session: ");
$userid = $_SESSION['UserID'];

debugLog(session_id());
debugLog(session_status());
}

?>