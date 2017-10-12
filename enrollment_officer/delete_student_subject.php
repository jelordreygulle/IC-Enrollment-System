<?php
require_once("includes/initialize.php");

$off_id =  $_GET['id'];
$student_id =  $_GET['studentId'];
$course =  $_GET['course'];





		$subj = new enrolled_subject();
		$subj->delete($off_id);

		$grado = new grades();
		$grado->delete($off_id);


	
	message("Enrolled subject is successfully Deleted!","info");


	redirect('evaluation2.php?studentId='.$student_id.'&course='.$course);


	
?>