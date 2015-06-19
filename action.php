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
require_once("CRUD.php");

$crud = new crud();
    
$crud->name = $_POST['name'];
$crud->school = $_POST['school'];
$crud->category = $_POST['category'];
$crud->teacher = $_POST['teacher'];
$crud->date = $_POST['date'];
$crud->level = $_POST['level'];
$crud->subject = $_POST['subject'];
$crud->period = $_POST['period'];
$crud->grouping = $_POST['grouping'];
$crud->differentiation = $_POST['differentiation'];
$formid = $_POST['formid'];

if($formid){
    
    $crud->updateForm();
}
else{
    
    $crud->createForm();
}

echo "<p><a href='homepage.php'>Return to Home Page</a></p>";
//$name, $school, $category, $teacher, $date, $level, $subject,
            //$period, $grouping, $differentiation
?>

 