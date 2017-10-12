

<?php
require_once("includes/initialize.php");



$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
			FROM  `tbl_ay` 
			WHERE  `ay_status` =  'ACTIVE'
			LIMIT 0 , 30";
			$resa = mysql_query($querya) or die ("Could not execute query2.");
			$my_resa = mysql_num_rows($resa);
			$row2a = mysql_fetch_row($resa);
			$SY = $row2a[1];
			$tt = $row2a[2];


$studentId = $_GET['id'];
$year_new = $_GET['year'];
$term_new = $_GET['term'];
$enrollmentId = $_GET['err_id'];
$subjectId = $_GET['selector'];
$studentId = $_GET['id'];


	$sqv = "SELECT * FROM `tbl_ay` WHERE `ay` = '$year_new$year_new' and `term` = '$term_new'";
	$resuv = mysql_query($sqv) or die ("Could not execute query for getting the academic year information.");	
	$mine_rowv = mysql_fetch_row($resuv);
	$load_ay = $mine_rowv[2];

$subjId = count($subjectId);
$subjectId[0];
if (!$subjectId==''){

for ($i=0;$i<$subjId; $i++){


	$subjectId[$i];

	if($load_ay == 'Deactivated'){
	
		
		?>    
			<script type="text/javascript">
	                alert("The academic year and term is already expire and deactivated. You cannot add or update students subject anymore. For clarification and concern, please contact your administrator!");
	         </script>
         <?php
		redirect('studentSubjects.php?term='.$tt.'&year='.$SY.'&id='.$studentId);

	}

	else{
  
 		$s = "SELECT `enrolled_id` FROM `tbl_enrolled_subject` WHERE `offered_subject_id` = '$subjectId[$i]'
			and `erollment_records_id` = '$enrollmentId'
			and `offered_term` = '$tt'
			and `Offered_AY` = '$SY'
			";
		$re = mysql_query($s) or die ("Could not execute query for getting the enrolled subject information.");	
		$mine = mysql_fetch_row($re);
		$enrolled_id = $mine[0];

		
		
	
		$grado = New grades();
		$grado->enrolled_id 					=	$enrolled_id;
		$grado->final_grade						= 'No Grade';
		$grado->AY 								=	$SY;
		$grado->semester 						=	$tt;
		$grado->remarks 						= 'No Grade';
		$grado->create();
		
		message("Student's subjects already Added!","info");
		redirect('assignStudentSubjects.php?term='.$tt.'&year='.$SY.'&stu_id='.$studentId);

	}

 
}
}

?>

