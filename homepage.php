<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="30">
        <meta name="viewport" content=""width="device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="mystyle.css">
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
    </head>
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
    require_once("session.php");
    require_once("CRUD.php");
    require_once("checkboxes.php");

    //create global variables for gradenames and 
    Global $gradenames, $subjects;

echo "<body id='navScroll'>";
echo "<nav class='navbar navbar-default navbar-fixed-top' position='static'>";
    echo "<div class='container-fluid'>";
        echo "<div class='navbar-header'>";
            echo "<a class='navbar-brand' href='index.php'>";
            echo "<img alt='Brand' src=''>";
        echo "</div>";
        echo "<div class='navbar-form navbar-right'>";
            echo "<div align='right'>";
            //echo "<a type='button' class='btn btn-lg btn-primary navbar btn' href='userLogin.php'>Log In</a></span>";
            echo "<a type='button' class='btn btn-lg btn-danger navbar btn' href='logOut.php'>Log Out</a></span>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</nav>";
echo "<h2>Handy Dandy Homepage</h2>";    
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

debugLog($userid);

?>
        
    <table align='center' id='centertable' class="table table-bordered table-hover table-striped table-condensed">
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
                echo "<td class='hometd'>$formid</td>";
                echo "<td class='hometd'>$name</td>";
                echo "<td class='hometd'>$school</td>";
                echo "<td class='hometd'>$category</td>";
                echo "<td class='hometd'>$teacher</td>";
                echo "<td class='hometd'>$date</td>";
                echo "<td class='hometd'>$glevel</td>";
                echo "<td class='hometd'>$sub</td>";
                echo "<td><a class='btn btn-primary' href='formpage.php?FormID=$formid' role='button'>EDIT/PRINT</a></td>";
                //echo "<td><a href='index.php?FormID=$formid&print=true' target=_blank>PDF</a></td>";
                echo "<td><button type='button' class='btn btn-info' onclick=\"window.open('formpage.php?FormID=$formid&print=true')\">PDF</button></td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";

?>

        <div align='center'>
            <a class='btn btn-primary' href ="formpage.php" role='button'>New Form</a>
            <a class='btn btn-danger' href="logOut.php" role='button'>Log Out</a>
        </div>
    </body>