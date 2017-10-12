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


	$jojo = "SELECT * FROM `tbl_student_assessment_tuition` WHERE `subject_id` = $subject_id and `assessment_id` = $assessmentID and `tuition_fee_id` =1";
	$queries = mysql_query($jojo) or die ("Could not execute query for getting the enrolled subject information");
	$row_count = mysql_num_rows($queries);


if($row_count == 0){
	if($units_lab > 0){

		$queryaq ="SELECT * FROM `tbl_tuition_fee` WHERE `tuition_fee_code` = 'Lab_Fee' ";
		$resaq = mysql_query($queryaq) or die ("Could not execute query in getting the list tuition fee. Please Contact Your Aministrator");
		$rowaq = mysql_fetch_row($resaq);
		$tuition_idq = $rowaq[0];
		$amountq = $rowaq[3];

		$tuitionq = $amountq * $units_lab;


		$querya2 ="INSERT INTO `tbl_student_assessment_tuition`(`tuition_fee_id`, `subject_id`, `assessment_id`, `amount`, `status`) 
					VALUES ('$tuition_idq','$subject_id','$assessmentID','$tuitionq','Unpaid')";
		$resa2 = mysql_query($querya2) or die ("Could not execute query for inserting the new lab units.");



		$querwew = "SELECT  `mandatory_fee` ,  `balance`, `total_payment`  
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$assessmentID'";
	
				$restwew = mysql_query($querwew) or die ("Could not execute query for updating tuition fees.");                    
				$rowwew = mysql_fetch_row($restwew);
				$tui_fee = $rowwew[0];
				$bal = $rowwew[1];
				$total_payments2 = $rowwew[2];

				$new_bal = $bal + $tuitionq;
				$new_tui = $tui_fee + $tuitionq;
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


redirect('assess_student.php?assessmentId='.$assessmentID);







?>