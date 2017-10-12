<?php
require_once("includes/initialize.php");
include 'header-transaction.php';


							                                 	$aid = $_GET['assessmentId'];
							                                    $queryas ="SELECT *
																			FROM `tbl_assessment`
																			WHERE `assessment_id`= '$aid'
																			";
							                                    $resas = mysql_query($queryas) or die ("Could not execute query2.");
							                          
							                                    $row2as = mysql_fetch_row($resas);
							                                    
							                                      $ass_id = $row2as[0];
							                                      $studentId = $row2as[10];
							                                      $ay = $row2as[8];
							                                      $term = $row2as[9];



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
</style>
<html>
<title>ICES</title>
<body>
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	
						
					

					$student = new Student();
					$cur = $student->single_student($studentId);
					$course = new Course();
					$studcourse = $course->single_course($cur->course_id);


					






  ?>

</nav>
		  

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Student Billing Assessment</h3>
					  </div>

					<span class="pull-right"><br>
						<div class="btn-group">
						  <a href="preview_student_assessment.php?misID=<?php echo $aid;?>" class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print Assessment</a>
						 <button type="button" class="btn btn-success" name="print"><span class="glyphicon glyphicon-repeat"></span> Update Payment</button>
					</div>
				</span><br><br><br>


					
					  <div class="panel-body">

					   <div class="row">


			         	   <div class="col-12 col-sm-12 col-lg-12">     
			            	          
			           
				           <table align="center">
				         	<thead>
							  	<tr id="table">
							  		<th width="15%" >ID No.</th>
							  		<th width="20%" >Name</th>
							  		<th width="45%" >Course</th>
							  		<th width="10%" >Term</th>
							  		<th width="15%" >AY</th>
							  		
							  		
				
							  	</tr>	
						    </thead> 
						     <tbody>
						     	<tr>
						     		<td><?php echo (isset($cur)) ? $cur->student_id : 'ID' ;?></td>
						     		<td><?php echo (isset($cur)) ? $cur->lname.', '.$cur->fname.' '.$cur->mname : 'Fullname' ;?></td>
						     		<?php /*
						     		$course = $cur->course_id;

						     		$gg = "SELECT *
											FROM `tbl_course`
											WHERE `course_id` ='$course'";
						     		$ll = mysql_query($gg) or die ("Could not execute query for course!.");
							                          
							        $rowl = mysql_fetch_row($ll);
							                                    
							        $course_des = $rowl[1];*/

						     		?>
						     		<td><?php echo (isset($studcourse)) ? $studcourse->course_code : 'course' ;?></td>
						     		<td><?php echo $ay ;?></td>
						     		<td><?php echo $term ;?></td>
						     		
						     	</tr>
						      </tbody>
						       <tfoot>
				  	
							  	<tr><td   colspan="7"></td></tr>
							  	<tr><td  colspan="6" align="Right"></td><td align="center" ></td></tr>
							  </tfoot>	   
					    
					
				           </table>
				           <BR>

				    <?php
					  	$queryas1 ="SELECT  SUM(`tbl_student_assessment_micelleneous`.`amount`) as MS
									FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
											WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$aid'
											AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id`";
						$resas1 = mysql_query($queryas1) or die ("Could not execute query2.");
						$row2as1 = mysql_fetch_row($resas1);
						$MS2 = $row2as1[0];
						$MS = number_format($MS2, 2);


				  	?>

				  	<?php
				  	$queryas12 ="SELECT  SUM(`tbl_student_assessment_mandatory_fee`.`amount`) as OM
								FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
										WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` = '$aid'
										AND  `tbl_mandatory_fee`.`mandatory_fee_id` = `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` ";
					$resas12 = mysql_query($queryas12) or die ("Could not execute query2.");
					$row2as12 = mysql_fetch_row($resas12);
					$OM = $row2as12[0];
					$OM2 = number_format($OM, 2);

				  	?>
				  	<?php
				  	$queryas13 ="SELECT  SUM(`tbl_student_assessment_tuition`.`amount`) as TF
								FROM tbl_student_assessment_tuition, tbl_tuition_fee, tbl_subject
										WHERE  `tbl_student_assessment_tuition`.`assessment_id` = '$aid'
										AND  `tbl_student_assessment_tuition`.`tuition_fee_id` = `tbl_tuition_fee`.`tuition_fee_id`
										AND `tbl_student_assessment_tuition`.`subject_id` = `tbl_subject`.`subject_id`";
					$resas13 = mysql_query($queryas13) or die ("Could not execute query2.");
					$row2as13 = mysql_fetch_row($resas13);
					$TF2 = $row2as13[0];
					$TF = number_format($TF2, 2);


				  	?>
				           	<?php

								$sum = $MS2 + $OM + $TF2;


								$buth = "SELECT `balance`, `total_payment`, `paid_amount`, `status` FROM `tbl_assessment` WHERE `assessment_id` = '$aid'";
											$buths = mysql_query($buth) or die ("Could not execute query2.");
											$rowbuth = mysql_fetch_row($buths);

											$bal = $rowbuth[0];
											$paid_amounts = $rowbuth[2];
											$t_payment = $rowbuth[1];
											$stat = $rowbuth[3];


								

								?>
							<table class="tftable2" border="1">

							<tr>
																
																
																<th width="25%"> GRAND TOTAL: <u><?php echo number_format($t_payment, 2); ?> </u></th>
																<th width="25%"> PAID AMOUNT: <?php echo number_format($paid_amounts, 2); ?></th>
																<th width="25%"> BALANCE: <?php echo number_format($bal, 2); ?></th>
																
																<th width="25%"> STATUS: <?php echo $stat; ?></th>
																
																
							</tr>
							</table>
			            			             
			            </div>
				          
			            </div><!--/span-->
			        <div class="rows">

