<?php
require_once("includes/initialize.php");
include 'header-transaction.php';

$assessment_id = $_GET['assessmentId'];

?>
<div class="container">
	<?php
		check_message();
	?>
		<div class="well">
			    <form action="delete_student.php" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Student Payment History</h3></caption>
				  <thead>
				  	<tr>
				  		<th>Assessment ID.</th>
				  		<th>Receipt Number</th>
				  		<th>Paid Amount</th>
				  		<th>Balance</th>
				  		<th>Date</th>
				  		
				  		<th></th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	
				  	  @$idno =  $_GET['studentId'];
				  	  
				  	  
				  	  	$mydb->setQuery("SELECT * FROM `tbl_payment` WHERE `assessment_id` = $assessment_id");
				  	  	loadresult();

				  	  
				  	  

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $payment) {
					  		echo '<tr>';

					  		echo '<td><a href="./edit_payment.php?id='.$payment->payment_id.'">' . $payment->assessment_id.'</a></td>';
					  		echo '<td>'. $payment->OR_number.'</td>';
					  		echo '<td>'. $payment->amount.'</td>';
					  		echo '<td>'. $payment->balance.'</td>';
					  		echo '<td>'. $payment->date.'</td>';
					  		
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody>
				 
				</table>
				<div class="btn-group">
			
				   
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



