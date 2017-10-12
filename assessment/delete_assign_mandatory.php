<?php

	require_once("includes/initialize.php");
	//include 'header.php';

	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		


		$querwe = "SELECT `assessment_id`, `amount` FROM `tbl_student_assessment_mandatory_fee` WHERE `samf_id` = $id[$i]";
		$restwe = mysql_query($querwe) or die ("Could not execute query for miscelleneous fees.");                    
		$rowwe = mysql_fetch_row($restwe);
		$ass_id = $rowwe[0];
		$amount = $rowwe[1];

		


	$querwe = "SELECT  `mandatory_fee` ,  `balance`, `total_payment` 
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$ass_id'";
	
	$restwe = mysql_query($querwe) or die ("Could not execute query for miscelleneous fees.");                    
	$rowwe = mysql_fetch_row($restwe);
	$man_fee = $rowwe[0];
	$bal = $rowwe[1];
	$total_payments2 = $rowwe[2];

	
	$new_bal = $bal - $amount;
	$new_man = $man_fee - $amount;
	$total_payments = $total_payments2 - $amount;



		$ass = New Assessment();
		$ass->balance				=	$new_bal;
		$ass->mandatory_fee			=	$new_man;
		$ass->total_payment			=	$total_payments;
		$ass->update($ass_id); 

	
	$man = new assign_mandatory();
	$man->delete($id[$i]);
	
	}
	message("mandatory fee particular(s) is successfully deleted!","info");
	redirect('assess_student.php?assessmentId='.$ass_id);
	
?>
