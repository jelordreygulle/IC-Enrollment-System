<?php
require_once("includes/initialize.php");
$id   = $_GET['studentId'];
$term = $_GET['term'];
$AY   = $_GET['ay'];
$status = $_GET['status'];
$course_id = $_GET['course'];



$query ="SELECT * 
			FROM  `tbl_enrollment_records` 
			WHERE  `student_id` = $id
			AND  `term` =  '$term'
			AND  `AY` =  '$AY'
			AND  `status` =  '$status' ";
$res = mysql_query($query) or die ("Could not execute query for getting enrollment records information.");
$row = mysql_fetch_row($res);
$er_id = $row[0];


$querya2 ="INSERT INTO `tbl_assessment`( `assessor_id`, `scholarship`, `tuition_fee`, `miscelleneous_fee`, `total_payment`, `paid_amount`, `balance`, `AY`, `semester`, `student_id`, `status`, `mandatory_fee`) 
			VALUES (null,'none','0','0','0','0','0','$AY','$term','$id','$status','0')";
$resa2 = mysql_query($querya2) or die ("Could not execute query3.");



redirect('saveassessment2.php?studentId='.$id.'&term='.$term.'&ay='.$AY.'&status='.$status.'&course='.$course_id);





?>