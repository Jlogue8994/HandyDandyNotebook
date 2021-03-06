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

require_once("dbconnect.php");
require_once("checkboxes.php");
require_once("session.php");
include('mpdf/mpdf.php');

Class crud
{   
    public $name, $school, $category, $teacher, $date, $level, $subject, $period, $grouping, $differentiation,
           $bcomments, $ccomments, $ecomments, $fcomments, $gcomments, $icomments, $jcomments, $kcomments, $lcomments,
           $formid, $userid;
    
    public function __construct($checkboxes){
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
            $temp = $group . $number;
            $this->$temp = 0;
            }
        }
        $this->name = "";
        $this->school = "";
        $this->category = "";
        $this->teacher = "";
        $this->date = "";
        $this->level = 0;
        $this->subject = 0;
        $this->period = 0;
        $this->grouping = 0;
        $this->differentiation = 0;
        $this->userid = $_SESSION['UserID'];
    }
    
    public function createForm() {
        global $checkboxes;
        echo $userid;
        
        $sql  = "INSERT INTO formmain ";
        $sql .= "(UserID, Name, School, Category, Teacher, Date, GradeLevel, Subject)";
        $sql .= " VALUES ";
        $sql .= "($this->userid, '$this->name', '$this->school', '$this->category', '$this->teacher', '$this->date', $this->level, $this->subject)";
        echo $sql;
        $results = mysql_query($sql);
        
        $formid = mysql_insert_id();
    
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formradio ";
        $sql .= "(FormID, UserID, Period, Grouping, Differentiation)";
        $sql .= " VALUES ";
        $sql .= "($formid, $this->userid, $this->period, $this->grouping, $this->differentiation)";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formcomment ";
        $sql .= "(FormID, UserID, Bcomments, Ccomments, Ecomments, Fcomments, Gcomments, Icomments, Jcomments, Kcomments, Lcomments)";
        $sql .= " VALUES ";
        $sql .= "($formid, $this->userid, '$this->bcomments', '$this->ccomments', '$this->ecomments', '$this->fcomments', '$this->gcomments', '$this->icomments', '$this->jcomments', '$this->kcomments', '$this->lcomments')";
        echo $sql;
        $results = mysql_query($sql);
        
        if($results) echo "Form Created!";
        else echo "Form Creation Failed.";
        
        $sql  = "INSERT INTO formcheckbox (FormID, UserID, ";
        foreach($checkboxes as $group => $numbers) {
            foreach($numbers as $number) {
                $temp = $group . $number;
        $sql .= "$temp,";
            }
        }
        
        $sql  = substr($sql, 0, -1);
        $sql .= ")VALUES($formid, $this->userid, ";
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
        
        echo "<a href='homepage.php'>Return to home page</a>";
        
    }
    
    public function readForm($formpdf) {
        
        $mpdf = new mPDF();
        
        $mpdf->WriteHTML($formpdf);
        
        $file = "HandyDandyPDF.pdf";
        
        $mpdf->Output($file, 'I');
        
        return $file;
        
        
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
        echo "<br>";
        
        echo $formid;
        
        $sql  = "DELETE FROM formmain ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "Form deleted!";
        else echo "Form delete failed";
        
        $sql  = "DELETE FROM formradio ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "Form deleted!";
        else echo "Form delete failed";
        
        $sql  = "DELETE FROM formcomment ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "Form deleted!";
        else echo "Form delete failed";
        
        $sql  = "DELETE FROM formcheckbox ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        
        if($results) echo "Form deleted!";
        else echo "Form delete failed";
/**/
        
        echo "<a href='homepage.php'>Return to home page</a>";
    }
}



?>