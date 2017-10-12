<?php

	require_once("includes/initialize.php");
	//include 'header.php';
		$studentId=$_GET['studentId'];
		$courseId=$_GET['course'];
	  @$id=$_POST['selector'];
	  $key = count($id);


if (!$id==''){
//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){

		
 
		$studSubjects = NEW Grades();
		$studSubjects->delete($id[$i]);
	}
			message("Student subject(s) already Deleted!","info");
			redirect('studentsubjects.php?studentId='.$studentId.'&course='.$courseId);
}else{
	message("Select your subject(s) first, if you want to delete it!","error");
	redirect('studentsubjects.php?studentId='.$studentId.'&course='.$courseId);
}
	
?>