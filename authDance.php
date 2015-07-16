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

require_once("debugLog.inc");
require_once("dbconnect.php");
require_once("session.php");

$usernamereg = $_SESSION['usernamereg'];
$password1 = $_SESSION['password1'];

debugLog(session_id());

debugLog("authDance page: Usernamereg includes: " . $usernamereg);
debugLog("testvar" . $_SESSION['testvar']);

//require the SycamorePHP library
            require('SycamorePHP/Sycamore.php');
            //add your applications ID and secret here
            define("CLIENT_ID", "55a66a8d46400");
            define("CLIENT_SECRET", "9e33f4872c0f92208c040cd2a8b7a9c0");
            //set the scopes that you want to request
            define("SCOPE", "general individual");
            //this is the URL that the OAuth server will post information back to
            define("REDIRECT_URI", "http://localhost/HandyDandyNotebook/authDance.php");
            //These should not need to be changed, so don't do it. =)
            define("AUTHORIZATION_ENDPOINT", 'https://app.sycamoreeducation.com/oauth/authorize');
            define("TOKEN_ENDPOINT", 'https://app.sycamoreeducation.com/oauth/token');
            //create new instance of the client
            $client = new OAuth2\Sycamore(CLIENT_ID, CLIENT_SECRET);
            //if the code varialbe isn't present in the URL, start the OAuth dance
            if (!isset($_GET['code'])){
                
                debugLog("You're getting to the sycamore login page.");
                    $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI, SCOPE);
                    //redirect the browser to Sycamore School's OAuth login page
                    header('Location: ' . $auth_url);
                    die('Redirect');
            }else{
                    $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
                    //trade auth code for access token
                    $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
                    //returns json_decoded array with top level "result" array
                    $token = $response["result"]["access_token"];
                    //store access token in cookie for use later
                    setcookie("auth_token", $token);
                    /*
                     * WARNING: in a production environment, you would want to store the
                     * access token in a database and NOT in the browser
                     */

            }
        
        debugLog("If you're reading this you're getting into user creation in the database.");
        debugLog($token);
        
        $sql  = "INSERT INTO users ";
        $sql .= "(accessToken, Username, Password)";
        $sql .= " VALUES ";
        $sql .= "('$token', '$usernamereg', '$password1')";
        echo $sql;
        $results = mysql_query($sql);
        
        debugLog($sql);
        
        if($results) "User Created!";
        else echo "User Creation Failed.";
        
        
        
        //throw the user back to the index page
       header("Location: logOut.php");
?>