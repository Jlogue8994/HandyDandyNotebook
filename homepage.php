<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="mystyle.css">
    <h2>Handy Dandy Homepage</h2>
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
    require_once("session.php");
    require_once("CRUD.php");
    require_once("checkboxes.php");

    Global $gradenames, $subjects;

?>

<script>
    function printForm(formid) {
        var url = "homepage.php?task=print&formid=" + formid;
        window.open(url);
    }
</script>

<?php
if($userid) {
$sql  = "SELECT * ";
$sql .= "FROM formmain ";
$sql .= "WHERE UserID = $userid";
$results = mysql_query($sql);
}

echo $userid;

?>
        
    <table align='center'>
        <tr>
            <td class="homepage">FormID</td>
            <td class="homepage">Evaluated By</td>
            <td class="homepage">School</td>
            <td class="homepage">Category</td>
            <td class="homepage">Teacher</td>
            <td class="homepage">Date</td>
            <td class="homepage">Grade Level</td>
            <td class="homepage">Subject</td>
            <td colspan="2" class="homepage">Options</td>
        </tr>

<?php
    
    if($results) {
        if($count = mysql_num_rows($results)){
            for($i=0; $i < $count; $i++){
                $formid = mysql_result($results, $i, "FormID");
                $name = mysql_result($results, $i, "Name");
                $school = mysql_result($results, $i, "School");
                $category = mysql_result($results, $i, "Category");
                $teacher = mysql_result($results, $i, "Teacher");
                $date = mysql_result($results, $i, "Date");
                $gradelevel = mysql_result($results, $i, "GradeLevel");
                $subject = mysql_result($results, $i, "Subject");
                       
                $glevel = $gradenames[$gradelevel];
                $sub = $subjects[$subject];
            
                echo "<tr>";
                echo "<td>$formid</td>";
                echo "<td>$name</td>";
                echo "<td>$school</td>";
                echo "<td>$category</td>";
                echo "<td>$teacher</td>";
                echo "<td>$date</td>";
                echo "<td>$glevel</td>";
                echo "<td>$sub</td>";
                echo "<td><a href='formpage.php?FormID=$formid'>EDIT/PRINT</a></td>";
                //echo "<td><a href='index.php?FormID=$formid&print=true' target=_blank>PDF</a></td>";
                echo "<td><button type='button' onclick=\"window.open('formpage.php?FormID=$formid&print=true')\">PDF</button></td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";

?>

        <div>
            <a href ="formpage.php">Create New Form</a>
            <a href ="logOut.php">Log Out</a>
        </div>