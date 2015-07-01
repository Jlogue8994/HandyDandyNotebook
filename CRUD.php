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
           $bcomments, $ccomments, $ecomments, $fcomments, $gcomments, $icomments, $jcomments, $kcomments, $lcomments,
           $formid;
    
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
        
        $formid = mysql_insert_id();
    
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formradio ";
        $sql .= "(FormID, Period, Grouping, Differentiation)";
        $sql .= " VALUES ";
        $sql .= "($formid, $this->period, $this->grouping, $this->differentiation)";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formcomment ";
        $sql .= "(FormID, Bcomments, Ccomments, Ecomments, Fcomments, Gcomments, Icomments, Jcomments, Kcomments, Lcomments)";
        $sql .= " VALUES ";
        $sql .= "($formid, '$this->bcomments', '$this->ccomments', '$this->ecomments', '$this->fcomments', '$this->gcomments', '$this->icomments', '$this->jcomments', '$this->kcomments', '$this->lcomments')";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formcheckbox (FormID, ";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
        $sql .= "$temp,";
            }
        }
        
        $sql  = substr($sql, 0, -1);
        $sql .= ")VALUES($formid, ";
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
        $sql .= "Name = '$this->name', ";
        $sql .= "School = '$this->school', ";
        $sql .= "Category = '$this->category', ";
        $sql .= "Teacher = '$this->teacher', ";
        $sql .= "Date = '$this->date', ";
        $sql .= "GradeLevel = $this->level, ";
        $sql .= "Subject = $this->subject ";
        $sql .= "WHERE FormID = $this->formid";
        $results = mysql_query($sql);
        
        echo $sql;
        
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
        
        $sql  = "UPDATE formradio SET ";
        $sql .= "Period = $this->period, ";
        $sql .= "Grouping = $this->grouping, ";
        $sql .= "Differentiation = $this->differentiation ";
        $sql .= "WHERE FormID = $this->formid";
        $results = mysql_query($sql);
        
        echo $sql;
    
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
        
        $sql  = "UPDATE formcomment SET ";
        $sql .= "Bcomments = '$this->bcomments', ";
        $sql .= "Ccomments = '$this->ccomments', ";
        $sql .= "Ecomments = '$this->ecomments', ";
        $sql .= "Fcomments = '$this->fcomments', ";
        $sql .= "Gcomments = '$this->gcomments', ";
        $sql .= "Icomments = '$this->icomments', ";
        $sql .= "Jcomments = '$this->jcomments', ";
        $sql .= "Kcomments = '$this->kcomments', ";
        $sql .= "Lcomments = '$this->lcomments' ";
        $sql .= "WHERE FormID = $this->formid";
        $results = mysql_query($sql);
        
        echo $sql;
        
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
        
        $sql  = "UPDATE formcheckbox SET";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
                $check = $this->$temp;
        $sql .= " $temp = '$check',";
            }
        }
        $sql = substr($sql, 0, -1);
        
        $sql .= " WHERE FormID = $this->formid";
        $results = mysql_query($sql);
        
        echo $sql;
        
        if($results) echo "Form Updated!";
        else echo "Update Failed.";
    }
    
    public function deleteForm($formid) {
        global $checkboxes;
        
        echo "Delete confirmed.";
        /*$sql  = "DELETE FROM formmain ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "User deleted!";
        else echo "User delete failed";
/**/
        
        echo "<a href='homepage.php'>Return to home page</a>";
    }
}



?>