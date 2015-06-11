<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="stylesheet.css">
        <title>
            The Handy Dandy Notebook
        </title>
    <h2>Handy Dandy Notebook.</h2>
    </head>
    <body>
        <form action="">
            <table align="center">
                <th colspan="2">Teacher Evaluation</th>
                <tr>
                    <td>Walk-Through Name</td>
                    <td>Template</td>
                </tr>
                <tr>
                    <td><form><input type="text" name="Walk-Through Name" required></form></td>
                    <td><form><input type="text" name="Template" required></form></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>Subject</td>
                </tr>
                <tr>
                    <td><form><input type="text" name="Category" required></form></td>
                    <td><form><input type="text" name="Subject" required></form></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Date and Time</td>
                </tr>
                <tr>
                    <td></td>
                    <td><form><input type="text" name="Date" required></form></td>
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
                                <li>
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
            </table>
        </form>
    </body>
</html>