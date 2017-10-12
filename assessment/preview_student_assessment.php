<?php
require_once("includes/initialize.php");
$assessmentID = $_GET['misID'];
include 'header-preview.php';
?>
<style type="text/css">
						.tftable2 {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
						.tftable2 th {font-size:12px;background-color:#ECE8D1;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
						.tftable2 tr {background-color:#ffffff;}
						.tftable2 td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
						.tftable2 tr:hover {background-color:#ffff99;}
						</style>

<style type="text/css">
body { 
background-image: url(); 
background-repeat: no-repeat; 
height: 100%; 
width: 100%; 
background-position: bottom; 
font-size: 7px;
} 
th {
    border-bottom: 1px solid #ddd;
}
.top {
    border-top:thin solid;
    border-color:black;
}

.bottom {
    border-bottom:thin solid;
    border-color:black;
}

.left {
    border-left:thin solid;
    border-color:black;
}

.right {
    border-right:thin solid;
    border-color:black;
}
.header-row { position:fixed; top:0; left:0; }
.table {padding-top:5px; }


.Box                           //this is the parent div
{
    background-color:red;
    width:60px;
    margin:0px;
    margin-bottom: 0px;
    padding:0px;


}
.contextimg                            //this is for the image
{
    position:relative;
    margin:0px;
    padding:0px;
    line-height:0px;

}
p{
    margin:0;
    text-align: center;
    font-size: 6px;
   
}

p2{
    margin:0;
    text-align: center;
    font-size: 9px;
    font-family: lucida sans unicode,lucida grande,sans-serif;
}
</style>


	<div class="rows">
		  
            <div class="col-5 col-sm-5 col-lg-5">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  
					
					  	<div class="Box">
						
						<center><img class="contextimg" src="img/IC_LOGO.png" width="25px">
						<p2><center><strong>Initao College</strong></center></p2> 
						<p>9022 Initao, Misamis Oriental</p>
						<p>BILLING OF ACCOUNTS</p></center>
						</div>

						<?php
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

						?><br>

						<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="8%"><span style="font-size:8px;">Name</span></td>
									<td width="54%"><span style="font-size:6px;">: <?php echo $names; ?></span></td>
									<td width="8%"><span style="font-size:8px;">ID #</span></td>
									<td width="30%"><span style="font-size:8px;">: <?php echo $student_id; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:8px;">Course</span></td>
									<td width="54%"><span style="font-size:8px;">: <?php echo $course; ?></span></td>
									<td width="8%"><span style="font-size:8px;">AY</span></td>
									<td width="30%"><span style="font-size:8px;">: <?php echo $acad_year; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:8px;">Scholarship</span></td>
									<td width="54%"><span style="font-size:8px;">:</span></td>
									<td width="8%"><span style="font-size:8px;">Term</span></td>
									<td width="30%"><span style="font-size:8px;">: <?php echo $term;?></span></td>
								</tr>
							</tbody>
				</table>




					
				<table id="table" width="100%">
					<tbody>
				  
				  	<tr>
				  		<th class="top"  align="left" style="font-size:8px;">Tuition Type</th>
				  		<th class="top"   align="left" style="font-size:8px;">Subject</th>
				  		<th  class="top"  align="left" style="font-size:8px;">Units(lec)</th>
				  		<th class="top"  align="left" style="font-size:8px;">Units(lab)</th>
				  		<th  class="top" align="left" style="font-size:8px;">Amount</th>
				  		
				  	</tr>	
				 

				  <?php

				  $mydb->setQuery("SELECT `tbl_student_assessment_tuition`.`amount`, `tbl_tuition_fee`.`tuition_fee_description`, `tbl_subject`.`subject_code`, `tbl_subject`.`units_lec`, `tbl_subject`.`units_lab`
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
							$space = '    ';

					  		echo '<tr>';

					  		echo '<td width="20%" style="font-size:8px;">'. $space. $tuition->tuition_fee_description.'</a></td>';
					  								  		
					  		echo '<td width="20%" style="font-size:8px;">'. $tuition->subject_code.'</td>';
					  		echo '<td width="20%" style="font-size:8px;">'. $tuition->units_lec.'</td>';
					  		echo '<td width="20%" style="font-size:8px;">'. $tuition->units_lab.'</td>';
					  		echo '<td  width="20%"  style="font-size:8px;">'. $tuition->amount.'</td>';
					  		echo '</tr>';




					  		}

				  		} 

				  	?>



				  	</tbody>

				 
				  <tfoot>
				  	
				  	<tr><td class="bottom"  colspan="6"></td></tr>
				  	<?php
				  	$queryas13 ="SELECT  SUM(`tbl_student_assessment_tuition`.`amount`) as TF
								FROM tbl_student_assessment_tuition, tbl_tuition_fee, tbl_subject
										WHERE  `tbl_student_assessment_tuition`.`assessment_id` = '$assessmentID'
										AND  `tbl_student_assessment_tuition`.`tuition_fee_id` = `tbl_tuition_fee`.`tuition_fee_id`
										AND `tbl_student_assessment_tuition`.`subject_id` = `tbl_subject`.`subject_id`";
					$resas13 = mysql_query($queryas13) or die ("Could not execute query2.");
					$row2as13 = mysql_fetch_row($resas13);
					$TF2 = $row2as13[0];
					$TF = number_format($TF2, 2);


				  	?>

				  	<tr>
									
									
									
									<td colspan="4" style="font-size:8px;"><strong> Sub Total</strong></td>
									<td style="font-size:8px;"><strong><u>₱ <?php echo $TF; ?></u></strong></td>
									
									
					</tr>
				  
				  </tfoot>


				</table>

			

				<table id="table" width="100%">
					
				  <thead>
				  	<tr>
				  		<th  class="bottom" align="left" style="font-size:8px;"> Mis. Fee Code</th>
				  		<th class="bottom" align="left" style="font-size:8px;"> Mis. Fee Description</th>
				  		<th  class="bottom" align="left" style="font-size:8px;"> Amount</th>
				  		
				  	
	
				  	</tr>	
				  </thead>

				  <?php

				  $mydb->setQuery("SELECT  `tbl_miscelleneous_fee` . * ,  `tbl_student_assessment_micelleneous` . * 
										FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
										WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$assessmentID'
										AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id`
				  	  					
				  	  					");
				  	  	loadresult();			

				  	function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $miscelleneous) {
						

					  		echo '<tr>';

					  		echo '<td width="40%" style="font-size:8px;">'. $miscelleneous->miscelleneous_fee_code.'</a></td>';
					  								  		
					  		echo '<td width="40%" style="font-size:8px;">'. $miscelleneous->miscelleneous_fee_description.'</td>';
					  		echo '<td  width="20%"  style="font-size:8px;">'. $miscelleneous->miscelleneous_fee_amount.'</td>';
					  		
					  		echo '</tr>';




					  		}

				  		} 

				  	?>





				 
				  <tfoot>
				  	
				  	<tr><td class="bottom"  colspan="3"></td></tr>
				  	<?php
				  	$queryas1 ="SELECT  SUM(`tbl_student_assessment_micelleneous`.`amount`) as MS
									FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
											WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$assessmentID'
											AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id`";
						$resas1 = mysql_query($queryas1) or die ("Could not execute query2.");
						$row2as1 = mysql_fetch_row($resas1);
						$MS2 = $row2as1[0];
						$MS = number_format($MS2, 2);


				  	?>

				  	<tr>
									
									
									
									<td colspan="2" style="font-size:8px;"><strong> Sub Total</strong></td>
									<td style="font-size:8px;"><strong><u>₱ <?php echo $MS; ?></u></strong></td>
									
									
					</tr>
				  	
				  	
				  </tfoot>


				</table>




				<table  id="table" width="100%">
					
				  <thead>
				  	<tr>
				  		<th  class="bottom" align="left" style="font-size:8px;"> Mandatory Fee Code</th>
				  		<th class="bottom" align="left" style="font-size:8px;"> Mandatory Fee Description</th>
				  		<th  class="bottom" align="left" style="font-size:8px;"> Amount</th>
				  		
				  	
	
				  	</tr>	
				  </thead>

				  <?php

				  $mydb->setQuery("SELECT  `tbl_mandatory_fee`. * ,  `tbl_student_assessment_mandatory_fee`. * 
									FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
									WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` ='$assessmentID'
									AND  `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` =  `tbl_mandatory_fee`.`mandatory_fee_id`
				  	  					");
				  	  	loadresults();			

				  	function loadresults(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $mandatory) {
						

					  		echo '<tr>';

					  		echo '<td width="40%" style="font-size:8px;">'. $mandatory->mandatory_fee_code.'</a></td>';
					  								  		
					  		echo '<td width="40%" style="font-size:8px;">'. $mandatory->mandatory_fee_description.'</td>';
					  		echo '<td  width="20%" style="font-size:8px;">'.'₱ '.$mandatory->mandatory_fee_amount.'</td>';
					  		
					  		echo '</tr>';




					  		}

				  		} 

				  	?>





				 
				  <tfoot>
				  	
				  	<tr><td class="bottom"  colspan="3"></td></tr>
				  	<?php
				  	$queryas17 ="SELECT  SUM(`tbl_student_assessment_mandatory_fee`.`amount`) as MO
									FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
									WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` ='$assessmentID'
									AND  `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` =  `tbl_mandatory_fee`.`mandatory_fee_id`";
						$resas17 = mysql_query($queryas17) or die ("Could not execute query2.");
						$row2as17 = mysql_fetch_row($resas17);
						$MO2 = $row2as17[0];
						$MO = number_format($MO2, 2);
						


				  	?>

				  	<tr>
									
									
									
									<td colspan="2" style="font-size:8px;"><strong> Sub Total</strong></td>
									<td style="font-size:8px;"><strong><u>₱ <?php echo $MO; ?></u></strong></td>
									
									
					</tr>
				  	
				  	
				  </tfoot>


				</table>

<br>

<?php


$tz = 'Asia/Manila';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$dt->format('d-M-Y');

$buth = "SELECT `balance`, `paid_amount`, `total_payment` FROM `tbl_assessment` WHERE `assessment_id` = '$assessmentID'";
			$buths = mysql_query($buth) or die ("Could not execute query2.");
			$rowbuth = mysql_fetch_row($buths);

			$bal = $rowbuth[0];
			$paid_amount = $rowbuth[1];
			$grand_amount = $rowbuth[2];

?>
	
<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="15%"><span style="font-size:8px;">Assessed by:</span></td>
									<td width="40%"><span style="font-size:8px;">: <?php echo $_SESSION['fullname']; ?></span></td>
									<td width="25%"  align="right"><span style="font-size:8px;">Grand Total</span></td>
									<td width="20%"><span style="font-size:8px;">:<strong> ₱ <?php echo number_format($grand_amount, 2); ?></strong></span></td>
								</tr>
								<tr>
									<td width="15%"><span style="font-size:8px;">Date Assessed</span></td>
									<td width="40%"><span style="font-size:8px;">:  <?php echo $dt->format('d-M-Y'); ?></span></td>
									<td width="25%"  align="right"><span style="font-size:8px;">Amount Paid</span></td>
									<td width="20%"><span style="font-size:8px;">:<strong> ₱ <?php echo number_format($paid_amount, 2); ?></strong></span></td>
								</tr>
								<tr>
									<td width="15%"><span style="font-size:8px;">Date Printed</span></td>
									<td width="40%"><span style="font-size:8px;">: <?php echo $dt->format('d-M-Y'); ?></span></td>
									<td width="25%" align="right" ><span style="font-size:8px;">Balance Due</span></td>
									<td width="20%"><span style="font-size:8px;">:<strong> ₱ <?php echo number_format($bal, 2);?></strong></span></td>
								</tr>
							</tbody>
</table>





					
				
			</div>

            </div><!--/span-->
            
        </div><!--End or row-->
</div>
