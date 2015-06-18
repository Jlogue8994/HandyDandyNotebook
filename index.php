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
    <h2>Handy Dandy Notebook</h2>
    </head>
    <body>
        <form name="Handy Dandy Notebook" action="action.php" method="POST">
            <table align="center">
                <th colspan="2" font-size="20px">Teacher Evaluation</th>
                <tr>
                    <td>Evaluated By:</td>
                    <td>School:</td>
                </tr>
                <tr>
                    <td><input class="headdata" type="text" name="name" required></td>
                    <td><input class="headdata" type="text" name="school" required></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>Teacher:</td>
                </tr>
                <tr>
                    <td><input class="headdata" type="text" name="category" required></td>
                    <td><input class="headdata" type="text" name="teacher" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Date and Time:</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="headdata" type="text" name="date" required></td>
                </tr>
                <tr>
                    <td>Grade Level:</td>
                    <td>Subject:</td>
                </tr>
                <tr>
                    <td><select name="level" required>
                            <option value ="1">Pre-K/Early Childhood</option>
                            <option value="2">Kindergarten</option>
                            <option value="3">First</option>
                            <option value="4">Second</option>
                            <option value="5">Third</option>
                            <option value="6">Fourth</option>
                            <option value="7">Fifth</option>
                            <option value="8">Sixth</option>
                            <option value="9">Seventh</option>
                            <option value="10">Eighth</option>
                            <option value="11">Ninth</option>
                            <option value="12">Tenth</option>
                            <option value="13">Eleventh</option>
                            <option value="14">Twelfth</option>
                            <option value="15">Mixed</option>
                            <option value="16">Other</option>
                        </select></td>
                    <td><select name="subject" required>
                            <option value="1">Religion/Theology</option>
                            <option value="2">Mathematics</option>
                            <option value="3">Science</option>
                            <option value="4">Social Studies</option>
                            <option value="5">Foreign Language</option>
                            <option value="6">Language Arts/English</option>
                            <option value="7">Literature</option>
                            <option value="8">Computer/Computer Science</option>
                            <option value="9">PE</option>
                            <option value="10">Music</option>
                            <option value="11">Art</option>
                            <option value="12">Library</option>
                            <option value="13">Reading</option>
                            <option value="14">Other</option>
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
                            <input type="radio" name="period" value="1">Beginning<br>
                            <input type="radio" name="period" value="2">Middle<br>
                            <input type="radio" name="period" value="3">End<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Classroom Environment</h4>
                        <div>
                            <ul>
                            <li>Arrangement of classroom conducive to learning
                                <input type="checkbox" name="B1" value="1">
                                </li>
                            <li>Daily objectives/Essential questions evident
                                <input type="checkbox" name="B2" value="2">
                                </li>
                            <li>Homework/Assignments posted
                                <input type="checkbox" name="B3" value="3">
                                </li>
                            <li>Positive teacher/Student interaction evident
                                <input type="checkbox" name="B4" value="4">
                                </li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="bcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Teacher's Activity on Entry</h4>
                        <div>
                            <ul>
                                <li>Direct Instruction
                                    <input type="checkbox" name="C1" value="1"></li>
                                <li>Circulating/Monitoring
                                    <input type="checkbox" name="C2" value="2"></li>
                                <li>Facilitating Learning
                                    <input type="checkbox" name="C3" value="3"></li>
                                <li>Working with Students
                                    <input type="checkbox" name="C4" value="4"</li>
                                <li>Reading to Students
                                    <input type="checkbox" name="C5" value="5"></li>
                                <li>Assessing
                                    <input type="checkbox" name="C6" value="6"></li>
                                <li>Not Interacting with Students
                                    <input type="checkbox" name="C7" value="7"></li>
                                <li>Sitting at Desk
                                    <input type="checkbox" name="C8" value="8"></li>
                                <li>Not Present
                                    <input type="checkbox" name="C9" value="9"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="ccomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Grouping Arrangement</h4>
                        <div align="right">
                            <input type="radio" name="grouping" value="1">Whole Group<br>
                            <input type="radio" name="grouping" value="2">Small Group<br>
                            <input type="radio" name="grouping" value="3">Individual<br>
                            <input type="radio" name="grouping" value="4">Multiple Groupings<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Student Activities</h4>
                        <div>
                            <ul>
                                <li>Assessment
                                    <input type="checkbox" name="E1" value="1"></li>
                                <li>Discussion
                                    <input type="checkbox" name="E2" value="2"></li>
                                <li>Guided Practice
                                    <input type="checkbox" name="E3" value="3"></li>
                                <li>Hands on/Inquiry
                                    <input type="checkbox" name="E4" value="4"></li>
                                <li>Listening
                                    <input type="checkbox" name="E5" value="5"></li>
                                <li>Note Taking
                                    <input type="checkbox" nmae="E6" value="6"></li>
                                <li>Reading
                                    <input type="checkbox" name="E7" value="7"></li>
                                <li>Seatwork/Worksheet
                                    <input type="checkbox" name="E8" value="8"></li>
                                <li>Student Presentation
                                    <input type="checkbox" name="E9" value="9"></li>
                                <li>Viewing Teacher Presentation
                                    <input type="checkbox" name="E10" value="10"></li>
                                <li>Viewing Video/Movie/Multimedia Presentation
                                       <input type="checkbox" name="E11" value="11"></li>
                                <li>Writing
                                    <input type="checkbox" name="E12" value="12"></li>
                                <li>Other
                                    <input type="checkbox" name="E13" value="13"</li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="ecomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Instruction</h4>
                        <div>
                            <ul>
                                <li>Actively Engaging Students
                                    <input type="checkbox" name="F1" value="1"></li>
                                <li>Brainstorming
                                    <input type="checkbox" name="F2" value="2"></li>
                                <li>Comparing/Contrasting, Classifying, Analogies, Metaphors
                                    <input type="checkbox" name="F3" value="3"></li>
                                <li>Generating/Testing Hypotheses
                                    <input type="checkbox" name="F4" value="4"></li>
                                <li>Guided Practice/Homework Review
                                    <input type="checkbox" name="F5" value="5"></li>
                                <li>Lecture
                                    <input type="checkbox" name="F6" value="6"></li>
                                <li>Non-linguistic representations/graphic organizers
                                    <input type="checkbox" name="F7" value="7"></li>
                                <li>Reinforcing Effort/Giving Praise
                                    <input type="checkbox" name="F8" value="8"></li>
                                <li>Setting Objectives/Providing Feedback
                                    <input type="checkbox" name="F9" value="9"></li>
                                <li>Summarizing, Note Taking
                                    <input type="checkbox" name="F10" value="10"></li>
                                <li>Using Purposeful Questioning Techniques
                                    <input type="checkbox" name="F11" value="11"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="fcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    <h4>Technology Use</h4>
                        <div>
                            <ul>
                                <li>No Technology Used
                                    <input type="checkbox" name="G1" value="1"></li>
                                <li>Teacher is Presenting Using Technology
                                    <input type="checkbox" name="G2" value="2"></li>
                                <li>Teacher is Using Technology to Support Learning
                                    <input type="checkbox" name="G3" value="3"></li>
                                <li>Students are Presenting Using Technology
                                    <input type="checkbox" name="G4" value="4"></li>
                                <li>Students are Using Technology to Learn
                                    <input type="checkbox" name="G5" value="5"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="gcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Evidence of Differentiation</h4>
                        <div align="right">
                            <input type="radio" name="differentiation" value="1">Same Task/Same Level<br>
                            <input type="radio" name="differentiation" value="2">Same Task/Different Level<br>
                            <input type="radio" name="differentiation" value="3">Different Task/Same Level<br>
                            <input type="radio" name="differentiation" value="4">Different Task/Different Level<br>
                            <input type="radio" name="differentiation" value="5">No Evidence/No Activity<br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Depth of Knowledge</h4>
                        <div>
                            <ul>
                                <li>Recall/Reproduction (Remembering and Understanding
                                    <input type="checkbox" name="I1" value="1"></li>
                                <li>Basic Application (Applying)
                                    <input type="checkbox" name="I2" value="2"></li>
                                <li>Strategic Thinking (Analyzing and Evaluating
                                    <input type="checkbox" name="I3" value="3"></li>
                                <li>Extended Thinking (Creating)
                                    <input type="checkbox" name="I4" value="4"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="icomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Content Literacy</h4>
                        <div>
                            <ul>
                                <li>Vocabulary Development
                                    <input type="checkbox" name="J1" value="1"></li>
                                <li>Reading Comprehension
                                    <input type="checkbox" name="J2" value="2"></li>
                                <li>Academic Dialogue
                                    <input type="checkbox" name="J3" value="3"></li>
                                <li>Writing to Learn
                                    <input type="checkbox" name="J4" value="4"></li>
                                <li>Writing to Demonstrate Learning
                                    <input type="checkbox" name="J5" value="5"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="jcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Classroom Management</h4>
                        <div>
                            <ul>
                                <li>Teacher Creates/Supports a Positive Climate
                                    <input type="checkbox" name="K1" value="1"></li>
                                <li>Uses Time Appropriately
                                    <input type="checkbox" name="K2" value="2"></li>
                                <li>Makes Smooth Transitions
                                    <input type="checkbox" name="K3" value="3"></li>
                                <li>Enforces Procedures/Rules
                                    <input type="checkbox" name="K4" value="4"></li>
                                <li>Responds to Inappropriate Student Behavior
                                    <input type="checkbox" name="K5" value="5"></li>
                                <li>Has Resources Available and Ready to be Used
                                    <input type="checkbox" name="K6" value="6"></li>
                            </ul> 
                        </div>
                        Comments:<br>
                        <textarea name="kcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>21st Century Skills (Student Behaviors)</h4>
                        <div>
                            <ul>
                                <li>Productively Communicating
                                    <input type="checkbox" name="L1" value="1"></li>
                                <li>Collaborating with Peers
                                    <input type="checkbox" name="L2" value="2"></li>
                                <li>Creating
                                    <input type="checkbox" name="L3" value="3"></li>
                                <li>Thinking Critically
                                    <input type="checkbox" name="L4" value="4"></li>
                                <li>Using Information Literacy or Demonstrating Media Fluency
                                    <input type="checkbox" name="L5" value="5"></li>
                                <li>Not Evident
                                    <input type="checkbox" name="L6" value="6"></li>
                            </ul>
                        </div>
                        Comments:<br>
                        <textarea name="lcomments" rows="5" cols="100"></textarea>
                    </td>
                </tr>
            </table>
            <p align="center"><input type="submit" value="Submit"></p>
        </form>
        <a href="homepage.php">Return to Home Page</a>
    </body>
</html>