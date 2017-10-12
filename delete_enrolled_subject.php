<?php
require_once("includes/initialize.php");
@$term =  $_GET['term'];
@$year =  $_GET['year'];
@$student_id =  $_GET['stu_id'];
@$course =  $_GET['course'];




	  $id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
		$id_ko = $id[$i];


		$subj = new enrolled_subject();
		$subj->delete($id[$i]);

		$grado = new grades();
		$grado->delete2($id[$i]);


	}
	message("Course(s) Enrolled subject is successfully Deleted!","info");


	redirect('studentsubjects.php?term='.$term.'&year='.$year.'&stu_id='.$student_id.'&course='.$course);

	
?>