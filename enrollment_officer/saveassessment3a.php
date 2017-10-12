<?php
require_once("includes/initialize.php");

$id = $_GET['studentId'];
$term = $_GET['term'];
$AY = $_GET['ay'];
$status = $_GET['status'];
$assessment = $_GET['assID'];
$course = $_GET['course'];




$querya2 =" UPDATE `tbl_enrollment_records` 
			SET `assessment_id`='$assessment'
			WHERE `student_id` = '$id'
			and `term` = '$term'
			and `AY` = '$AY'
			and `status` = '$status'

		";
$resa2 = mysql_query($querya2) or die ("Could not execute query for updating the enrollment record of the student");






message('The student is successfully enrolled!', "success");
redirect('evaluation2.php?studentId='.$id.'&course='.$course);



?>