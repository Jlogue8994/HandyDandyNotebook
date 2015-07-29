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
require_once("session.php");

debugLog("User ID = " . $userid);

$sql  = "SELECT accessToken FROM users WHERE UserID = $userid";
$results = mysql_query($sql);

debugLog($sql);

if($results && mysql_num_rows($results)) {
            $token = mysql_result($results, 0, "accessToken");
} else {
    debugLog("No results");
}

$curl = curl_init();

$url = "app.sycamoreeducation.com/api/v1/Me";

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "$url",
    CURLOPT_HTTPHEADER => array("Authorization: Bearer $token")
));

if($token) {
    debugLog($token);
} else {
    debugLog("No token found.");
}

$response = curl_exec($curl);

$response = json_decode($response, true);

curl_close($curl);

$teacherID = $response["UserID"];
$schoolID = $response["SchoolID"];
$firstName = $response["FirstName"];
$lastName = $response["LastName"];

if($schoolID) {
    debugLog("The ID of the teacher is " . $teacherID);
    debugLog("The Name of the teacher is " . $firstName . " " . $lastName);
    debugLog($schoolID);
    
} else {
    debugLog("No School ID.");
}
/*
$curl = curl_init();

$url = "app.sycamoreeducation.com/api/v1/School/$schoolID/Classes";

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "$url",
    CURLOPT_HTTPHEADER => array("Authorization: Bearer $token")
));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response, true);

/*$classes = array();
foreach($response as $key => $class_type) {
    foreach($class_type as $class) {
        $classID = $class['ID'];
        $classes[$classID] = array (
        "class_name" => $class['Name'],
        "class_type" => $key
        );
    }
}

/*$schoolClasses = array(
    "dayLong"
)
/**/
$checkboxes = array(
    "b" => array(1,2,3,4),
    "c" => array(1,2,3,4,5,6,7,8,9),
    "e" => array(1,2,3,4,5,6,7,8,9,10,11,12,13),
    "f" => array(1,2,3,4,5,6,7,8,9,10,11),
    "g" => array(1,2,3,4,5),
    "i" => array(1,2,3,4),
    "j" => array(1,2,3,4,5),
    "k" => array(1,2,3,4,5,6),
    "l" => array(1,2,3,4,5,6)
);

$gradenames = array(
    0 => "Select One",
    1 => "Pre-K/Early Childhood",
    2 => "Kindergarten",
    3 => "First",
    4 => "Second",
    5 => "Third",
    6 => "Fourth",
    7 => "Fifth",
    8 => "Sixth",
    9 => "Seventh",
    10 => "Eighth",
    11 => "Ninth",
    12 => "Tenth",
    13 => "Eleventh",
    14 => "Twelfth",
    15 => "Mixed",
    16 => "Other");

$subjects = array(
    0 => "Select One",
    1 => "Religion/Theology",
    2 => "Mathematics",
    3 => "Science",
    4 => "Social Studies",
    5 => "Foreign Language",
    6 => "Language Arts/English",
    7 => "Literature",
    8 => "Computer/Computer Science",
    9 => "PE",
    10 => "Music",
    11 => "Art",
    12 => "Library",
    13 => "Reading",
    14 => "Other"
);

?>