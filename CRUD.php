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

Class crud
{   
    public $name, $school, $category, $teacher, $date, $level, $subject, $period, $grouping, $differentiation;
    
    
    public function createForm() {
        
        $sql  = "INSERT INTO formmain ";
        $sql .= "(Name, School, Category, Teacher, Date, GradeLevel, Subject)";
        $sql .= " VALUES ";
        $sql .= "('$this->name', '$this->school', '$this->category', '$this->teacher', '$this->date', $this->level, $this->subject)";
        echo $sql;
        $results = mysql_query($sql);
    
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formradio ";
        $sql .= "(Period, Grouping, Differentiation)";
        $sql .= " VALUES ";
        $sql .= "($this->period, $this->grouping, $this->differentiation)";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
    }
    
    public function readForm() {
        
    }
    
    public function updateForm() {
        
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
    
    public function deleteForm() {
        
        $formid = $_GET['formid'];
        
        $sql  = "DELETE FROM formmain ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "User deleted!";
        else echo "User delete failed";
        
        echo "<a href='homepage.php'>Return to home page</a>";
    }
}



?>