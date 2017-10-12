
<?php
require_once("includes/initialize.php");
$assessmentID = $_GET['assessmentId'];



$mine = "SELECT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ', ',  `tbl_student`.`fname` ,  ' ',  `tbl_student`.`mname` ) AS  'Name',  `tbl_assessment`.`AY` ,  `tbl_assessment`.`semester` , CONCAT(  `tbl_course`.`course_code` ,  ', ',  `tbl_course`.`AY` ) AS  'Course'
								FROM tbl_assessment, tbl_student, tbl_course
								WHERE  `tbl_assessment`.`assessment_id` = $assessmentID
								AND  `tbl_assessment`.`student_id` =  `tbl_student`.`student_id` 
								AND  `tbl_course`.`course_id` =  `tbl_student`.`course_id` ";
						
						$mineq 		= mysql_query($mine) or die ("Could not execute query for miscelleneous fees.");                    
						$row_mine	= mysql_fetch_row($mineq);
						$student_id = $row_mine[0];
						$names 		= $row_mine[1];
						$acad_year 	= $row_mine[2];
						$term 		= $row_mine[3];
						$course 	= $row_mine[4];


$queryas13 ="SELECT  SUM(`tbl_student_assessment_tuition`.`amount`) as TF
								FROM tbl_student_assessment_tuition, tbl_tuition_fee, tbl_subject
										WHERE  `tbl_student_assessment_tuition`.`assessment_id` = '$assessmentID'
										AND  `tbl_student_assessment_tuition`.`tuition_fee_id` = `tbl_tuition_fee`.`tuition_fee_id`
										AND `tbl_student_assessment_tuition`.`subject_id` = `tbl_subject`.`subject_id`";
					$resas13 = mysql_query($queryas13) or die ("Could not execute query2.");
					$row2as13 = mysql_fetch_row($resas13);
					$TF2 = $row2as13[0];
					$TF = number_format($TF2, 2);


$queryas1 ="SELECT  SUM(`tbl_student_assessment_micelleneous`.`amount`) as MS
									FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
											WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$assessmentID'
											AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id`";
						$resas1 = mysql_query($queryas1) or die ("Could not execute query2.");
						$row2as1 = mysql_fetch_row($resas1);
						$MS2 = $row2as1[0];
						$MS = number_format($MS2, 2);



$queryas17 ="SELECT  SUM(`tbl_student_assessment_mandatory_fee`.`amount`) as MO
									FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
									WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` ='$assessmentID'
									AND  `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` =  `tbl_mandatory_fee`.`mandatory_fee_id`";
						$resas17 = mysql_query($queryas17) or die ("Could not execute query2.");
						$row2as17 = mysql_fetch_row($resas17);
						$MO2 = $row2as17[0];
						$MO = number_format($MO2, 2);


$amount_due2 = ($TF2 + $MS2 + $MO2);
$amount_due = number_format($amount_due2, 2);

$buth = "SELECT `balance`, `paid_amount` FROM `tbl_assessment` WHERE `assessment_id` = '$assessmentID'";
			$buths = mysql_query($buth) or die ("Could not execute query2.");
			$rowbuth = mysql_fetch_row($buths);

			$bal = $rowbuth[0];
			$paid_amount = $rowbuth[1];


$existing_balance2 = $amount_due2 - $bal;
$existing_balance = number_format($existing_balance2, 2);



