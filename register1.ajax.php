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
require_once("debugLog.inc");

$usernamereg = mysql_real_escape_string($_GET['input']);

$sql  = "SELECT * FROM users";
$sql .= " WHERE Username = '$usernamereg'";
$results = mysql_query($sql);

if($results) {
    if(mysql_num_rows($results)) {
        echo "false";
    }
    else {
        echo "true";
    }
}




?>