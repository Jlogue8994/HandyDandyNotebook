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
        
$crud = new crud();

$sql  = "SELECT FormID, Name, School, Category, Teacher, Date, GradeLevel, Subject ";
$sql .= "FROM formmain ";
$results = mysql_query($sql);
?>
        
    <table>
        <tr>
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
                $userid = mysql_result($results, $i, "FormID");
                $name = mysql_result($results, $i, "Name");
                $school = mysql_result($results, $i, "School");
                $category = mysql_result($results, $i, "Category");
                $teacher = mysql_result($results, $i, "Teacher");
                $date = mysql_result($results, $i, "Date");
                $gradelevel = mysql_result($results, $i, "GradeLevel");
                $subject = mysql_result($results, $i, "Subject");
                
                
                
                switch($subject) {
                    case 1:
                        $subject = "Religion/Theology";
                        break;
                    case 2:
                        $subject = "Mathematics"
                }
                if($married) $married = "Yes";
                else $married = "No";
            
                echo "<tr>";
                echo "<td><a href='edit.php?userid=$userid'>$name</a></td>";
                echo "<td>$age</td>";
                echo "<td>$married</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
?>

        <div>
            <a href ="index.php">Create New Form</a>
        </div>