<br>
		 
<div class="col-12 col-sm-12 col-lg-12">
     <div class="panel panel-primary">
		<div class="panel-body">
			
					<form class="form-horizontal span4" action="delete_assign_miscelleneous.php" Method="POST">
					    <caption><h3 align="left">Misscelleneous Fee</h3></caption>

					    <style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>

						<table class="tftable" border="1">
						<tr>
									
									
									<th width="30%"> Mis. Fee Code</th>
									<th width="50%"> Mis. Fee Description</th>
									<th width="20%"> Amount</th>
									
									
						</tr>

					<tbody>
				  	<?php 

				  	
				  	  
				  	  
				  	  	$mydb->setQuery("SELECT  `tbl_miscelleneous_fee` . * ,  `tbl_student_assessment_micelleneous` . * 
										FROM tbl_miscelleneous_fee, tbl_student_assessment_micelleneous
										WHERE  `tbl_student_assessment_micelleneous`.`assessment_id` = '$aid'
										AND  `tbl_student_assessment_micelleneous`.`miscelleneous_fee_id` =  `tbl_miscelleneous_fee`.`miscelleneous_fee_id` 
				  	  					
				  	  					");
				  	  	loadresult();

				  	  
				  	  

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $miscelleneous) {
							$space = '    ';
					  		echo '<tr>';

					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$miscelleneous->sam_id. '"/>'. $space. $miscelleneous->miscelleneous_fee_code.'</a></td>';
					  				
					  		
					  		echo '<td>'. $miscelleneous->miscelleneous_fee_description.'</td>';
					  		echo '<td>'. $miscelleneous->miscelleneous_fee_amount.'</td>';

					  		echo '</tr>';




					  		}

				  		}

				  	?>

				  	<tr>
						<td width="80%"  colspan="2"><span  class="pull-right"><strong> Sub Total</strong></span></td>
						<td width="20%"><strong> <u>₱ <?php echo $MS; ?></u></strong></td>
								
					</tr>


				  </tbody>
				  
						
				</table>
				<br>
							
				<div class="btn-group">
					<a href="assign_miscelleneous.php?misID=<?php echo $aid;?>" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Add Miscelleneous Fee</a>
				<button type="submit" class="btn btn-danger" name="mis_delete" data-toggle="modal" data-target="#delete_miscelleneous"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					
						    <div class="modal fade" id="delete_miscelleneous" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-danger">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Warning Message</h4>
									        </div>
									        <div class="modal-body" >
									          <p>Are you sure you want to delete the selected miscelleneous fee particulars?.</p>
									        </div>
									        <div class="modal-footer">
									          <button name="mis_delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>
				</div>		
									
				</form>

			
        </div><!--/span-->
	</div><!--End or row-->
