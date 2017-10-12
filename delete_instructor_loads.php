<?php

	require_once("includes/initialize.php");
	//include 'header.php';

	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 

		$off = $id[$i];

		$del = "DELETE FROM `tbl_instructor_load` WHERE `offered_subject_id` = '$off'";
		$del_2 = mysql_query($del);

	}
	message("Instructor Load is succesfully Deleted!","info");
	redirect('instructor_subjects.php?instructorId='.$_GET['instructorId'].'&term='.$_GET['term'].'&ay='.$_GET['ay']);
	
?>
