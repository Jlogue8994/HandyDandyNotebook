
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
require_once("CRUD.php");
require_once("checkboxes.php");

function displayForm() {
    
    Global $gradenames, $subjects;
    
    ?>

<script>
    function printForm(formid) {
        var url = "homepage.php?task=print&formid=" + formid;
        window.open(url);
    }
</script>
<?php

$sql  = "SELECT * ";
$sql .= "FROM formmain ";
$results = mysql_query($sql);
?>
        
    <table>
        <tr>
            <td>FormID</td>
            <td>Name</td>
            <td>School</td>
            <td>Category</td>
            <td>Teacher</td>
            <td>Date</td>
            <td>Grade Level</td>
            <td>Subject</td>
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
                echo "<td><a href='index.php?FormID=$formid'>EDIT</a></td>";
                echo "<td><button type='button' onclick='printForm($formid)'>Print</button></td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";

?>

        <div>
            <a href ="index.php">Create New Form</a>
        </div>
<?php
}
function printForm($formid) {
    $crud = new crud();
    
    $crud->readForm($formid);
}
$task = $_GET["task"];

    if($task == "")        displayForm();
    else if($task == "print") {
        $formid = $_GET["formid"];
        printForm($formid);
    }
?>