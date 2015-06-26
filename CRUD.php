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
require_once("checkboxes.php");

Class crud
{   
    public $name, $school, $category, $teacher, $date, $level, $subject, $period, $grouping, $differentiation,
           $bcomments, $ccomments, $ecomments, $fcomments, $gcomments, $icomments, $jcomments, $kcomments, $lcomments;
    
    public function __construct($checkboxes){
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
            $temp = $group . $number;
            $this->$temp = 0;
            }
        }
        $this->period = 0;
        $this->grouping = 0;
        $this->differentiation = 0;
    }
    
    public function createForm() {
        global $checkboxes;
        
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
        
        $sql  = "INSERT INTO formcomment ";
        $sql .= "(Bcomments, Ccomments, Ecomments, Fcomments, Gcomments, Icomments, Jcomments, Kcomments, Lcomments)";
        $sql .= " VALUES ";
        $sql .= "('$this->bcomments', '$this->ccomments', '$this->ecomments', '$this->fcomments', '$this->gcomments', '$this->icomments', '$this->jcomments', '$this->kcomments', '$this->lcomments')";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formcheckbox (";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
        $sql .= "$temp,";
            }
        }
        
        $sql  = substr($sql, 0, -1);
        $sql .= ")VALUES(";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
                $check = $this->$temp;
        $sql .= "$check,";
            }
        }
        $sql = substr($sql, 0, -1);
        $sql .= ")";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
    }
    
    public function readForm($formid) {
        global $checkboxes;
        
        $sql  = "SELECT * ";
        $sql .= "FROM formmain ";
        $sql .= "WHERE FormID = $formid ";
        $results = mysql_query($sql);
        
        
    }
    
    public function updateForm() {
        global $checkboxes;
        
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
        
        $sql  = "UPDATE formradio SET ";
        $sql .= "Period = $this->period, ";
        $sql .= "Grouping = $this->grouping, ";
        $sql .= "Differentiation = $this->differentiation, ";
        $sql .= "WHERE 'FormradioID' = $formradioid";
        $results = mysql_query($sql);
    
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
        
        $sql  = "UPDATE formcomment SET ";
        $sql .= "Bcomments = '$bcomments', ";
        $sql .= "Ccomments = '$ccomments', ";
        $sql .= "Ecomments = '$ecomments', ";
        $sql .= "Fcomments = '$fcomments', ";
        $sql .= "Gcomments = '$gcomments', ";
        $sql .= "Icomments = '$icomments', ";
        $sql .= "Jcomments = '$jcomments', ";
        $sql .= "Kcomments = '$kcomments', ";
        $sql .= "Lcomments = '$lcomments', ";
        $sql .= "WHERE 'CommentID' = $commentid";
        $results = mysql_query($sql);
        
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
        
        $sql  = "UPDATE formcheckbox SET ";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
                $check = $this->$temp;
        $sql .= "$temp = '$check', ";
            }
        }
        
        $sql .= "WHERE 'CheckID' = $checkid";
        $results = mysql_query($sql);
        
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
    }
    
    public function deleteForm() {
        global $checkboxes;
        
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