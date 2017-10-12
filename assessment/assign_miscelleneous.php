<?php
require_once("includes/initialize.php");
$assessmentID = $_GET['misID'];
include 'header-miscelleneous.php';

?>
<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>

<?php



if (isset($_POST['save22'])){

	
$misId = $_POST['selector'];
$misId_count = count($misId);
$misId[0];
if (!$misId==''){

for ($i=0;$i<$misId_count; $i++){





	$quer = "SELECT * FROM `tbl_miscelleneous_fee` WHERE `miscelleneous_fee_id` = $misId[$i]";
	
	$rest = mysql_query($quer) or die ("Could not execute query for miscelleneous fees.");                    
	$row = mysql_fetch_row($rest);
	$amount = $row[3];
	
  
 		$mics = New assign_miscelleneous();
		$mics->miscelleneous_fee_id			=	$misId[$i];
		$mics->assessment_id				=	$assessmentID;
		$mics->amount						=	$amount;
		$mics->status					=	'Unpaid';
		$mics->create();


	$querwe = "SELECT  `miscelleneous_fee` ,  `balance`, `total_payment` 
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$assessmentID'";
	
	$restwe = mysql_query($querwe) or die ("Could not execute query for miscelleneous fees.");                    
	$rowwe = mysql_fetch_row($restwe);
	$mis_fee = $rowwe[0];
	$bal = $rowwe[1];
	$total_payments2 = $rowwe[2];

	$new_bal = $bal + $amount;
	$new_mis = $mis_fee + $amount;
	$total_payments = $total_payments2 + $amount;

	$q = "SELECT `balance` 
				FROM  `tbl_assessment` 
				WHERE  `assessment_id` ='$assessmentID'";
	
	$r = mysql_query($q) or die ("Could not execute query for miscelleneous fees.");                    
	$rw = mysql_fetch_row($r);
	$over_bal = $rw[0];

	if($over_bal > 0){

		$ass = New Assessment();
		$ass->balance				=	$new_bal;
		$ass->miscelleneous_fee		=	$new_mis;
		$ass->total_payment			=	$total_payments;
		$ass->assessor_id			=	$_SESSION['assesor_id'];
		$ass->status				=	'Unpaid';
		$ass->update($assessmentID); 

	}else{

		$ass = New Assessment();
		$ass->balance				=	$new_bal;
		$ass->miscelleneous_fee		=	$new_mis;
		$ass->total_payment			=	$total_payments;
		$ass->assessor_id			=	$_SESSION['assesor_id'];
		$ass->status				=	'Paid';
		$ass->update($assessmentID); 


	}

		




		
	
message("Student's Misscelleneous Fee already Added!","info");
redirect('assess_student.php?assessmentId='.$assessmentID);
	
 
}
}else{
	message("Select first the miscelleneous fee you want to Add!","error");
	redirect('assign_miscelleneous.php?misID='.$assessmentID);
}







	}

?>		
<div class="container">
	<?php
		check_message();
	?>
		<div class="well">
			    <form action="#.php" Method="POST">  					
				<table class="tftable" border="1">
					<caption><h3 align="left">Add Miscelleneous Fees to the Student</h3></caption>
				  <thead>
				  	<tr>
				  		
				  		<th width="10%">Misc. Fee ID</th>
				  		<th width="15%">Misc. Fee Code</th>
				  		<th width="55%">Misc. Fee Description</th>
				  		<th width="15%">Amount</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	

							$mydb->setQuery("SELECT *
											FROM `tbl_miscelleneous_fee` ");
				  	  	loadresult();	
				  	  
				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $mis) {
					  		echo '<tr>';
					  		
					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$mis->miscelleneous_fee_id. '"/>
					  				<a href="./edit_miscelleneous.php?id='.$mis->miscelleneous_fee_id.'">' . $mis->miscelleneous_fee_id.'</a></td>';
					  		echo '<td>'. $mis->miscelleneous_fee_code.'</td>';
					  		echo '<td>'. $mis->miscelleneous_fee_description.'</td>';
					  		echo '<td>'. $mis->miscelleneous_fee_amount.'</td>';
					  		
					  		//echo '<td><a href = "studentrecords.php?studentId='.$mis->student_id.'" >Enrolled Subjects</a></td>';
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody></table>
				  <br><br>
				
				<div class="btn-group">
				  
				   <button type="submit" class="btn btn-info" name="save22" data-toggle="modal" data-target="#delete_miscelleneous"><span class="glyphicon glyphicon-plus-sign"></span> Assign Selected</button>
					
				    <div class="modal fade" id="delete_miscelleneous" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Confirmation Message</h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to add the selected Other Mandatory fees to the student?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="save22" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>







					
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



