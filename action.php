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

<?php
require_once("dbconnect.php");
    
$name = $_POST['name'];
$school = $_POST['school'];
$category = $_POST['category'];
$teacher = $_POST['teacher'];
$date = $_POST['date'];
$level = $_POST['level'];
$subject = $_POST['subject'];
$formid = $_POST['formid'];

if($formid){
    $sql  = "UPDATE formmain SET ";
    $sql .= "Name = '$name', ";
    $sql .= "School = '$school', ";
    $sql .= "Category = '$category', ";
    $sql .= "Teacher = '$teacher', ";
    $sql .= "Date = '$date', ";
    $sql .= "Grade Level = $level, ";
    $sql .= "Subject = $subject, ";
    $sql .= "WHERE 'FormID' = $formid";
    $results = mysql_query($sql);
    
    if($results) echo "Form Updated!";
    else echo "Update Failed.";
    
}
else{
    $sql  = "INSERT INTO formmain ";
    $sql .= "(Name, School, Category, Teacher, Date, GradeLevel, Subject)";
    $sql .= " VALUES ";
    $sql .= "('$name', '$school', '$category', '$teacher', '$date', $level, $subject)";
    echo $sql;
    $results = mysql_query($sql);
    
    if($results) echo "Form Created!";
    else echo "Form Creation Failed.";
}

echo "<p><a href='homepage.php'>Return to Home Page</a></p>";
?>