if (isset($_POST['savepayment'])){

	if ($_POST['payment'] == "" OR $_POST['payment_date'] == "" Or $_POST['or_number'] == ""  ) {
		
		?>
			<script type="text/javascript">
				window.alert("All field is required.Please Check!");
			</script>
		<?php
		redirect('./update_payment.php?assessmentId='.$assessmentID);
	}else{
			$payments   			= $_POST['payment'];
			$receipts   			= $_POST['or_number'];
			$payment_dates   		= $_POST['payment_date'];

			
			$grand_paid_amount = $paid_amount + $payments;


			if($bal==0){

			?>
				<script type="text/javascript">
					window.alert("Errorr! The students has Zero(0) balance! Please Check");
				</script>
			<?php
			redirect('./update_payment.php?assessmentId='.$assessmentID);

			}

			else{

			$new_balance_after = $bal - $payments;

				$pay = new Payment();
				$pay->assessment_id		= $assessmentID;
				$pay->OR_number			= $receipts;
				$pay->amount		 	= $payments;
				$pay->balance		 	= $new_balance_after;
				$pay->date		 		= $payment_dates;
				 



				 if($new_balance_after <= 0){

				 	$ass = New Assessment();
					$ass->balance				=	$new_balance_after;
					$ass->status				=	'Paid';
					$ass->paid_amount				=	$grand_paid_amount;
					$ass->update($assessmentID);
				 }

				 else if($new_balance_after > 0){

				 	$ass = New Assessment();
					$ass->balance				=	$new_balance_after;
					$ass->status				=	'Unpaid';
					$ass->update($assessmentID);

				 }
				 

				
				  $istrue = $pay->create();
				 if ($istrue == 1){
				 	
		
					?>  
						<script type="text/javascript">
							alert("Payment is added!");
							
						</script>
					<?php
					
					
					redirect('./update_payment.php?assessmentId='.$assessmentID);


				
				 }




				}





			}



			
	}		 
	 




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>ICES</title>
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
<style type="text/css">
.btn-success{color:#fff;background-color:#0E675F;border-color:#4cae4c}.btn-success:hover,.btn-success:focus,.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{color:#fff;background-color:#47a447;border-color:#398439}.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled] .btn-success.active{background-color:#5cb85c;border-color:#4cae4c}

</style>

	<!-- Custom styles for this template -->
	
	<!--<script type='text/javascript' src='js/example.js'></script>-->


</head>

<body>

	<div id="page-wrap">

		<textarea readonly id="header">STUDENT PAYMENT UPDATE</textarea>
		
		
		<div style="clear:both"></div>
		
		<div id="customer">

           <div id="identity">
		
            
<?php echo $student_id; ?><br>
<?php echo $names;?><br>
<?php echo $course;?><br>
<?php echo $term;?><br>
AY: <?php echo $acad_year;?>


	

		
		</div>



		<table id="items">
		
		  <tr>
		      <th width = "25%">Tuition Type</th>
		      <th width = "20%">Subject</th>
		      <th width = "20%">Units(lec)</th>
		      <th width = "20%">Units(lab)</th>
		      
		      <th width = "15%">Amount</th>
		      
		  </tr>


		<?php

				  $mydb->setQuery("SELECT `tbl_student_assessment_tuition`.`amount`, `tbl_tuition_fee`.`tuition_fee_description`, `tbl_subject`.`subject_code`, `tbl_subject`.`units_lec`, `tbl_subject`.`units_lab`, `tbl_tuition_fee`.`tuition_fee_amount`
											FROM tbl_student_assessment_tuition, tbl_tuition_fee, tbl_subject
										WHERE  `tbl_student_assessment_tuition`.`assessment_id` = '$assessmentID'
										AND  `tbl_student_assessment_tuition`.`tuition_fee_id` = `tbl_tuition_fee`.`tuition_fee_id`
										AND `tbl_student_assessment_tuition`.`subject_id` = `tbl_subject`.`subject_id`
				  	  					
				  	  					");
				  	  	loadresult1();			

				  	function loadresult1(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $tuition) {
							$space = '&nbsp;';
							echo '<tr class="item-row">';

					  		echo '<td class="item-name">'. $space. $tuition->tuition_fee_description.'</span></a></td>';
					  								  		
					  		echo '<td class="description">'. $space. $tuition->subject_code.'</span></td>';
					  		echo '<td>'. $space. $tuition->units_lec.'</span></td>';
					  		echo '<td>'.$space.  $tuition->units_lab.'</span></td>';
					  		
					  		echo '<td>'.'₱ '. $space. $tuition->amount.'</span></td>';
					  		echo '</tr>';




					  		}

				  		} 

				  	?>
		  
		

		<tr id="hiderow">
		    <td colspan="4"><strong><center>Subtotal</center></strong></td>
		    <td><strong>₱ <?php echo $TF; ?></strong></td>

		  </tr>

		</table>

		<table id="items">
					
				  
				  	<tr>
				  		<th  width = "40%">Miscelleneous Fee Code</th>
				  		<th width = "45%">Miscelleneous Fee Description</th>	
				  		
				  		<th  width = "15%">Amount</th>
				  	
	
				  	</tr>	
				  

				  <?php

				  $mydb->setQuery("SELECT  `tbl_miscelleneous_fee` . * ,  `tbl_student_assessment_micelleneous` . * 
										FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
										WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$assessmentID'
										AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id`
				  	  					
				  	  					");
				  	  	loadresult23();			

				  	function loadresult23(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $miscelleneous) {
						

					  		echo '<tr class="item-row">';

					  		echo '<td>'. $miscelleneous->miscelleneous_fee_code.'</td>';
					  								  		
					  		echo '<td>'. $miscelleneous->miscelleneous_fee_description.'</td>';
					  		echo '<td>'. '₱ '.$miscelleneous->miscelleneous_fee_amount.'</td>';
					  		
					  		echo '</tr>';




					  		}

				  		} 

				  	?>
		<tr id="hiderow">
		    <td colspan="2"><strong><center>Subtotal</center></strong></td>
		    <td><strong>₱ <?php echo $MS; ?></strong></td>

		  </tr>
</table>

		<table id="items">
					
				  
				  	<tr>
				  		<th  width = "40%">Other Madatory Fee Code</th>
				  		<th width = "45%">Other Mandatory Fee Description</th>	
				  		
				  		<th  width = "15%">Amount</th>
				  	
	
				  	</tr>	
				  

				  <?php

				  $mydb->setQuery("SELECT  `tbl_mandatory_fee`. * ,  `tbl_student_assessment_mandatory_fee`. * 
									FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
									WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` ='$assessmentID'
									AND  `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` =  `tbl_mandatory_fee`.`mandatory_fee_id` 
				  	  					
				  	  					");
				  	  	loadresult90();			

				  	function loadresult90(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $mandatory) {
						

					  		echo '<tr class="item-row">';

					  		echo '<td>'. $mandatory->mandatory_fee_code.'</td>';
					  								  		
					  		echo '<td>'. $mandatory->mandatory_fee_description.'</td>';
					  		echo '<td>'. '₱ '.$mandatory->mandatory_fee_amount.'</td>';
					  		
					  		echo '</tr>';




					  		}

				  		} 

				  	?>
		<tr id="hiderow">
		    <td colspan="2"><strong><center>Subtotal</center></strong></td>
		    <td><strong>₱ <?php echo $MO; ?></strong></td>

		  </tr>

	</table>	  
	<table id="items">
		  <tr>

		      <td width="50%" class="blank"> </td>
		      <td width="10%"  class="total-line">Grand Total</td>
		      <td width="40%" class="total-value"><strong>₱ <?php echo $amount_due; ?></strong></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td class="total-line">Amount Paid</td>

		      <td class="total-value"><strong>₱ <?php echo $existing_balance; ?></strong></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div><strong>₱ <?php echo number_format($bal, 2); ?></strong></div></td>
		  </tr>

		  <tr>
		      <td colspan="1" class="blank"> </td>
		      <td class="total-line">Payment</td>

		      <td class="total-value">
		      	<form action="#.php" method="POST">
		      		<script type="text/Javascript">
						function checkDec(el){
						 var ex = /^[0-9]+\.?[0-9]*$/;
						 if(ex.test(el.value)==false){
						   el.value = el.value.substring(0,el.value.length - 1);
						  }
						}
					</script>
		      		
		      		<table  id="items">	

				      	<tr class="item-row">
		                    <td class="meta-head" align="right">OR #</td>
		                    <td><input  name="or_number"></input></td>
		                </tr>
		                <tr class="item-row">

		                    <td class="meta-head" align="right">Date OF Payment</td>
		                    <td><input  type="date" name="payment_date"></input></td>
		                </tr>

		                <tr class="item-row">
		                    <td class="meta-head"align="right" >Amount</td>
		                    <td><input id ="" onkeyup="checkDec(this);" type="text" name="payment"></input></td>
		                </tr>

            		</table><br>

            		<button type="submit" class="btn btn-success" name="savepayment"> Save Payment</button>
					
				    
		      		



		      	</form>


		      </td>
		  </tr>
		
		</table>
		
		<div id="terms">
			
		  		<h5>****NOTHING FOLLOWS****</h5>
		  	
		  
		</div>
	
	</div>
	
</body>

</html>