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
        <link type="text/css" rel="stylesheet" href="mystyle.css">
        <title>
            The Handy Dandy Notebook
        </title>
    <h2>Handy Dandy Notebook</h2>
    </head>
    <body>
        <form name="Handy Dandy Notebook" action="action.php" method="POST">
            <table align="center">
                <th colspan="2">Teacher Evaluation</th>
                <tr>
                    <td class="head">Evaluated By:</td>
                    <td class="head">School:</td>
                </tr>
                <tr>
                    <td><input class="headdata" type="text" name="name" required></td>
                    <td><input class="headdata" type="text" name="school" required></td>
                </tr>
                <tr>
                    <td class="head">Category:</td>
                    <td class="head">Teacher:</td>
                </tr>
                <tr>
                    <td><input class="headdata" type="text" name="category" required></td>
                    <td><input class="headdata" type="text" name="teacher" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="head">Date and Time:</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="headdata" type="text" name="date" required></td>
                </tr>
                <tr>
                    <td class="head">Grade Level:</td>
                    <td class="head">Subject:</td>
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
                                <input type="checkbox" name="b1" value="1">
                                </li>
                            <li>Daily objectives/Essential questions evident
                                <input type="checkbox" name="b2" value="1">
                                </li>
                            <li>Homework/Assignments posted
                                <input type="checkbox" name="b3" value="1">
                                </li>
                            <li>Positive teacher/Student interaction evident
                                <input type="checkbox" name="b4" value="1">
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
                                    <input type="checkbox" name="c1" value="1"></li>
                                <li>Circulating/Monitoring
                                    <input type="checkbox" name="c2" value="1"></li>
                                <li>Facilitating Learning
                                    <input type="checkbox" name="c3" value="1"></li>
                                <li>Working with Students
                                    <input type="checkbox" name="c4" value="1"</li>
                                <li>Reading to Students
                                    <input type="checkbox" name="c5" value="1"></li>
                                <li>Assessing
                                    <input type="checkbox" name="c6" value="1"></li>
                                <li>Not Interacting with Students
                                    <input type="checkbox" name="c7" value="1"></li>
                                <li>Sitting at Desk
                                    <input type="checkbox" name="c8" value="1"></li>
                                <li>Not Present
                                    <input type="checkbox" name="c9" value="1"></li>
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
                                    <input type="checkbox" name="e1" value="1"></li>
                                <li>Discussion
                                    <input type="checkbox" name="e2" value="1"></li>
                                <li>Guided Practice
                                    <input type="checkbox" name="e3" value="1"></li>
                                <li>Hands on/Inquiry
                                    <input type="checkbox" name="e4" value="1"></li>
                                <li>Listening
                                    <input type="checkbox" name="e5" value="1"></li>
                                <li>Note Taking
                                    <input type="checkbox" nmae="e6" value="1"></li>
                                <li>Reading
                                    <input type="checkbox" name="e7" value="1"></li>
                                <li>Seatwork/Worksheet
                                    <input type="checkbox" name="e8" value="1"></li>
                                <li>Student Presentation
                                    <input type="checkbox" name="e9" value="1"></li>
                                <li>Viewing Teacher Presentation
                                    <input type="checkbox" name="e10" value="1"></li>
                                <li>Viewing Video/Movie/Multimedia Presentation
                                    <input type="checkbox" name="e11" value="1"></li>
                                <li>Writing
                                    <input type="checkbox" name="e12" value="1"></li>
                                <li>Other
                                    <input type="checkbox" name="e13" value="1"</li>
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
                                    <input type="checkbox" name="f1" value="1"></li>
                                <li>Brainstorming
                                    <input type="checkbox" name="f2" value="1"></li>
                                <li>Comparing/Contrasting, Classifying, Analogies, Metaphors
                                    <input type="checkbox" name="f3" value="1"></li>
                                <li>Generating/Testing Hypotheses
                                    <input type="checkbox" name="f4" value="1"></li>
                                <li>Guided Practice/Homework Review
                                    <input type="checkbox" name="f5" value="1"></li>
                                <li>Lecture
                                    <input type="checkbox" name="f6" value="1"></li>
                                <li>Non-linguistic representations/graphic organizers
                                    <input type="checkbox" name="f7" value="1"></li>
                                <li>Reinforcing Effort/Giving Praise
                                    <input type="checkbox" name="f8" value="1"></li>
                                <li>Setting Objectives/Providing Feedback
                                    <input type="checkbox" name="f9" value="1"></li>
                                <li>Summarizing, Note Taking
                                    <input type="checkbox" name="f10" value="1"></li>
                                <li>Using Purposeful Questioning Techniques
                                    <input type="checkbox" name="f11" value="1"></li>
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
                                    <input type="checkbox" name="g1" value="1"></li>
                                <li>Teacher is Presenting Using Technology
                                    <input type="checkbox" name="g2" value="1"></li>
                                <li>Teacher is Using Technology to Support Learning
                                    <input type="checkbox" name="g3" value="1"></li>
                                <li>Students are Presenting Using Technology
                                    <input type="checkbox" name="g4" value="1"></li>
                                <li>Students are Using Technology to Learn
                                    <input type="checkbox" name="g5" value="1"></li>
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
                                    <input type="checkbox" name="i1" value="1"></li>
                                <li>Basic Application (Applying)
                                    <input type="checkbox" name="i2" value="1"></li>
                                <li>Strategic Thinking (Analyzing and Evaluating
                                    <input type="checkbox" name="i3" value="1"></li>
                                <li>Extended Thinking (Creating)
                                    <input type="checkbox" name="i4" value="1"></li>
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
                                    <input type="checkbox" name="j1" value="1"></li>
                                <li>Reading Comprehension
                                    <input type="checkbox" name="j2" value="1"></li>
                                <li>Academic Dialogue
                                    <input type="checkbox" name="j3" value="1"></li>
                                <li>Writing to Learn
                                    <input type="checkbox" name="j4" value="1"></li>
                                <li>Writing to Demonstrate Learning
                                    <input type="checkbox" name="j5" value="1"></li>
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
                                    <input type="checkbox" name="k1" value="1"></li>
                                <li>Uses Time Appropriately
                                    <input type="checkbox" name="k2" value="1"></li>
                                <li>Makes Smooth Transitions
                                    <input type="checkbox" name="k3" value="1"></li>
                                <li>Enforces Procedures/Rules
                                    <input type="checkbox" name="k4" value="1"></li>
                                <li>Responds to Inappropriate Student Behavior
                                    <input type="checkbox" name="k5" value="1"></li>
                                <li>Has Resources Available and Ready to be Used
                                    <input type="checkbox" name="k6" value="1"></li>
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
                                    <input type="checkbox" name="l1" value="1"></li>
                                <li>Collaborating with Peers
                                    <input type="checkbox" name="l2" value="1"></li>
                                <li>Creating
                                    <input type="checkbox" name="l3" value="1"></li>
                                <li>Thinking Critically
                                    <input type="checkbox" name="l4" value="1"></li>
                                <li>Using Information Literacy or Demonstrating Media Fluency
                                    <input type="checkbox" name="l5" value="1"></li>
                                <li>Not Evident
                                    <input type="checkbox" name="l6" value="1"></li>
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