</div><!--End or row-->
				          









 <div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	
					    <form class="form-horizontal span4"  action="delete_assign_mandatory.php" Method="POST">
					    <caption><h3 align="left">Other Mandatory Fee</h3></caption>

					    <style type="text/css">
						.tftable5 {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse;}
						.tftable5 th {font-size:12px;background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}
						.tftable5 tr {background-color:#ffffff;}
						.tftable5 td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}
						.tftable5 tr:hover {background-color:#ffff99;}

						
						</style>



						<table class="tftable" border="1">
						<tr>
									
									
									<th width="30%"> Mandatory Fee Code</th>
									<th width="50%"> Mandatory Fee Description</th>
									<th width="20%"> Amount</th>
									
									
						</tr>


						<tbody>
				  	<?php 

				  	
				  	  
				  	  
				  	  	$mydb->setQuery("SELECT `tbl_mandatory_fee`.*, `tbl_student_assessment_mandatory_fee`.*
										FROM tbl_mandatory_fee, tbl_student_assessment_mandatory_fee
										WHERE  `tbl_student_assessment_mandatory_fee`.`assessment_id` = '$aid'
										AND  `tbl_mandatory_fee`.`mandatory_fee_id` = `tbl_student_assessment_mandatory_fee`.`mandatory_fee_id` 
				  	  					
				  	  					");
				  	  	loadresult2();

				  	  
				  	  

				  		
				  		
				  	
				  		function loadresult2(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $mandatory) {
							$space = '    ';
					  		echo '<tr>';

					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$mandatory->samf_id. '"/>'. $space. $mandatory->mandatory_fee_code.'</a></td>';
					  				
					  		
					  		echo '<td>'. $mandatory->mandatory_fee_description.'</td>';
					  		echo '<td>'. $mandatory->mandatory_fee_amount.'</td>';

					  		echo '</tr>';




					  		}

				  		} 
				  	
				  	?>


				  	

				  	<tr>
									
									
									
									<td width="80%"  colspan="2"><span  class="pull-right"><strong> Sub Total</strong></span></td>
									<td width="20%" class="myNumber"><strong><u>₱ <?php echo $OM2; ?></u></strong></td>
									
									
					</tr>


				  </tbody>
						
				</table>
				<br>
							
						<div class="btn-group">
						  <a href="assign_mandatory.php?misID=<?php echo $aid;?>" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Add Other Mandatory Fee</a>
						  
						 <button type="submit" class="btn btn-danger" name="delete" data-toggle="modal" data-target="#delete_mandatory"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					
						    <div class="modal fade" id="delete_mandatory" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-danger">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Warning Message</h4>
									        </div>
									        <div class="modal-body" >
									          <p>Are you sure you want to delete the selected mandatory fee particulars?.</p>
									        </div>
									        <div class="modal-footer">
									          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>
				
									
				</form>

			

            
            </div>
   </div><!--End or row-->
          


</div><!--End or row-->










	 <div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="left">Tuition Fee</h3></caption>

					    
						


						<table class="tftable" border="1">
						<tr>
									
									
									<th width="20%"> Tuition Type</th>
									<th width="40%"> Subject</th>
									<th width="15%"> Unit(lec)</th>
									<th width="15%"> Unit(lab)</th>
									<th width="10%"> Amount</th>
									
									
						</tr>
						<tbody>
				  	<?php 

				  	
				  	  
				  	  
				  	  	$mydb->setQuery("SELECT `tbl_student_assessment_tuition`.`amount`, `tbl_tuition_fee`.`tuition_fee_description`, `tbl_subject`.`subject_code`, `tbl_subject`.`units_lec`, `tbl_subject`.`units_lab`
											FROM tbl_student_assessment_tuition, tbl_tuition_fee, tbl_subject
										WHERE  `tbl_student_assessment_tuition`.`assessment_id` = '$aid'
										AND  `tbl_student_assessment_tuition`.`tuition_fee_id` = `tbl_tuition_fee`.`tuition_fee_id`
										AND `tbl_student_assessment_tuition`.`subject_id` = `tbl_subject`.`subject_id`
				  	  					
				  	  					");
				  	  	loadresult4();

				  	  
				  	  

				  		
				  		
				  	
				  		function loadresult4(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $tuition) {
							$space = '    ';
							$zero = '0';
					  		echo '<tr>';

					  		echo '<td>'. $space. $tuition->tuition_fee_description.'</a></td>';
					  				
					  		
					  		echo '<td>'. $tuition->subject_code.'</td>';

					  		if($tuition->tuition_fee_description=='Lecture Fee'){

					  			echo '<td>'. $zero.'</td>';
					  		}
					  		else{

					  			echo '<td>'. $tuition->units_lec.'</td>';

					  		}


					  		if($tuition->tuition_fee_description=='Laboratory Fee'){

					  			echo '<td>'. $zero.'</td>';
					  		}
					  		else{

					  			echo '<td>'. $tuition->units_lab.'</td>';

					  		}


					  		
					  		
					  		echo '<td>'. $tuition->amount.'</td>';
					  		echo '</tr>';




					  		}

				  		} 
				  	
				  	?>


				  	

				  	<tr>
									
									
									
									<td width="80%"  colspan="4"><span  class="pull-right"><strong> Sub Total</strong></span></td>
									<td width="20%"><strong><u>₱ <?php echo $TF; ?></u></strong></td>
									
									
					</tr>



				  </tbody>
						
				</table>
				<br>
							
						<div class="btn-group">
						  <a href="assign_tuition.php?misID=<?php echo $aid;?>" class="btn btn-info"><span class="glyphicon glyphicon-repeat"></span> Update Tuition Fee</a>
						 <!--<button type="button" class="btn btn-danger" name="print"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>-->
						</form>
							
					  </div>
					</div>
									
				</form>















            </div><!--/span-->




            
            
        </div><!--End or row-->
          


			        </div><!--End or row-->



					  </div>
					</div>
									
	</body>
						</html>	




























				  
		  </div>

		</div>

		   
            
			

<?php include("footer.php") ?>



