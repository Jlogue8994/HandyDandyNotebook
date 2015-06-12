<!DOCTYPE html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action === "save") {
  $targetFolder = "/path/to/folder";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?>