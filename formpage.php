<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once("dbconnect.php");
require_once("checkboxes.php");
require_once("CRUD.php");
require_once("session.php");
$userid = $_SESSION['UserID'];

date_default_timezone_set('UTC');

$crud = new crud($checkboxes);

$formid = $_GET["FormID"];
$print = $_GET["print"];

    if($formid) {
        $sql  = "SELECT * ";
        $sql .= "FROM formmain ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        if($results && mysql_num_rows($results)) {
            $name = mysql_result($results, 0, "Name");
            $school = mysql_result($results, 0, "School");
            $category = mysql_result($results, 0, "Category");
            $teacher = mysql_result($results, 0, "Teacher");
            $date = mysql_result($results, 0, "Date");
            $level = mysql_result($results, 0, "GradeLevel");
            $subject = mysql_result($results, 0, "Subject");
        }
        
        $sql  = "SELECT * ";
        $sql .= "FROM formradio ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        if($results && mysql_num_rows($results)) {
            $period = mysql_result($results, 0, "Period");
            $grouping = mysql_result($results, 0, "Grouping");
            $differentiation = mysql_result($results, 0, "Differentiation");
        }
        
        $sql  = "SELECT * ";
        $sql .= "FROM formcomment ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        if($results && mysql_num_rows($results)) {
            $bcomments = mysql_result($results, 0, "Bcomments");
            $ccomments = mysql_result($results, 0, "Ccomments");
            $ecomments = mysql_result($results, 0, "Ecomments");
            $fcomments = mysql_result($results, 0, "Fcomments");
            $gcomments = mysql_result($results, 0, "Gcomments");
            $icomments = mysql_result($results, 0, "Icomments");
            $jcomments = mysql_result($results, 0, "Jcomments");
            $kcomments = mysql_result($results, 0, "Kcomments");
            $lcomments = mysql_result($results, 0, "Lcomments");
        }
        
        $sql  = "SELECT * ";
        $sql .= "FROM formcheckbox ";
        $sql .= "WHERE FormID = $formid";
        $results = mysql_query($sql);
        if($results && mysql_num_rows($results)) {
            foreach($checkboxes as $key => $value) {
                foreach($value as $number) {
                    $temp = $key . $number;
                    $$temp = mysql_result($results, 0, "$temp");
                    if($$temp == 1) {
                        $$temp = "checked=checked";
                    }
                    else $$temp = "";
                }
            }
        }
    }
    else {
        $name = $firstName . " " . $lastName;
        $school = $schoolName;
        $category = "";
        $teacher = 0;
        $date = date('l jS \of F Y h:i:s A');
        $level = 0;
        //$subject = 0;
        $period = 0;
        $grouping = 0;
        $differentiation = 0;
        $bcomments = "";
        $ccomments = "";
        $ecomments = "";
        $fcomments = "";
        $gcomments = "";
        $icomments = "";
        $jcomments = "";
        $kcomments = "";
        $lcomments = "";
        foreach($checkboxes as $key => $value) {
            foreach($value as $number) {
                $temp = $key . $number;
                $$temp = 0;
            }
        }
    }        
    
    if($print) {
            ob_start();
        }
?>

