<?php
require_once("includes/initialize.php");
$assessmentID = $_GET['misID'];


$query ="SELECT  `tbl_subject`.`subject_id` ,  `tbl_subject`.`units_lec` ,  `tbl_subject`.`units_lab` 
		FROM tbl_assessment, tbl_enrollment_records, tbl_enrolled_subject, tbl_offerred_subject, tbl_subject
		WHERE  `tbl_assessment`.`assessment_id` = '$assessmentID'
		AND  `tbl_assessment`.`student_id` =  `tbl_enrollment_records`.`student_id` 
		AND  `tbl_assessment`.`assessment_id` =  `tbl_enrollment_records`.`assessment_id` 
		AND  `tbl_assessment`.`semester` =  `tbl_enrollment_records`.`term` 
		AND  `tbl_assessment`.`AY` =  `tbl_enrollment_records`.`AY` 
		AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
		AND  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
		AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id`  ";
$res = mysql_query($query) or die ("Could not execute query for getting enrolled subjects of the student. Please Contact Your Aministrator");
while($row = mysql_fetch_row($res)){
$subject_id = $row[0];
$units_lec = $row[1];
$units_lab = $row[2];


	$jojo = "SELECT * FROM `tbl_student_assessment_tuition` WHERE `subject_id` = $subject_id and `assessment_id` = $assessmentID and `tuition_fee_id` =3";
	$queries = mysql_query($jojo) or die ("Could not execute query for getting the enrolled subject information");
	$row_count = mysql_num_rows($queries);



$querya ="SELECT * FROM `tbl_tuition_fee` WHERE `tuition_fee_code` = 'Lec_Fee' ";
		$resa = mysql_query($querya) or die ("Could not execute query in getting the list tuition fee. Please Contact Your Aministrator");
		$rowa = mysql_fetch_row($resa);
		$tuition_id = $rowa[0];
		$amount = $rowa[3];
		$tuition = $amount * $units_lec;

	if($row_count ==0){

		if($units_lec > 0){

			


			$querya2w ="INSERT INTO `tbl_student_assessment_tuition`(`tuition_fee_id`, `subject_id`, `assessment_id`, `amount`, `status`) 
						VALUES ('$tuition_id','$subject_id','$assessmentID','$tuition','Unpaid')";
			$resa2w = mysql_query($querya2w) or die ("Could not execute query for inserting the new lecture units.");

			$querwew = "SELECT  `mandatory_fee` ,  `balance`, `total_payment`  
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$assessmentID'";
	
				$restwew = mysql_query($querwew) or die ("Could not execute query for updating tuition fees.");                    
				$rowwew = mysql_fetch_row($restwew);
				$tui_fee = $rowwew[0];
				$bal = $rowwew[1];
				$total_payments2 = $rowwew[2];

				$new_bal = $bal + $tuition;
				$new_tui = $tui_fee + $tuition;
				$total_payments = $total_payments2 + $new_tui;



					$ass = New Assessment();
					$ass->balance				=	$new_bal;
					$ass->tuition_fee			=	$new_tui;
					$ass->total_payment			=	$total_payments;
					$ass->assessor_id			=	$_SESSION['assesor_id'];
					$ass->update($assessmentID); 

			

		}
	

	}

}

redirect('assign_tuition2.php?misID='.$assessmentID);

?>