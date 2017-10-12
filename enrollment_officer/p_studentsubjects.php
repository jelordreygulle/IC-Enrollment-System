<?php
require_once("includes/initialize.php");
include 'header-entry.php';



$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
			FROM  `tbl_ay` 
			WHERE  `ay_status` =  'ACTIVE'
			LIMIT 0 , 30";
			$resa = mysql_query($querya) or die ("Could not execute query2.");
			$my_resa = mysql_num_rows($resa);
			$row2a = mysql_fetch_row($resa);
			$SY = $row2a[1];
			$tt = $row2a[2];






?>
 
<?php

$studentId = $_GET['id'];
$course = $_GET['course'];

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

	$sqv = "SELECT * FROM `tbl_ay` WHERE `ay` = '$SY' and `term` = '$tt'";
	$resuv = mysql_query($sqv) or die ("Could not execute query for getting the academic year information.");	
	$mine_rowv = mysql_fetch_row($resuv);
	$load_ay = $mine_rowv[2];

	if($load_ay == 'Deactivated'){
	
		$jopacs = array('$subjectId[$i]');
		
		?>    
			<script type="text/javascript">
	                alert("The academic year and term is already expire and deactivated. You cannot add or update students subject anymore. For clarification and concern, please contact your administrator!");
	         </script>
         <?php
		redirect('studentSubjects.php?term='.$tt.'&year='.$SY.'&stu_id='.$studentId.'&course='.$course);

	}

	else{



			 


		 		$enrolled = New enrolled_subject();
				$enrolled->offered_subject_id			=	$subjectId[$i];
				$enrolled->erollment_records_id			=	$err_id;
				$enrolled->offered_term					=	$tt;
				$enrolled->Offered_AY					=	$SY;
				
				$enrolled->create();
				$offer = $subjectId[$i];


				$we = "SELECT `enrolled_id` FROM `tbl_enrolled_subject` WHERE `offered_subject_id` = '$offer'
						and `erollment_records_id` = '$err_id'
						and `offered_term` = '$tt'
						and `Offered_AY` = '$SY'
						";
				$wee = mysql_query($we) or die ("Could not execute query for getting the academic year information.");	
				$mine_we = mysql_fetch_row($wee);
				$enrolled_id = $mine_we[0];

				$grado = New grades();
				$grado->enrolled_id 				=	$enrolled_id;
				$grado->final_grade						= 'No Grade';
				$grado->AY 								=	$SY;
				$grado->semester 						=	$tt;
				$grado->remarks 						= 'No Grade';
				$grado->create();


				message("Student's subject(s) is successfully Added!","info");
				redirect('studentsubjects.php?term='.$tt.'&year='.$SY.'&stu_id='.$studentId.'&course='.$course);

			 

			
								
			
		}


		

  

	

 
}
}else{
	message("Select first the subject(s) you want to Add!","error");
	redirect('studentsubjects.php?term='.$tt.'&year='.$SY.'&stu_id='.$studentId.'&course='.$course);
}

?>
