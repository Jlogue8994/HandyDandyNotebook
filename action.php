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
require_once("CRUD.php");

$crud = new crud();

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

foreach($checkboxes as $group => $numbers) {
    foreach($numbers as $number) {
        $temp = $group . $number;
        $is_there = $$temp;
        echo $is_there;
        if($_POST[$is_there]) $crud->$is_there = 1;
    }
}
    
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
$crud->bcomments = $_POST['bcomments'];
$crud->ccomments = $_POST['ccomments'];
$crud->ecomments = $_POST['ecomments'];
$crud->fcomments = $_POST['fcomments'];
$crud->gcomments = $_POST['gcomments'];
$crud->icomments = $_POST['icomments'];
$crud->jcomments = $_POST['jcomments'];
$crud->kcomments = $_POST['kcomments'];
$crud->lcomments = $_POST['lcomments'];


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

 