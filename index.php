<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Handy Dandy Notebook">
        <meta name="keywords" content="Sycamore, Education, Evaluation, Teacher">
        <meta name="author" content="Joe Logue">
        <link type="text/css" rel="stylesheet" href="stylesheet.css">
        <title>
            The Handy Dandy Notebook
        </title>
    <h2>Handy Dandy Notebook.</h2>
    </head>
    <body>
        <form action="formAction.php">
            <table align="center">
                <th colspan="2">Teacher Evaluation</th>
                <tr>
                    <td>Walk-Through Name</td>
                    <td>Template</td>
                </tr>
                <tr>
                    <td><input type="text" name="Walk-Through Name" required></td>
                    <td><input type="text" name="Template" required></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>Subject</td>
                </tr>
                <tr>
                    <td><input type="text" name="Category" required></td>
                    <td><input type="text" name="Subject" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Date and Time</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="Date" required></td>
                </tr>
                <tr>
                    <td>Grade Level</td>
                    <td>Subject</td>
                </tr>
                <tr>
                    <td><select name="Grade Level" required>
                            <option value ="Pre-K/Early Childhood">Pre-K/Early Childhood</option>
                            <option value="Kindergarten">Kindergarten</option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                            <option value="Third">Third</option>
                            <option value="Fourth">Fourth</option>
                            <option value="Fifth">Fifth</option>
                            <option value="Sixth">Sixth</option>
                            <option value="Seventh">Seventh</option>
                            <option value="Eighth">Eighth</option>
                            <option value="Ninth">Ninth</option>
                            <option value="Tenth">Tenth</option>
                            <option value="Eleventh">Eleventh</option>
                            <option value="Twelfth">Twelfth</option>
                            <option value="Mixed">Mixed</option>
                            <option value="Other">Other</option>
                        </select></td>
                    <td><select name="Subject" required>
                            <option value="Religion/Theology">Religion/Theology</option>
                            <option value="Mathematics">Methematics</option>
                            <option value="Science">Science</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Foreign Language">Foreign Language</option>
                            <option value="Language Arts/English">Language Arts/English</option>
                            <option value="Literature">Literature</option>
                            <option value="Computer/Computer Science">Computer/Computer Science</option>
                            <option value="PE">PE</option>
                            <option value="Music">Music</option>
                            <option value="Art">Art</option>
                            <option value="Library">Library</option>
                            <option value="Reading">Reading</option>
                            <option value="Other">Other</option>
                        </select></td>
                </tr>
            </table>
            <br>
            <table align="center">
                <th>Page 1</th>
                <tr>
                    <td>
                        <h4>Part of Period Observed</h4>
                        <div align="right">
                            <input type="radio" name="period" value="Beginning">Beginning<br>
                            <input type="radio" name="period" value="Middle">Middle<br>
                            <input type="radio" name="period" value="End">End<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Classroom Environment</h4>
                        <div>
                            <ul>
                            <li>Arrangement of classroom conducive to learning
                                <input type="checkbox" name="environment" value="Arr
                                angement of classroom conducive to learning">
                                </li>
                            <li>Daily objectives/Essential questions evident
                                <input type="checkbox" name="environment" value="
                                Daily objectives/Essential questions evident">
                                </li>
                            <li>Homework/Assignments posted
                                <input type="checkbox" name="environment" value="
                                Homework/Assignments posted">
                                </li>
                            <li>Positive teacher/Student interaction evident
                                <input type="checkbox" name="environment" value="
                                Positive teacher/Student interaction evident">
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Teacher's Activity on Entry</h4>
                        <div>
                            <ul>
                                <li>Direct Instruction<input type="checkbox" name="teacheract"
                                                             value="Direct Instruction"></li>
                                <li>Circulating/Monitoring<input type="checkbox" name="teacheract"
                                                                 value="Circulating/Monitoring"></li>
                                <li>Facilitating Learning<input type="checkbox" name="teacheract"
                                                                value="Facilitating Learning"></li>
                                <li>Working with Students<input type="checkbox" name="teacheract"
                                                                value="Working with Students"</li>
                                <li>Reading to Students<input type="checkbox" name="teacheract" 
                                                              value="Reading to Students"></li>
                                <li>Assessing<input type="checkbox" name="teacheract"
                                                    value="Assessing"></li>
                                <li>Not Interacting with Students<input type="checkbox" name="teacheract"
                                                                        value="Not Interacting with Students"></li>
                                <li>Sitting at Desk<input type="checkbox" name="teacheract" 
                                                          value="Sitting at Desk"></li>
                                <li>Not Present<input type="checkbox" name="teacheract"
                                                      value="Not Present"></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Grouping Arrangement</h4>
                        <div align="right">
                            <input type="radio" name="grouping" value="Whole Group">Whole Group<br>
                            <input type="radio" name="grouping" value="Small Group">Small Group<br>
                            <input type="radio" name="grouping" value="Individual">Individual<br>
                            <input type="radio" name="grouping" value="Multiple Groupings">Multiple Groupings<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Student Activities</h4>
                        <div>
                            <ul>
                                <li>Assessment<input type="checkbox" name="studact"
                                                     value="Assessment"></li>
                                <li>Discussion<input type="checkbox" name="studact"
                                                     value="Discussion"></li>
                                <li>Guided Practice<input type="checkbox" name="studact"
                                                          value="Guided Practice"></li>
                                <li>Hands on/Inquiry<input type="checkbox" name="studact"
                                                           value="Hands on/Inquiry"></li>
                                <li>Listening<input type="checkbox" name="studact"
                                                    value="Listening"></li>
                                <li>Note Taking<input type="checkbox" nmae="studact"
                                                      value="Note Taking"></li>
                                <li>Reading<input type="checkbox" name="studact"
                                                  value="Reading"></li>
                                <li>Seatwork/Worksheet<input type="checkbox" name="studact"
                                                             value="Seatwork/Worksheet"></li>
                                <li>Student Presentation<input type="checkbox" name="studact"
                                                               value="Student Presentation"></li>
                                <li>Viewing Teacher Presentation<input type="checkbox" name="studact"
                                                                       value="Viewing Teacher Presentation"></li>
                                <li>Viewing Video/Movie/Multimedia Presentation
                                       <input type="checkbox" name="studact"
                                       value="Viewing Video/Movie/Multimedia Presentation"></li>
                                <li>Writing<input type="checkbox" name="studact"
                                                  value="Writing"></li>
                                <li>Other<input type="checkbox" name="studact"
                                value="Other"</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Instruction</h4>
                        <div>
                            <ul>
                                <li>Actively Engaging Students<input type="checkbox"
                                    name="instruction" value="Actively Engaging Students"></li>
                                <li>Brainstorming<input type="checkbox" name="instruction"
                                                        value="Brainstorming"></li>
                                <li>Comparing/Contrasting, Classifying, Analogies, Metaphors
                                    <input type="checkbox" name="instruction"
                                           value="Comparing/Contrasting, Classifying, Analogies, Metaphors"></li>
                                <li>Generating/Testing Hypotheses<input type="checkbox" name="instruction"
                                                                        value="Generating/Testing Hypotheses"></li>
                                <li>Guided Practice/Homework Review<input type="checkbox" name="instruction"
                                                                          value="Guided Practice/Homework Review"></li>
                                <li>Lecture<input type="checkbox" name="instruction"
                                                  value="Lecture"></li>
                                <li>Non-linguistic representations/graphic organizers<input type="checkbox"
                                    name="instruction" value="Non-linguistic representations/graphic organizers"></li>
                                <li>Reinforcing Effort/Giving Praise<input type="checkbox"
                                    name="instruction" value="Reinforcing Effort/Giving Praise"></li>
                                <li>Setting Objectives/Providing Feedback<input type="checkbox"
                                    name="instruction" value="Setting Objectives/Providing Feedback"></li>
                                <li>Summarizing, Note Taking<input type="checkbox" name="instruction"
                                                                   value="Summarizing, Note Taking"></li>
                                <li>Using Purposeful Questioning Techniques<input type="checkbox" name="instruction"
                                    value="Using Purposeful Questioning Techniques"></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>