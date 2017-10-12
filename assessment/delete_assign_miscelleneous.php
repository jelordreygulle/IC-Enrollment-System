<?php

	require_once("includes/initialize.php");


	  @$id=$_POST['selector'];
	  $key = count($id);
	
	for($i=0;$i<$key;$i++){
 
		


		$querwe = "SELECT `assessment_id`, `amount` FROM `tbl_student_assessment_micelleneous` WHERE `sam_id` = $id[$i]";
		$restwe = mysql_query($querwe) or die ("Could not execute query for miscelleneous fees.");                    
		$rowwe = mysql_fetch_row($restwe);
		$ass_id = $rowwe[0];
		$amount = $rowwe[1];


		


	$querwe = "SELECT  `miscelleneous_fee` ,  `balance`, `total_payment` 
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$ass_id'";
	
	$restwe = mysql_query($querwe) or die ("Could not execute query for assessment details please contact your administrator.");                    
	$rowwe = mysql_fetch_row($restwe);
	$mis_fee = $rowwe[0];
	$bal = $rowwe[1];
	$total_payments2 = $rowwe[2];

	
	$new_bal = $bal - $amount;
	$new_mis = $mis_fee - $amount;
	$total_payments = $total_payments2 - $amount;




		$ass = New Assessment();
		$ass->balance				=	$new_bal;
		$ass->miscelleneous_fee		=	$new_mis;
		$ass->total_payment		=	$total_payments;
		$ass->update($ass_id); 


		$mis = new assign_miscelleneous();
		$mis->delete($id[$i]);
	}
	message("miscelleneous fee particular(s) is successfully deleted!","info");
	redirect('assess_student.php?assessmentId='.$ass_id);
	
?>
