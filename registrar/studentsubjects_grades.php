<?php
require_once("includes/initialize.php");
include 'header-entry.php';
$term = $_GET['term'];
$acad_year =  $_GET['year'];
$stu_id =  $_GET['stu_id'];
?>
 
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['stu_id'])){
				if ($_GET['stu_id']==""){
					message("ID Number is required!","error");
					check_message();
					
				}
			}

  ?>


  	
							        <?php
									        if (isset($_POST['save_grades'])){


									        	$grade 	= $_POST['grade'];
									        	$cgrade 	= $_POST['cgrade'];
												$g_id 	= $_POST['grade_id'];
												$grade[0];
												$g_id[0];
												
												$key = count($g_id);
												
												
												for($i=0;$i<$key;$i++){

												$f_grade = $grade[$i];
												$c_grade = $cgrade[$i];
												$g_id[$i];
											 
													
												$gra = new grade();
												
												$gra->final_grade	 = $f_grade;

												
												if($f_grade >= 1 or $f_grade <=3){
													


													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'PASSED';
														$gra->completion_grade	 = '';
													}

													if($c_grade == null){
														$gra->remarks 		= 'PASSED';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'PASSED';
														$gra->completion_grade	 = '';
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'PASSED';
														$gra->completion_grade	 = '';
													}
													}

												if($f_grade == ''){
														$gra->remarks 		= '';
													}
												if($f_grade == 'INC'){
													
													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'PASSED';
														$gra->completion_grade	 = $c_grade;
													}

													if($c_grade == null){
														$gra->remarks 		= 'INC';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'FAILED';
														$gra->completion_grade	 = $c_grade;
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'COMPLETE';
														$gra->completion_grade	 = $c_grade;
													}
													}
												if($f_grade == 'IP'){
													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'PASSED';
														$gra->completion_grade	 = $c_grade;
													}

													if($c_grade == null){
														$gra->remarks 		= 'IP';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'FAILED';
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'COMPLETE';
														$gra->completion_grade	 = $c_grade;
													}
													}
												if($f_grade == 'DROPPED'){
													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'DROPPED';
														$gra->completion_grade	 = '';
													}

													if($c_grade == null){
														$gra->remarks 		= 'DROPPED';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'DROPPED';
														$gra->completion_grade	 = '';
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'DROPPED';
														$gra->completion_grade	 = '';
													}
													}

												if($f_grade > 3){
													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'FAILED';
														$gra->completion_grade	 = '';
													}

													if($c_grade == null){
														$gra->remarks 		= 'FAILED';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'FAILED';
														$gra->completion_grade	 = '';
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'FAILED';
														$gra->completion_grade	 = '';
													}
													}												
												if($f_grade == 'COMPLETE'){
													if($c_grade >= 1 or $c_grade <=3){
														$gra->remarks 		= 'COMPLETE';
														$gra->completion_grade	 = '';
													}

													if($c_grade == null){
														$gra->remarks 		= 'COMPLETE';
													}

													if($c_grade > 3){
														$gra->remarks 		= 'COMPLETE';
														$gra->completion_grade	 = '';
													}																																					
													if($c_grade == 'COMPLETE'){
														$gra->remarks 		= 'COMPLETE';
														$gra->completion_grade	 = '';
													}
													}




												


												
												
											$gra->update($g_id[$i]);
												
												

												

												}
												$message = "Student Grade is  successfully updated!";
											
											}




							        ?>



							      


 <style type="text/css">
										.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
										.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
										.tftable tr {background-color:#ffffff;}
										.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
										.tftable tr:hover {background-color:#ffff99;}
										</style>
  <?php
     $student = new Student();
	 $cur = $student->single_student($_GET['stu_id']);

	 ?>
		  <!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Student Enrollment Details </h3>
					  </div>
					  <div class="panel-body">
					   <div class="row">      	  		            		          
			           <div class="container">
				 		<div class="well">
					    <form class="form-horizontal span4" action="#.php" method="POST">
				           <table align="center"> 
				           	<thead>
							  	<tr id="table">
							  		<th width="15%"  class="bottom">ID Number</th>
							  		<th width="25%"  class="bottom">Name</th>
							  		
							  		<th width="60%" class="bottom">Course</th>
							 		
							 		
							  		
				
							  	</tr>	
						    </thead> 

						    <?php
						    $mydb->setQuery("SELECT DISTINCT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name',  `tbl_course`.`course_code` ,  `tbl_student`.`course_id` ,  `tbl_course`.`course_id`, `tbl_course`.`AY` 
												FROM tbl_student, tbl_course
												WHERE (`tbl_student`.`course_id` =  `tbl_course`.`course_id`
												AND (`tbl_student`.`student_id` =  '$stu_id'
												)

												)
												

							");
							loadresult();


						    ?>
						     <tbody>
						     	<?php
						     	function loadresult(){
						  			global $mydb;
							  		$cur = $mydb->loadResultList();
									foreach ($cur as $student) {
							  		echo '<tr>';

							  		echo '<td>
							  				<a href="./edit_studentinfo.php?id='.$student->student_id.'">' . $student->student_id.'</a></td>';
							  		echo '<td>'. $student->Name.'</td>';
							  		echo '<td>'. $student->course_code.', '.$student->AY.'</td>';
							  		
							  		echo '</tr>';
							  		}

						  		} 
						  		?>
						      </tbody>
						       <tfoot>
				  	
							  	<tr><td   colspan="7"></td></tr>
							  	<tr><td  colspan="6" align="Right"></td><td align="center" ></td></tr>
							  </tfoot>     
					     </table>
					     </form>
					    </div>	
					   </div>				            	              
			          </div>				          
			         </div><!--/span-->
			    <!--  </form> -->
			    <div class="rows">					  
				<div class="panel-body">
				<html>					  
				<body>
				<div class="container">
					<?php
					check_message();
						
					?>
				 <div class="well">
				<form class="form-horizontal span4" action="delete_studentSubjects.php?studentId=<?php echo $_GET['stu_id']; ?>" method="POST">					    
				  <table class="tftable">
					<caption><h3 align="left"><?php echo $acad_year; ?> - <?php echo $term; ?> List of Subjects</h3><hr/></caption>
					 <thead>


					  	<tr>

					  		<th width="15%"  class="bottom">Subject Code</th>
					  		<th width="25%"  class="bottom">Descriptive Title</th>
					 		
					 		<th width="10%"  class="bottom">Unit(lab)</th>
					 		<th width="10%"  class="bottom">Unit(lec)</th>
					 		<th width="15%"  class="bottom">Final Grade</th>
					 		<th width="15%"  class="bottom">Completion Grade</th>
					 		<th width="10%"  class="bottom">Remarks</th>
					 		
					  		
		
					  	</tr>	   
					  </thead>
					  <tbody>
					  	<?php
				 			

						  		
						  		$mydb->setQuery("SELECT `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`,  `tbl_grades`.*, `tbl_enrolled_subject`.*

															FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades

															where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
															and `tbl_enrollment_records`.`term` = '$term'
															and `tbl_offerred_subject`.`semester` = '$term'
															and `tbl_offerred_subject`.`AY` = '$acad_year'
															and `tbl_enrollment_records`.`AY` = '$acad_year'
															and `tbl_enrollment_records`.`student_id` = '$stu_id'
															and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
															and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
															and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
															and `tbl_offerred_subject`.`AY` = `tbl_enrollment_records`.`AY`
															AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`


													");
					  			$cur = $mydb->loadResultlist();
								foreach ($cur as $result) {
									
							  		echo '<tr>';

							  		
							  		echo '<td>'. $result->subject_code.'</td>';
							  		echo '<td>'. $result->description_title.'</td>';
							  		
							  		echo '<td>'. $result->units_lab.'</td>';
							  		echo '<td>'. $result->units_lec.'</td>';
							  		echo '<td>'. $result->final_grade.'</td>';
							  		echo '<td>'. $result->completion_grade.'</td>';
							  		echo '<td>'. $result->remarks.'</td>';

							  		
							  						
							  		echo '</tr>';}
						  	 
					  	?>
					  </tbody>
					
					</table>
					<br>
						<div class="btn-group">
						<a href="studentrecords_grades.php?studentId=<?php echo $stu_id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
						<a href="preview_grade_card.php?studentId=<?php echo $stu_id; ?>&ay=<?php echo $acad_year; ?>&term=<?php echo $term; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-print"></span> Print</a>
						<button class="btn btn-success" data-toggle="modal" data-target="#add_grades"><span class="glyphicon glyphicon-refresh"></span> Update Grades</button>
						
					

					</form>


						  <div class="modal fade" id="add_grades" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <strong><center><h4 class="modal-title">Add Grades</h4></center></strong>
							        </div>
							        <div class="modal-body" >

							      
									<form class="form-horizontal well span6" action="#" method="POST">
							          <table class="tftable">
							        	<tr>
											<th width="20%"  class="bottom">Subject Code</th>
									  		<th width="35%"  class="bottom">Descriptive Title</th>
									 		<th width="20%"  class="bottom">Final Grade</th>
									 		<th width="25%"  class="bottom">Completion Grade</th>
									 	</tr>

									 	<?php
				 			

								  		
								  		$mydb->setQuery("SELECT `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`,  `tbl_grades`.*, `tbl_enrolled_subject`.*

															FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades

															where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
															and `tbl_enrollment_records`.`term` = '$term'
															and `tbl_offerred_subject`.`semester` = '$term'
															and `tbl_offerred_subject`.`AY` = '$acad_year'
															and `tbl_enrollment_records`.`AY` = '$acad_year'
															and `tbl_enrollment_records`.`student_id` = '$stu_id'
															and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
															and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
															and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
															and `tbl_offerred_subject`.`AY` = `tbl_enrollment_records`.`AY`
															AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`



															");
							  			$cur = $mydb->loadResultlist();
										foreach ($cur as $result) {
											
									  		echo '<tr>';

									  		
									  		echo '<td>'. $result->subject_code.'</td>';
									  		echo '<td>'. $result->description_title.'</td>';
									  		
									  		echo '<td>
									  					<select class="form-control input-sm" name="grade[]" id="grade[]">
										                	<option value="'. $result->final_grade.'">'. $result->final_grade.'</option>
										                	<option value=""></option>
															<option value="1">1</option>
															<option value="1.1">1.1</option>
															<option value="1.2">1.2</option>
															<option value="1.3">1.3</option>
															<option value="1.4">1.4</option>
															<option value="1.5">1.5</option>
															<option value="1.6">1.6</option>
															<option value="1.7">1.7</option>
															<option value="1.8">1.8</option>
															<option value="1.9">1.9</option>
															<option value="2.0">2.0</option>
															<option value="2.1">2.1</option>
															<option value="2.2">2.2</option>
															<option value="2.3">2.3</option>
															<option value="2.4">2.4</option>
															<option value="2.5">2.5</option>
															<option value="2.6">2.6</option>
															<option value="2.7">2.7</ption>	
															<option value="2.8">2.8</option>
															<option value="2.9">2.9</option>
															<option value="3.0">3.0</option>
															<option value="5.0">5.0</option>
															<option value="INC">INC</option>
															<option value="DROPPED">DROPPED</option>
															<option value="IP">IP</option>
															<option value="COMPLETE">COMPLETE</option>
															
														</select>


												</td>';

											
											echo '<td>

									  			<select class="form-control input-sm" name="cgrade[]" id="cgrade[]">
										                	<option value="'. $result->completion_grade.'">'. $result->completion_grade.'</option>
															<option value=""></option>
															<option value="1">1</option>
															<option value="1.1">1.1</option>
															<option value="1.2">1.2</option>
															<option value="1.3">1.3</option>
															<option value="1.4">1.4</option>
															<option value="1.5">1.5</option>
															<option value="1.6">1.6</option>
															<option value="1.7">1.7</option>
															<option value="1.8">1.8</option>
															<option value="1.9">1.9</option>
															<option value="2.0">2.0</option>
															<option value="2.1">2.1</option>
															<option value="2.2">2.2</option>
															<option value="2.3">2.3</option>
															<option value="2.4">2.4</option>
															<option value="2.5">2.5</option>
															<option value="2.6">2.6</option>
															<option value="2.7">2.7</ption>	
															<option value="2.8">2.8</option>
															<option value="2.9">2.9</option>
															<option value="3.0">3.0</option>
															<option value="5.0">5.0</option>
															
															<option value="DROPPED">DROPPED</option>
															<option value="IP">IP</option>
															<option value="COMPLETE">COMPLETE</option>
															
														</select>	


									  			</td>';
									  		
									  		echo '<input type="hidden" id="grade_id[]" name="grade_id[]" value="'. $result->grade_id.'" />';
									  		
									  		
									  						
									  		echo '</tr>';}
								  	 
							  				?>
											 </table>	   


							        
							        <div class="modal-footer">
						
							          <button class="btn btn-success" name="save_grades" type="submit" ><span class="glyphicon glyphicon-plus"></span> Add</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>

							        </div>
									</form>
							      </div>
							      
							    </div>
							  </div>


					

						





						</body>
						</html>		
					  </div>
					</div>
									
				</form>
			 <SCRIPT LANGUAGE="JavaScript"> 
			
		 </script>

            </div><!--/span-->
            
        </div><!--End or row-->
          
</div>

			        </div><!--End or row-->
									
				</form>
				  
		  </div>

		</div>

		   
            
			

<?php include("footer.php") ?>