<html>
    <head>
        <meta http-equiv="refresh" content="30">
        <meta charset="UTF-8">
        <meta name="description" content="Handy Dandy Notebook">
        <meta name="keywords" content="Sycamore, Education, Evaluation, Teacher">
        <meta name="author" content="Joseph D Logue">
        <meta name="viewport" content="" width="device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap.css">
        <link type="text/css" rel="stylesheet" href="mystyle.css">
        <script src="jquery-2.1.4.min.js"></script>
        <script src="javascript.js"></script>
        <title>Handy Dandy Notebook</title>
    <script>
        function confirmed() {
            var r = confirm("Are you sure you want to delete this form?");
            if(r) location.href="action.php?formid=<?php echo $formid ?>&delete=true";
        }
    </script>
    </head>
    <body id='navScroll'>
        <?php
        echo "<nav class='navbar navbar-default navbar-fixed-top' position='static'>";
            echo "<div class='container-fluid'>";
                echo "<div class='navbar-header'>";
                    echo "<a class='navbar-brand' href='index.php'>";
                    echo "<img alt='Brand' src=''>";
                echo "</div>";
                echo "<div class='navbar-form navbar-right'>";
                    echo "<div align='right'>";
                    echo "<a type='button' class='btn btn-lg btn-primary navbar btn' href='homepage.php'>Home</a></span>";
                    echo "<a type='button' class='btn btn-lg btn-danger navbar btn' href='logOut.php'>Log Out</a></span>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</nav>";
        
        echo "<h2>Handy Dandy Notebook</h2>";
        echo "<form name='Handy Dandy Notebook' action='action.php' method='POST'>";
        echo "<input type='hidden' name='formid' value='$formid'>";
        echo "<input type='hidden' id='select' name='select' value='$category'>";
        echo "<input type='hidden' id='token' name='token' value='$token'>";
            echo "<table align='center' id='centertable' class='table table-striped table-bordered'>";
                echo "<th colspan='2'>Teacher Evaluation";
                    if($formid) {
                            echo "<div align='right'>";
                            echo "<button type='button' class='btn btn-danger' onclick='confirmed()'>Delete</button>";
                            echo "</div>";
                        }
                echo "</th>";
                echo "<tr>";
                    echo "<td class='head'>Evaluated By:</td>";
                    echo "<td class='head'>School:</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><input class='headdata' type='text' name='name' value='$name' placeholder='Type your name here...' required></td>";
                    echo "<td><input class='headdata' type='text' name='school' value='$school' placeholder='Type your school here...' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td class='head'>Teacher:</td>";
                    echo "<td class='head'>Class:</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><select id='teacher' class='headdata' name='teacher' required>";
                    echo "<option value=''>Select One</option>";
                    foreach($employees as $employeeID => $value) {

                        //debugLog("Employee name = " . $employeeFirst . $employeeLast);
                        $name = $value["employeeFirst"] . " " . $value["employeeLast"];
                        if($name === $teacher)$select = "selected=selected";
                        else $select = "";
                        echo "<option $select data-userID='$employeeID' value='$name'>$name</option>";
                    }
                    
                    echo "</select></td>";
                    echo "<td><select id='class' class='headdata' name='category' required>";
                    echo "</select></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td></td>";
                    echo "<td class='head'>Date and Time:</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td></td>";
                    echo "<td><input class='headdata' type='text' name='date' value='$date' placeholder='Type your date here...' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td class='head'>Grade Level:</td>";
                    echo "<td class='head'>Subject:</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><input class='headdata' type='text' name='category' value='$level' placeholder='Section Here...'>";
                            /*<select class='headdata' name='level' required>";
                            foreach($gradenames as $key => $value) {
                                $select = "";
                                if($level == $key)$select = "selected=selected";
                                echo "<option $select value = '$key'>$value</option>";
                            }</select>/**/
                    echo "</td>";
                    echo "<td><select class='headdata'name='subject' required>";
                            foreach($subjects as $key => $value) {
                                $select = "";
                                if($subject == $key)$select = "selected=selected";
                                echo "<option $select value = '$key'>$value</option>";
                            }
                        echo "</select></td>";
                echo "</tr>";
            echo "</table>";
            echo "<br>";
            
            
            echo "<table align='center' id='centertable' class='table table-bordered'>";
                echo "<th>Information</th>";
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Part of Period Observed</h4>";
                        echo "<div align='right'>";
                            if($period == 1) $period1 = "checked=checked";
                            else $period1 = "";
                                echo "<input type='radio' name='period' value='1' $period1>Beginning<br>";
                            if($period == 2) $period2 = "checked=checked";
                            else $period2 = "";
                                echo "<input type='radio' name='period' value='2' $period2>Middle<br>";
                            if($period == 3) $period3 = "checked=checked";
                            else $period3 = "";
                                echo "<input type='radio' name='period' value='3' $period3>End<br>";
                        echo "</div>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Classroom Environment</h4>";
                        echo "<div>";
                            echo "<ul>";
                            echo "<li>Arrangement of classroom conducive to learning";
                                echo "<input class='checkbox' type='checkbox' name='b1' value='1' $b1>";
                                echo "</li>";
                            echo "<li>Daily objectives/Essential questions evident";
                                echo "<input class='checkbox' type='checkbox' name='b2' value='1' $b2>";
                                echo "</li>";
                            echo "<li>Homework/Assignments posted";
                                echo "<input class='checkbox' type='checkbox' name='b3' value='1' $b3>";
                                echo "</li>";
                            echo "<li>Positive teacher/Student interaction evident";
                                echo "<input class='checkbox' type='checkbox' name='b4' value='1' $b4>";
                                echo "</li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='bcomments' rows='5' cols='100' placeholder='Type comments here...'>$bcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Teacher's Activity on Entry</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Direct Instruction";
                                    echo "<input class='checkbox' type='checkbox' name='c1' value='1' $c1></li>";
                                echo "<li>Circulating/Monitoring";
                                    echo "<input class='checkbox' type='checkbox' name='c2' value='1' $c2></li>";
                                echo "<li>Facilitating Learning";
                                    echo "<input class='checkbox' type='checkbox' name='c3' value='1' $c3></li>";
                                echo "<li>Working with Students";
                                    echo "<input class='checkbox' type='checkbox' name='c4' value='1' $c4></li>";
                                echo "<li>Reading to Students";
                                    echo "<input class='checkbox' type='checkbox' name='c5' value='1' $c5></li>";
                                echo "<li>Assessing";
                                    echo "<input class='checkbox' type='checkbox' name='c6' value='1' $c6></li>";
                                echo "<li>Not Interacting with Students";
                                    echo "<input class='checkbox' type='checkbox' name='c7' value='1' $c7></li>";
                                echo "<li>Sitting at Desk";
                                    echo "<input class='checkbox' type='checkbox' name='c8' value='1' $c8></li>";
                                echo "<li>Not Present";
                                    echo "<input class='checkbox' type='checkbox' name='c9' value='1' $c9></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='ccomments' rows='5' cols='100' placeholder='Type comments here...'>$ccomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Grouping Arrangement</h4>";
                        echo "<div align='right'>";
                            if($grouping == 1) $grouping1 = "checked=checked";
                            else $grouping1 = "";
                                echo "<input type='radio' name='grouping' value='1' $grouping1>Whole Group<br>";
                            if($grouping == 2) $grouping2 = "checked=checked";
                            else $grouping2 = "";
                                echo "<input type='radio' name='grouping' value='2' $grouping2>Small Group<br>";
                            if($grouping == 3) $grouping3 = "checked=checked";
                            else $grouping3 = "";
                                echo "<input type='radio' name='grouping' value='3' $grouping3>Individual<br>";
                            if($grouping == 4) $grouping4 = "checked=checked";
                            else $grouping4 = "";
                                echo "<input type='radio' name='grouping' value='4' $grouping4>Multiple Groupings<br>";
                        echo "</div>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Student Activities</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Assessment";
                                    echo "<input class='checkbox' type='checkbox' name='e1' value='1' $e1></li>";
                                echo "<li>Discussion";
                                    echo "<input class='checkbox' type='checkbox' name='e2' value='1' $e2></li>";
                                echo "<li>Guided Practice";
                                    echo "<input class='checkbox' type='checkbox' name='e3' value='1' $e3></li>";
                                echo "<li>Hands on/Inquiry";
                                    echo "<input class='checkbox' type='checkbox' name='e4' value='1' $e4></li>";
                                echo "<li>Listening";
                                    echo "<input class='checkbox' type='checkbox' name='e5' value='1' $e5></li>";
                                echo "<li>Note Taking";
                                    echo "<input class='checkbox' type='checkbox' nmae='e6' value='1' $e6></li>";
                                echo "<li>Reading";
                                    echo "<input class='checkbox' type='checkbox' name='e7' value='1' $e7></li>";
                                echo "<li>Seatwork/Worksheet";
                                    echo "<input class='checkbox' type='checkbox' name='e8' value='1' $e8></li>";
                                echo "<li>Student Presentation";
                                    echo "<input class='checkbox' type='checkbox' name='e9' value='1' $e9></li>";
                                echo "<li>Viewing Teacher Presentation";
                                    echo "<input class='checkbox' type='checkbox' name='e10' value='1' $e10></li>";
                                echo "<li>Viewing Video/Movie/Multimedia Presentation";
                                    echo "<input class='checkbox' type='checkbox' name='e11' value='1' $e11></li>";
                                echo "<li>Writing";
                                    echo "<input class='checkbox' type='checkbox' name='e12' value='1' $e12></li>";
                                echo "<li>Other";
                                    echo "<input class='checkbox' type='checkbox' name='e13' value='1' $e13></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='ecomments' rows='5' cols='100' placeholder='Type comments here...'>$ecomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Instruction</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Actively Engaging Students";
                                    echo "<input class='checkbox' type='checkbox' name='f1' value='1' $f1></li>";
                                echo "<li>Brainstorming";
                                    echo "<input class='checkbox' type='checkbox' name='f2' value='1' $f2></li>";
                                echo "<li>Comparing/Contrasting, Classifying, Analogies, Metaphors";
                                    echo "<input class='checkbox' type='checkbox' name='f3' value='1' $f3></li>";
                                echo "<li>Generating/Testing Hypotheses";
                                    echo "<input class='checkbox' type='checkbox' name='f4' value='1' $f4></li>";
                                echo "<li>Guided Practice/Homework Review";
                                    echo "<input class='checkbox' type='checkbox' name='f5' value='1' $f5></li>";
                                echo "<li>Lecture";
                                    echo "<input class='checkbox' type='checkbox' name='f6' value='1' $f6></li>";
                                echo "<li>Non-linguistic representations/graphic organizers";
                                    echo "<input class='checkbox' type='checkbox' name='f7' value='1' $f7></li>";
                                echo "<li>Reinforcing Effort/Giving Praise";
                                    echo "<input class='checkbox' type='checkbox' name='f8' value='1' $f8></li>";
                                echo "<li>Setting Objectives/Providing Feedback";
                                    echo "<input class='checkbox' type='checkbox' name='f9' value='1' $f9></li>";
                                echo "<li>Summarizing, Note Taking";
                                    echo "<input class='checkbox' type='checkbox' name='f10' value='1' $f10></li>";
                                echo "<li>Using Purposeful Questioning Techniques";
                                    echo "<input class='checkbox' type='checkbox' name='f11' value='1' $f11></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='fcomments' rows='5' cols='100' placeholder='Type comments here...'>$fcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                    echo "<h4>Technology Use</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>No Technology Used";
                                    echo "<input class='checkbox' type='checkbox' name='g1' value='1' $g1></li>";
                                echo "<li>Teacher is Presenting Using Technology";
                                    echo "<input class='checkbox' type='checkbox' name='g2' value='1' $g2></li>";
                                echo "<li>Teacher is Using Technology to Support Learning";
                                    echo "<input class='checkbox' type='checkbox' name='g3' value='1' $g3></li>";
                                echo "<li>Students are Presenting Using Technology";
                                    echo "<input class='checkbox' type='checkbox' name='g4' value='1' $g4></li>";
                                echo "<li>Students are Using Technology to Learn";
                                    echo "<input class='checkbox' type='checkbox' name='g5' value='1' $g5></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='gcomments' rows='5' cols='100' placeholder='Type comments here...'>$gcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Evidence of Differentiation</h4>";
                        echo "<div align='right'>";
                            if($differentiation == 1) $diff1 = "checked=checked";
                            else $diff1 = "";
                                echo "<input type='radio' name='differentiation' value='1' $diff1>Same Task/Same Level<br>";
                            if($differentiation == 2) $diff2 = "checked=checked";
                            else $diff2 = "";
                                echo "<input type='radio' name='differentiation' value='2' $diff2>Same Task/Different Level<br>";
                            if($differentiation == 3) $diff3 = "checked=checked";
                            else $diff3 = "";
                                echo "<input type='radio' name='differentiation' value='3' $diff3>Different Task/Same Level<br>";
                            if($differentiation == 4) $diff4 = "checked=checked";
                            else $diff4 = "";
                                echo "<input type='radio' name='differentiation' value='4' $diff4>Different Task/Different Level<br>";
                            if($differentiation == 5) $diff5 = "checked=checked";
                            else $diff5 = "";
                                echo "<input type='radio' name='differentiation' value='5' $diff5>No Evidence/No Activity<br>";
                        echo "</div>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Depth of Knowledge</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Recall/Reproduction (Remembering and Understanding";
                                    echo "<input class='checkbox' type='checkbox' name='i1' value='1' $i1></li>";
                                echo "<li>Basic Application (Applying)";
                                    echo "<input class='checkbox' type='checkbox' name='i2' value='1' $i2></li>";
                                echo "<li>Strategic Thinking (Analyzing and Evaluating";
                                    echo "<input class='checkbox' type='checkbox' name='i3' value='1' $i3></li>";
                                echo "<li>Extended Thinking (Creating)";
                                    echo "<input class='checkbox' type='checkbox' name='i4' value='1' $i4></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='icomments' rows='5' cols='100' placeholder='Type comments here...'>$icomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Content Literacy</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Vocabulary Development";
                                    echo "<input class='checkbox' type='checkbox' name='j1' value='1' $j1></li>";
                                echo "<li>Reading Comprehension";
                                    echo "<input class='checkbox' type='checkbox' name='j2' value='1' $j2></li>";
                                echo "<li>Academic Dialogue";
                                    echo "<input class='checkbox' type='checkbox' name='j3' value='1' $j3></li>";
                                echo "<li>Writing to Learn";
                                    echo "<input class='checkbox' type='checkbox' name='j4' value='1' $j4></li>";
                                echo "<li>Writing to Demonstrate Learning";
                                    echo "<input class='checkbox' type='checkbox' name='j5' value='1' $j5></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='jcomments' rows='5' cols='100' placeholder='Type comments here...'>$jcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>Classroom Management</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Teacher Creates/Supports a Positive Climate";
                                    echo "<input class='checkbox' type='checkbox' name='k1' value='1' $k1></li>";
                                echo "<li>Uses Time Appropriately";
                                    echo "<input class='checkbox' type='checkbox' name='k2' value='1' $k2></li>";
                                echo "<li>Makes Smooth Transitions";
                                    echo "<input class='checkbox' type='checkbox' name='k3' value='1' $k3></li>";
                                echo "<li>Enforces Procedures/Rules";
                                    echo "<input class='checkbox' type='checkbox' name='k4' value='1' $k4></li>";
                                echo "<li>Responds to Inappropriate Student Behavior";
                                    echo "<input class='checkbox' type='checkbox' name='k5' value='1' $k5></li>";
                                echo "<li>Has Resources Available and Ready to be Used";
                                    echo "<input class='checkbox' type='checkbox' name='k6' value='1' $k6></li>";
                            echo "</ul> ";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='kcomments' rows='5' cols='100' placeholder='Type comments here...'>$kcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class='formtd'>";
                        echo "<h4>21st Century Skills (Student Behaviors)</h4>";
                        echo "<div>";
                            echo "<ul>";
                                echo "<li>Productively Communicating";
                                    echo "<input class='checkbox' type='checkbox' name='l1' value='1' $l1></li>";
                                echo "<li>Collaborating with Peers";
                                    echo "<input class='checkbox' type='checkbox' name='l2' value='1' $l2></li>";
                                echo "<li>Creating";
                                    echo "<input class='checkbox' type='checkbox' name='l3' value='1' $l3></li>";
                                echo "<li>Thinking Critically";
                                    echo "<input class='checkbox' type='checkbox' name='l4' value='1' $l4></li>";
                                echo "<li>Using Information Literacy or Demonstrating Media Fluency";
                                    echo "<input class='checkbox' type='checkbox' name='l5' value='1' $l5></li>";
                                echo "<li>Not Evident";
                                    echo "<input class='checkbox' type='checkbox' name='l6' value='1' $l6></li>";
                            echo "</ul>";
                        echo "</div>";
                        echo "Comments:<br>";
                        echo "<textarea name='lcomments' rows='5' cols='100' placeholder='Type comments here...'>$lcomments</textarea>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>";
                        if($formid) {
                            echo "<div align='right'>";
                            echo "<button type='button' class='btn btn-danger' onclick='confirmed()'>Delete</button>";
                            echo "</div>";
                        }
                    echo "</td>";
                echo "</tr>";
            echo "</table>";
            
            
        if(!$print){
        echo "<div align='center'>";
        echo "<input type='submit' class='btn btn-primary btn-lg'name='submit' value='Submit'>";
        echo "<a class='btn btn-info' href='homepage.php' role='button'>Home</a>";
        echo "</div>";
        }
        
        if($print) {
            $formpdf = ob_get_contents();
            
            ob_end_clean();
            
            $file = $crud->readForm($formpdf);
        }
        
        echo "</form>";
        ?>
    </body>
</html>
