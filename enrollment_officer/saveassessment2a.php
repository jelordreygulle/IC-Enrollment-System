<?php
require_once("includes/initialize.php");

$id = $_GET['studentId'];
$term = $_GET['term'];
$AY = $_GET['ay'];
$status = $_GET['status'];
$course = $_GET['course'];



$querya ="SELECT * FROM `tbl_assessment` 
			WHERE `AY` = '$AY'
			and `semester` = '$term'
			and `student_id` = '$id'
			and `status` = '$status'
			
			";
$resa = mysql_query($querya) or die ("Could not execute query2 in getting assessment information");
$row2a = mysql_fetch_row($resa);
$ass_id = $row2a[0];
 

redirect('saveassessment3a.php?studentId='.$id.'&term='.$term.'&ay='.$AY.'&status='.$status.'&assID='.$ass_id.'&course='.$course);



?>