<?php
require_once("includes/initialize.php");
include 'header-entry.php';

$ayy = $_SESSION['accademic'];
$querya ="SELECT  `ay_id` ,  `ay` 
	FROM  `tbl_ay` 
	WHERE  `ay_id` =  '$ayy'
	LIMIT 0 , 30";
$resa = mysql_query($querya) or die ("Could not execute query2.");
$row2a = mysql_fetch_row($resa);
$ayida = $row2a[0];
$SY = $row2a[1];

							                                    
$tt = $_SESSION['term'];
?>
 
<?php

$studentId = $_GET['id'];

$subjectId = $_POST['selector'];
$subjId = count($subjectId);
$subjectId[0];
if (!$subjectId==''){

for ($i=0;$i<$subjId; $i++){





	$quer = "SELECT *
			FROM `tbl_enrollment_records`
			WHERE `student_id` ='$studentId'
			AND `AY` = '$SY'
			AND `term` = '$tt'";
	
	$rest = mysql_query($quer) or die ("Could not execute query for enrollment records.");                    
	$row = mysql_fetch_row($rest);
	$err_id = $row[0];
	$offered_id = $subjectId[$i];
  
 		$enrolled = New enrolled_subject();
		$enrolled->offered_subject_id			=	$subjectId[$i];
		$enrolled->erollment_records_id			=	$err_id;
		$enrolled->offered_term					=	$tt;
		$enrolled->offered_AY					=	$ayy;
		
		$enrolled->create();

		//echo $subjId[$i];

	
		//$q = "INSERT INTO `tbl_enrolled_subject`(`offered_subject_id`, `erollment_records_id`, `offered_term`, `Offered_AY`) 
			//  VALUES ('$offered_id','$err_id','$tt','$SY')";
		//$qf = mysql_query($q) or die ("Could not execute query for Adding enrollment records.");
	
message("Student's subjects already Added!","info");
	//redirect('studentSubjects.php?term='.$tt.'&year='.$ayy.'&stu_id='.$studentId);
 
}
}else{
	message("Select first the subject(s) you want to Add!","error");
	redirect('assignStudentSubjects.php?term='.$tt.'&year='.$ayy.'&stu_id='.$studentId);
}

?>
