<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$student_id=$_GET['studentId'];
$coursess=$_GET['course'];


if($student_id == 'ID' or $student_id == ''){

	?>    <script type="text/javascript">               
				alert("ID Number is REQUIRED.Please Check!");
           </script>
     <?php
	redirect ('evaluation.php');
}

$student = new student();
$cur = $student->single_student($student_id);
$course = new Course();
$studcourse = $course->single_course($cur->course_id);




$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
			FROM  `tbl_ay` 
			WHERE  `ay_status` =  'ACTIVE'
			LIMIT 0 , 30";
			$resa = mysql_query($querya) or die ("Could not execute query2.");
			$my_resa = mysql_num_rows($resa);
			$row2a = mysql_fetch_row($resa);
			$ayy2 = $row2a[1];
			$tt = $row2a[2];

			
			
			
			
			


			if (isset($_POST['enrollment'])){
		                                    							                              
 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				
				 $ay 			= $ayy2;
				 $Semester 		= $tt;
				 $Status		= 'Continuing';
				 $stud_id 		= $student_id;

				

               
                        

				  $sql22 = "SELECT * 
				  			FROM `tbl_enrollment_records` 
				  			WHERE `AY` = '$ay' and `term`='$Semester' and `student_id` = '$stud_id'";
			      $result22 = mysql_query($sql22) or die ("Could not execute query2.");
			      $num22 = mysql_num_rows($result22);
			     

			      if($num22 >=1){


					      	?>    <script type="text/javascript">
		                            alert("Theres an error Enrolling the Student because the Term or the Accademic Year of the student is already exist!!.");
		                          </script>
		                    <?php
			
							redirect('enrollment.php?studentId='.$stud_id);	

			      }
			      else{			
					$sql65 = "SELECT `tbl_course`.`course_id` , `tbl_course`.`course_code` , `tbl_course`.`Major` , `tbl_course`.`AY` , `tbl_student`. *
					FROM tbl_course, tbl_student
					WHERE `tbl_course`.`course_id` = `tbl_student`.`course_id`
					AND `tbl_student`.`student_id` ='$stud_id' ";
					$result265 = mysql_query($sql65) or die ("Could not execute query for course details");
					$row65 = mysql_fetch_row($result265);
					$course_id=$row65[0];
					$course_code=$row65[1];
					$course_major=$row65[2];

				      		$sql78 = "INSERT INTO `tbl_enrollment_records`(`student_id`, `assessment_id`, `term`, `AY`, `status`,  `date_enrolled`) 
				      				VALUES ('$stud_id',null,'$Semester','$ay','$Status', CURRENT_TIMESTAMP)";
				     		$result278 = mysql_query($sql78) or die ("Could not execute query for enrolling the student.");			     			     
						    
						
							redirect('saveassessment1a.php?studentId='.$stud_id.'&term='.$tt.'&ay='.$ayy2.'&status='.$Status.'&course='.$course_id);

					


			      	

			      }
			      
			




			}
	
			

?>



<div class="container">
		
		<div class="col-xs-12 col-sm-7">
			<div class="rows">
				<div class="well">


					 <form class="form-horizontal span4" action="" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> View other offered subjects from other course</h3>
					  </div>
					  <div class="panel-body">

					   
				  			<div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "course">Course:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="course" id="course">
				                 
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code .'</option>';
				                  	}

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>
				         
				         

						<div class="form-group" id="subjcode">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <a href="evaluation2.php?studentId=<?php echo $_GET['studentId']; ?>&course=<?php echo $coursess; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</a>
									    				  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
					
				

				</div>
			</div>
		</div>
		<!--/span--> 
		
		
	<!--/row-->
<div class="row row-offcanvas row-offcanvas-right">
<div class="col-xs-6 col-sm-5 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="panel panel-success">
					
					  <div class="panel-heading"><center><strong>Students Information</strong></center></div>
					   <div class="panel-body">	
						   <form  method="POST" action="index.php">
								<div class="col-xs-12 col-sm-12">
								<?php $student = new Student();
										$tol = $student->single_student($_GET['studentId']);?>

					            	<p>ID Number: <font color="green"><?php echo  $tol->student_id;?> </font></p>
					            	<p>Name: <font color="green"><?php echo $tol->lname.', '.$tol->fname.' '.$tol->mname;?></font></p>
					            	<p>Course: <font color="green"><?php echo (isset($studcourse)) ? $studcourse->course_abb.'-'.$studcourse->Major.', '.$studcourse->AY : 'course' ;?></font></p>
					            	<p>Term: <font color="green"><?php echo $tt; ?></font></p>
					            	<p>AY: <font color="green"><?php echo $ayy2; ?></font></p>
						            





						            
						           
						        </div>
					        </form>
						</div>
				</div>
	</div>
	
	
	<!--/.well --> 
</div>

</div>


<div class="container" width="100%">

	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="p_studentsubjects3.php?id=<?php echo $_GET['studentId']; ?>&course=<?php echo $_GET['course']; ?>" Method="POST"> 

			    <style type="text/css">
						.tftable {font-size:11px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:11px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:11px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
				</style>
 					
				<table class="tftable" border="1">
					<caption><h3 align="left">Recommended Subjects</h3></caption>
				  <thead>
				  	<tr>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject Code</th>
				  		<th>Descriptive Title</th>
				  		<th>Section</th>
				  		<th>Unit(lec)</th>
				  		<th>Unit(lab)</th>
				  		<th>Pre-requisite</th>
				  		<th>Slot</th>
				  		<th>Avai. Slot</th>
				  		<th>Schedule</th>
				  		<th>Building/Room</th>
				 		
				 		<th>Status</th>
						<th>Delete</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$studentId=$_GET['studentId'];

				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 30;
										
					//total count record ($total_count)
					$countEmp = new SubjPagination_offerred();
					$total_count = $countEmp->count_allrecords2();
					
					$pagination = new SubjPagination_offerred($current_page, $per_page, $total_count);
				  	
				  	  @$course2 	 =  $_POST['course'];
				  	  
				  	  If (isset($_POST['search'])){
				  	  	
				  	  	if ($course2 !=''  ){ 
				  	  	$curso = $course2;
						$student_ko  = $_GET['studentId'];
						$tinuod_course = $_GET['course'];
						
						$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
								FROM  `tbl_ay` 
								WHERE  `ay_status` =  'ACTIVE'
								LIMIT 0 , 30";
						$resa = mysql_query($querya) or die ("Could not execute query2.");
						$my_resa = mysql_num_rows($resa);
						$row2a = mysql_fetch_row($resa);
						$ayy2 = $row2a[1];
						$tt = $row2a[2];


						$my_query = "SELECT distinct `tbl_subject`.`subject_code`, 
													`tbl_subject`.`description_title`, 
													`tbl_offerred_subject`.`section`, 
													`tbl_subject`.`units_lec`, 
													`tbl_subject`.`units_lab`, 
													`tbl_subject`.`requisites_subject_id`, 
													`tbl_offerred_subject`.`slots`, 
													`tbl_room`.`building_name_and_room_number`, 
													`tbl_instructor_load`.`starttime`, 
													`tbl_instructor_load`.`starttime_extension`, 
													`tbl_instructor_load`.`endtime`, 
													`tbl_instructor_load`.`endtime_extension`,  
													`tbl_subject`.`subject_id`,
													`tbl_offerred_subject`.`offerred_subject_id`

									FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_course, tbl_curriculum, tbl_instructor
									WHERE `tbl_course`.`course_id` = `tbl_curriculum`.`course_id`
									AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
									and `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
									AND `tbl_curriculum`.`subject_id` = `tbl_offerred_subject`.`subject_id`
									and `tbl_instructor`.`instructor_id` = `tbl_instructor_load`.`instructor_id`
									and `tbl_instructor_load`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
									and `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
									and `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
									and `tbl_offerred_subject`.`AY` = '$ayy2'
									and `tbl_offerred_subject`.`semester` = '$tt'
									and `tbl_offerred_subject`.`course_id` = '$course2'";
						$my_query2 = mysql_query($my_query) or die ("could not execute query 5");
						while($my_query_row = mysql_fetch_row($my_query2)){


							  		echo '<tr>';
						  		$select='';

						  		$student_id2=$_GET['studentId'];




								$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
								FROM  `tbl_ay` 
								WHERE  `ay_status` =  'ACTIVE'";
								$resa = mysql_query($querya) or die or die ("could not execute query 6");
								$my_resa = mysql_num_rows($resa);
								$row2a = mysql_fetch_row($resa);
								$ayy2aq = $row2a[1];
								$ttt = $row2a[2];



						  		$ofs = $my_query_row[13];



						  		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id` 
								FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
								WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
								AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
								AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
								AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
								and `tbl_enrolled_subject`.`offered_subject_id` = '$ofs'
								AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
								AND  `tbl_subject`.`subject_id` =  '$my_query_row[12]'
								AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
								and  `tbl_offerred_subject`.`course_id` = '$course2'
								";
						$qqqs = mysql_query($qqs) or die ("could not execute query 7");  
						$qqqs_fetch = mysql_fetch_row($qqqs);						
						$num22 = mysql_num_rows($qqqs);

							$wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
									FROM tbl_enrolled_subject
									WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$my_query_row[12]'
									AND `tbl_enrolled_subject`.`offered_term` = '$tt'
									AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'
									";

									$wewewe = mysql_query($wewe) or die ("Could not execute query for counting the available slot.");
									$roww = mysql_fetch_row($wewewe);
									$roww[0];							                                    

									$off_bal = '$my_query_row[6]' - $roww[0];
							
							echo '<tr>';

							if($num22 >=1){
								echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>' .' '. '$my_query_row[13]'.'</td>';
							}
							else{
								echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$my_query_row[13]. '"/>' .' '. $my_query_row[0].'</td>';
							}
																		
								echo '<td><center>'.$my_query_row[1].'</center></td>';
								echo '<td><center>'.$my_query_row[2].'</center></td>';
								echo '<td><center>'.$my_query_row[3].'</center></td>';
								echo '<td><center>'.$my_query_row[4].'</center></td>';
								echo '<td><center>'.$my_query_row[5].'</center></td>';
								echo '<td><center>'.$my_query_row[6].'</center></td>';
								echo '<td><center>'.$off_bal.'</center></td>';
																		
								$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
										FROM `tbl_instructor_load`
										WHERE `offered_subject_id` = '$my_query_row[13]'
										GROUP BY `offered_subject_id`
																				";
								$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information");
								$row_sche = mysql_fetch_row($sche_2);
								$days_ni = $row_sche['0'];

								echo '<td><center>'.$days_ni.' '.$my_query_row[8]. $my_query_row[9].'-'.$my_query_row[10].$my_query_row[11] .'</center></td>';
								echo '<td><center>'.$my_query_row[7].'</center></td>';
																		
							if($num22 >=1){
								echo '<td><font color="red">'.'Already Added'.'</font></td>';
							}
							else{
								echo '<td>'.'None'.'</td>';
							}
							
							
							if($num22 >=1){
								echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
							}
							else{
								echo '<td></td>';
							}

							echo '</tr>';

						  		

							    
							 
							    


						}


						
					  	}








	else{

	
	
	
	
	
						  
	$curso=$_GET['course'];
	$student_ko  = $_GET['studentId'];
	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
								FROM  `tbl_ay` 
								WHERE  `ay_status` =  'ACTIVE'
								LIMIT 0 , 30";
						$resa = mysql_query($querya) or die ("Could not execute query2.");
						$my_resa = mysql_num_rows($resa);
						$row2a = mysql_fetch_row($resa);
						$ayy2 = $row2a[1];
						$tt = $row2a[2];
									 	
						$curri = "SELECT `subject_id` FROM `tbl_curriculum` WHERE `course_id` = '$curso' ";
						$curri_1 = mysql_query($curri) or die ("could not execute query for curriculum");
						while($row_curri = mysql_fetch_row($curri_1)){
						$subject_ko = $row_curri[0];
						$sub_count = "SELECT distinct `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`,  `tbl_grades`.*, `tbl_enrolled_subject`.*
										FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
										where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
										and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
										and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
										and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
										AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										and `tbl_enrollment_records`.`student_id` = '$student_ko'
										and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
										
									";

							$query_count = mysql_query($sub_count) or die ("could not execute query in counting the subjects information 404");
							
							$row_query_count = mysql_num_rows($query_count);
							
							if($row_query_count > 0){
								$sub_counting = "SELECT `tbl_subject`.`subject_code`
												FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
												where (`tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
												and  `tbl_offerred_subject`.`course_id` = '$coursess'
												AND `tbl_grades`.`remarks` = 'PASSED')
												OR 
												(`tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
												and  `tbl_offerred_subject`.`course_id` = '$coursess'
												AND `tbl_grades`.`remarks` = 'COMPLETE')
												
												";

									$query_counting = mysql_query($sub_counting) or die ("could not execute query in getting the subjects pre-requisite 34");
									$counting_fetch = mysql_fetch_row($query_counting);
									
									
											$req_ko = $counting_fetch[0];
											
											$to_show = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`
														FROM tbl_subject, tbl_curriculum, tbl_offerred_subject
														where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
														and  `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
														and  `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
														AND `tbl_curriculum`.`course_id` = '$curso'
														AND `tbl_curriculum`.`course_id` = `tbl_offerred_subject`.`course_id`
														AND `tbl_subject`.`requisites_subject_id` = '$req_ko'
														and  `tbl_offerred_subject`.`course_id` = '$curso'
														";
											$to_show_1 = mysql_query($to_show) or die ("could not execute query 26");
											$show_row_count = mysql_num_rows($to_show_1);
											
											if($show_row_count > 0){
													while($row_to_show = mysql_fetch_row($to_show_1)){
													$subject_id = $row_to_show[0];
													$subject_codes = $row_to_show[1];
													$subject_desc = $row_to_show[2];
													$subject_req = $row_to_show[3];
													echo '<tr>';
																			
													$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
													$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
													$row_count_status = mysql_fetch_row($count_status_1);
													$counting_offer = $row_count_status[0];
													
													if($counting_offer > 0){
														$curso=$_GET['course'];
														$final_subject = "SELECT  distinct `tbl_subject`.`subject_id`, 
																	`tbl_subject`.`subject_code`, 
																	`tbl_subject`.`description_title`, 
																	`tbl_offerred_subject`.`section`, 
																	`tbl_subject`.`units_lec`, 
																	`tbl_subject`.`units_lab`, 
																	`tbl_subject`.`requisites_subject_id`, 
																	`tbl_offerred_subject`.`slots`, 
																	`tbl_room`.`building_name_and_room_number`, 
																	`tbl_instructor_load`.`starttime`, 
																	`tbl_instructor_load`.`starttime_extension`, 
																	`tbl_instructor_load`.`endtime`, 
																	`tbl_instructor_load`.`endtime_extension`, 
																	`tbl_offerred_subject`.`offerred_subject_id`
																	FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																	where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																	AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																	AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																	and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																	AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																	and `tbl_subject`.`subject_id` = '$subject_id'
																	and `tbl_offerred_subject`.`semester` = '$tt'
																	and  `tbl_offerred_subject`.`AY` = '$ayy2'
																	and  `tbl_offerred_subject`.`course_id` = '$curso'
																										";
													$final_subject_1 = mysql_query($final_subject) or die ("could not execute query 56");
													$row_final_subject = mysql_fetch_row($final_subject_1);

													$qqs = "SELECT distinct `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
															FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
															WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
															AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
															AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
															AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
															AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
															AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject[13]'
															AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
															and  `tbl_offerred_subject`.`course_id` = '$curso'
															";
													$qqqs = mysql_query($qqs) or die ("Could not execute query 90.");
													$qqqs_fetch = mysql_fetch_row($qqqs);									
													$num22 = mysql_num_rows($qqqs);



													$wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																									FROM tbl_enrolled_subject
																									WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject[13]'
																									AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																									AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																								";

													$wewewe = mysql_query($wewe) or die ("Could not execute query 94.");
													$roww = mysql_fetch_row($wewewe);
													$roww[0];							                                    

													$off_bal = $row_final_subject[7] - $roww[0];

														 if($num22 >=1){
															echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																								' . $row_final_subject[1].'</td>';
															 }
														 else{
															echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject[13]. '"/>
																									 ' . $row_final_subject[1].'</td>';
															}
																						
															echo '<td><center>'.$row_final_subject[2].'</center></td>';
															echo '<td><center>'.$row_final_subject[3].'</center></td>';
															echo '<td><center>'.$row_final_subject[4].'</center></td>';
															echo '<td><center>'.$row_final_subject[5].'</center></td>';
															echo '<td><center>'.$row_final_subject[6].'</center></td>';
															echo '<td><center>'.$row_final_subject[7].'</center></td>';
															echo '<td><center>'.$off_bal.'</center></td>';
																						

															$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																		FROM `tbl_instructor_load`
																		WHERE `offered_subject_id` = '$row_final_subject[13]'
																		GROUP BY `offered_subject_id`
																								";
															$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 56");
															$row_sche = mysql_fetch_row($sche_2);
															$days_ni = $row_sche['0'];

																echo '<td><center>'.$days_ni.' '.$row_final_subject[9]. $row_final_subject[10].'-'.$row_final_subject[11].$row_final_subject[12] .'</center></td>';
																echo '<td><center>'.$row_final_subject[8].'</center></td>';
																						
															if($num22 >=1){
																echo '<td><font color="red">'.'Already Added'.'</font></td>';
															 }
															else{
																echo '<td>'.'None'.'</td>';

															 }
															 
															 
															if($num22 >=1){
																						echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																					}
																					else{
																						echo '<td></td>';
																					}
															
															
															
															echo '</tr>';
															
															
															
															
													
											}
													}
									}

								}
								
								
								
								


													else{



													}


							}

									 	



							$none_sub = "SELECT `tbl_subject`.`subject_id`
												FROM tbl_curriculum, tbl_subject
												where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
												AND `tbl_curriculum`.`course_id` = '$curso'
												AND `tbl_subject`.`requisites_subject_id` = 'None'
											";
							$none_sub_1 = mysql_query($none_sub) or die ("could not execute query 65");
							while($row_none_sub = mysql_fetch_row($none_sub_1)){

								$subject_ko_none = $row_none_sub[0]; 
									 			
								$sub_count_none = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`
												FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
												where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko_none'
												and  `tbl_offerred_subject`.`course_id` = '$curso'
												";

								$query_count_none = mysql_query($sub_count_none) or die ("could not execute query in counting the subjects information 92");
								$row_query_count_none = mysql_num_rows($query_count_none);
						



								if($row_query_count_none > 0){

								$sub_counting_none = "SELECT `tbl_grades`.`remarks`, 
													`tbl_subject`.`subject_id`, 
													`tbl_subject`.`subject_code`, 
													`tbl_subject`.`description_title`, 
													`tbl_subject`.`requisites_subject_id`, 
													`tbl_subject`.`units_lab`, 
													`tbl_subject`.`units_lec`, 
													`tbl_enrolled_subject`.`enrolled_id`, 
													`tbl_enrolled_subject`.`offered_subject_id`, 
													`tbl_enrolled_subject`.`erollment_records_id`, 
													`tbl_enrollment_records`.`enrollment_record_id`, 
													`tbl_enrollment_records`.`student_id`, 
													`tbl_enrollment_records`.`assessment_id`, 
													`tbl_enrollment_records`.`term`, 
													`tbl_enrollment_records`.`AY`, 
													`tbl_offerred_subject`.`offerred_subject_id`, 
													`tbl_offerred_subject`.`subject_id`, 
													`tbl_offerred_subject`.`semester`, 
													`tbl_offerred_subject`.`AY`, 
													`tbl_subject`.`subject_id`, 
													`tbl_enrollment_records`.`student_id`

											FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades, tbl_curriculum
											where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
											and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
											and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
											and  `tbl_curriculum`.`subject_id` =  `tbl_subject`.`subject_id`
											and  `tbl_curriculum`.`subject_id` =  `tbl_offerred_subject`.`subject_id`
											and  `tbl_curriculum`.`course_id` =  `tbl_offerred_subject`.`course_id`
											and `tbl_offerred_subject`.`course_id` = '$curso'
											and  `tbl_curriculum`.`course_id` = '$curso'
											and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
											AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
											and `tbl_enrollment_records`.`student_id` = '$student_ko'
											and  `tbl_offerred_subject`.`subject_id` = '$subject_ko_none'
											
											
											";

							$query_counting_none = mysql_query($sub_counting_none) or die ("could not execute query in getting the subjects pre-requisite 58");
							$counting_fetch_none = mysql_fetch_row($query_counting_none);
							$rem_ko = $counting_fetch_none[0]; //echo '<br>';

								if($rem_ko == 'FAILED' OR $rem_ko == 'DROPPED'){
									$subject_id = $counting_fetch_none[1];
									$subject_codes = $counting_fetch_none[2];
									$subject_desc = $counting_fetch_none[3];
									$subject_req = $counting_fetch_none[4];
									
									
									$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									$counting_offer = $row_count_status[0];
									
									if($counting_offer > 0){


																	$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$subject_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'
																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 909");
																	$row_final_subject_none = mysql_fetch_row($final_subject_1_none);

																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				and  `tbl_offerred_subject`.`course_id` = '$curso'
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 232.");  
																		$qqqs_fetch = mysql_fetch_row($qqqs);																		
																	    $num22 = mysql_num_rows($qqqs);

																	     $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 453.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none[7] - $roww[0];
																	    echo '<tr>';
																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none[1].'</td>';
																		    }
																		    else{
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none[13]. '"/>
																	  				 ' . $row_final_subject_none[1].'</td>';
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 323");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none[9]. $row_final_subject_none[10].'-'.$row_final_subject_none[11].$row_final_subject_none[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																		if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}
																
																echo '</tr>';

									}		

															}





													
							else{


								
									$subject_id = $counting_fetch_none[1]; 
									$subject_codes = $counting_fetch_none[2];
									$subject_desc = $counting_fetch_none[3];
									$subject_req = $counting_fetch_none[4];
									
									
									$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									$counting_offer = $row_count_status[0];
									
									if($counting_offer > 0){

									$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$subject_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'
																						
																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 4444");
																	$row_final_subject_none = mysql_fetch_row($final_subject_1_none);

																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				and  `tbl_offerred_subject`.`course_id` = '$curso'
																				
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 3233.");
																		$qqqs_fetch = mysql_fetch_row($qqqs);
																	    $num22 = mysql_num_rows($qqqs);

																	   
																	    $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 779.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none[7] - $roww[0];




																	    echo '<tr>';


																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none[1].'</td>';
																		    }
																		    else{
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none[13]. '"/>
																	  				 ' . $row_final_subject_none[1].'</td>';
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 889");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none[9]. $row_final_subject_none[10].'-'.$row_final_subject_none[11].$row_final_subject_none[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																		
																		if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}
																			echo '</tr>';
																


																




									}



						}
													
													
			







				}
			else if($row_query_count_none == 0){



								$student_id=$_GET['studentId'];
								$curso=$_GET['course'];
								$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
											FROM  `tbl_ay` 
											WHERE  `ay_status` =  'ACTIVE'
											LIMIT 0 , 30";
											$resa = mysql_query($querya) or die ("Could not execute query2.");
											$my_resa = mysql_num_rows($resa);
											$row2a = mysql_fetch_row($resa);
											$ayy2 = $row2a[1];
											$tt = $row2a[2];

								
								$to_show_none = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_curriculum`.*
												FROM tbl_subject, tbl_curriculum, tbl_offerred_subject
												where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
												AND `tbl_curriculum`.`course_id` = '$curso'
												AND `tbl_offerred_subject`.`course_id` = '$curso'
												AND `tbl_offerred_subject`.`course_id` = `tbl_curriculum`.`course_id`
												AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
												and `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
												AND `tbl_curriculum`.`subject_id` = '$subject_ko_none'
												

												";
								$to_show_1_none = mysql_query($to_show_none) or die ("could not execute query 123");
								$fetch_none = mysql_fetch_row($to_show_1_none);

								$none_id = $fetch_none[0]; 
								$none_code = $fetch_none[1];
								$none_des = $fetch_none[2];
								$none_requisites = $fetch_none[3];
								
								
								$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$none_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									
							
									$counting_offer = $row_count_status[0]; 
									
									if($counting_offer > 0){

											$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$none_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'


																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 565");
																	while($row_final_subject_none2 = mysql_fetch_row($final_subject_1_none)){

																		 $row_final_subject_none2[1];
																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none2[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 895.");                    
																	    $num22 = mysql_num_rows($qqqs);

																	    $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none2[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 4546.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none2[7] - $roww[0];


																		 $ppp = "SELECT * FROM `tbl_enrollment_records` WHERE `student_id`= '$student_id' and `term`= '$tt' and `AY` = '$ayy2'";
																		  $ppp2 = mysql_query($ppp);
																		  $pp_num = mysql_num_rows($ppp2);


																	   echo '<tr>';

																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none2[1].'</td>';
																		    }
																		    else{

																		    	if($pp_num==1){

																		    		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none2[13]. '"/>
																	  				 ' . $row_final_subject_none2[1].'</td>';

																		    	}

																		    	else{

																		    		echo '<td><input type="checkbox" disabled name="selector[]" id="selector[]" value="'.$row_final_subject_none2[13]. '"/>
																	  				 ' . $row_final_subject_none2[1].'</td>';


																		    	}
																		    	
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none2[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none2[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 232");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none2[9]. $row_final_subject_none2[10].'-'.$row_final_subject_none2[11].$row_final_subject_none2[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																	
																	
																	if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$row_final_subject_none2[13].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">'.$row_final_subject_none2[13].'</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}



																echo '<tr>';
																


																	}

									}
									
									else{
										
									}


							}
							}
							
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

		 }

 }



 else{
					  
	$curso=$_GET['course'];
	$student_ko  = $_GET['studentId'];
	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
								FROM  `tbl_ay` 
								WHERE  `ay_status` =  'ACTIVE'
								LIMIT 0 , 30";
						$resa = mysql_query($querya) or die ("Could not execute query2.");
						$my_resa = mysql_num_rows($resa);
						$row2a = mysql_fetch_row($resa);
						$ayy2 = $row2a[1];
						$tt = $row2a[2];
									 	
						$curri = "SELECT `subject_id` FROM `tbl_curriculum` WHERE `course_id` = '$curso' ";
						$curri_1 = mysql_query($curri) or die ("could not execute query for curriculum");
						while($row_curri = mysql_fetch_row($curri_1)){
						$subject_ko = $row_curri[0];
						$sub_count = "SELECT distinct `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`,  `tbl_grades`.*, `tbl_enrolled_subject`.*
										FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
										where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
										and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
										and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
										and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
										AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										and `tbl_enrollment_records`.`student_id` = '$student_ko'
										and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
										
									";

							$query_count = mysql_query($sub_count) or die ("could not execute query in counting the subjects information 404");
							
							$row_query_count = mysql_num_rows($query_count);
							
							if($row_query_count > 0){
								$sub_counting = "SELECT `tbl_subject`.`subject_code`
												FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
												where (`tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
												and  `tbl_offerred_subject`.`course_id` = '$coursess'
												AND `tbl_grades`.`remarks` = 'PASSED')
												OR 
												(`tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko'
												and  `tbl_offerred_subject`.`course_id` = '$coursess'
												AND `tbl_grades`.`remarks` = 'COMPLETE')
												
												";

									$query_counting = mysql_query($sub_counting) or die ("could not execute query in getting the subjects pre-requisite 34");
									$counting_fetch = mysql_fetch_row($query_counting);
									
									
											$req_ko = $counting_fetch[0];
											
											$to_show = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`
														FROM tbl_subject, tbl_curriculum, tbl_offerred_subject
														where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
														and  `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
														and  `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
														AND `tbl_curriculum`.`course_id` = '$curso'
														AND `tbl_curriculum`.`course_id` = `tbl_offerred_subject`.`course_id`
														AND `tbl_subject`.`requisites_subject_id` = '$req_ko'
														and  `tbl_offerred_subject`.`course_id` = '$curso'
														";
											$to_show_1 = mysql_query($to_show) or die ("could not execute query 26");
											$show_row_count = mysql_num_rows($to_show_1);
											
											if($show_row_count > 0){
													while($row_to_show = mysql_fetch_row($to_show_1)){
													$subject_id = $row_to_show[0];
													$subject_codes = $row_to_show[1];
													$subject_desc = $row_to_show[2];
													$subject_req = $row_to_show[3];
													echo '<tr>';
																			
													$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
													$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
													$row_count_status = mysql_fetch_row($count_status_1);
													$counting_offer = $row_count_status[0];
													
													if($counting_offer > 0){
														$curso=$_GET['course'];
														$final_subject = "SELECT  distinct `tbl_subject`.`subject_id`, 
																	`tbl_subject`.`subject_code`, 
																	`tbl_subject`.`description_title`, 
																	`tbl_offerred_subject`.`section`, 
																	`tbl_subject`.`units_lec`, 
																	`tbl_subject`.`units_lab`, 
																	`tbl_subject`.`requisites_subject_id`, 
																	`tbl_offerred_subject`.`slots`, 
																	`tbl_room`.`building_name_and_room_number`, 
																	`tbl_instructor_load`.`starttime`, 
																	`tbl_instructor_load`.`starttime_extension`, 
																	`tbl_instructor_load`.`endtime`, 
																	`tbl_instructor_load`.`endtime_extension`, 
																	`tbl_offerred_subject`.`offerred_subject_id`
																	FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																	where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																	AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																	AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																	and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																	AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																	and `tbl_subject`.`subject_id` = '$subject_id'
																	and `tbl_offerred_subject`.`semester` = '$tt'
																	and  `tbl_offerred_subject`.`AY` = '$ayy2'
																	and  `tbl_offerred_subject`.`course_id` = '$curso'
																										";
													$final_subject_1 = mysql_query($final_subject) or die ("could not execute query 56");
													$row_final_subject = mysql_fetch_row($final_subject_1);

													$qqs = "SELECT distinct `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
															FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
															WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
															AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
															AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
															AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
															AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
															AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject[13]'
															AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
															and  `tbl_offerred_subject`.`course_id` = '$curso'
															";
													$qqqs = mysql_query($qqs) or die ("Could not execute query 90.");
													$qqqs_fetch = mysql_fetch_row($qqqs);									
													$num22 = mysql_num_rows($qqqs);



													$wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																									FROM tbl_enrolled_subject
																									WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject[13]'
																									AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																									AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																								";

													$wewewe = mysql_query($wewe) or die ("Could not execute query 94.");
													$roww = mysql_fetch_row($wewewe);
													$roww[0];							                                    

													$off_bal = $row_final_subject[7] - $roww[0];

														 if($num22 >=1){
															echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																								' . $row_final_subject[1].'</td>';
															 }
														 else{
															echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject[13]. '"/>
																									 ' . $row_final_subject[1].'</td>';
															}
																						
															echo '<td><center>'.$row_final_subject[2].'</center></td>';
															echo '<td><center>'.$row_final_subject[3].'</center></td>';
															echo '<td><center>'.$row_final_subject[4].'</center></td>';
															echo '<td><center>'.$row_final_subject[5].'</center></td>';
															echo '<td><center>'.$row_final_subject[6].'</center></td>';
															echo '<td><center>'.$row_final_subject[7].'</center></td>';
															echo '<td><center>'.$off_bal.'</center></td>';
																						

															$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																		FROM `tbl_instructor_load`
																		WHERE `offered_subject_id` = '$row_final_subject[13]'
																		GROUP BY `offered_subject_id`
																								";
															$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 56");
															$row_sche = mysql_fetch_row($sche_2);
															$days_ni = $row_sche['0'];

																echo '<td><center>'.$days_ni.' '.$row_final_subject[9]. $row_final_subject[10].'-'.$row_final_subject[11].$row_final_subject[12] .'</center></td>';
																echo '<td><center>'.$row_final_subject[8].'</center></td>';
																						
															if($num22 >=1){
																echo '<td><font color="red">'.'Already Added'.'</font></td>';
															 }
															else{
																echo '<td>'.'None'.'</td>';

															 }
															 
															 
															if($num22 >=1){
																						echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																					}
																					else{
																						echo '<td></td>';
																					}
															
															
															
															echo '</tr>';
															
															
															
															
													
											}
													}
									}

								}
								
								
								
								


													else{



													}


							}

									 	



							$none_sub = "SELECT `tbl_subject`.`subject_id`
												FROM tbl_curriculum, tbl_subject
												where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
												AND `tbl_curriculum`.`course_id` = '$curso'
												AND `tbl_subject`.`requisites_subject_id` = 'None'
											";
							$none_sub_1 = mysql_query($none_sub) or die ("could not execute query 65");
							while($row_none_sub = mysql_fetch_row($none_sub_1)){

								$subject_ko_none = $row_none_sub[0]; 
									 			
								$sub_count_none = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`
												FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades
												where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
												and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
												and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
												and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
												AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
												and `tbl_enrollment_records`.`student_id` = '$student_ko'
												and  `tbl_offerred_subject`.`subject_id` = '$subject_ko_none'
												and  `tbl_offerred_subject`.`course_id` = '$curso'
												";

								$query_count_none = mysql_query($sub_count_none) or die ("could not execute query in counting the subjects information 92");
								$row_query_count_none = mysql_num_rows($query_count_none);
						



								if($row_query_count_none > 0){

								$sub_counting_none = "SELECT `tbl_grades`.`remarks`, 
													`tbl_subject`.`subject_id`, 
													`tbl_subject`.`subject_code`, 
													`tbl_subject`.`description_title`, 
													`tbl_subject`.`requisites_subject_id`, 
													`tbl_subject`.`units_lab`, 
													`tbl_subject`.`units_lec`, 
													`tbl_enrolled_subject`.`enrolled_id`, 
													`tbl_enrolled_subject`.`offered_subject_id`, 
													`tbl_enrolled_subject`.`erollment_records_id`, 
													`tbl_enrollment_records`.`enrollment_record_id`, 
													`tbl_enrollment_records`.`student_id`, 
													`tbl_enrollment_records`.`assessment_id`, 
													`tbl_enrollment_records`.`term`, 
													`tbl_enrollment_records`.`AY`, 
													`tbl_offerred_subject`.`offerred_subject_id`, 
													`tbl_offerred_subject`.`subject_id`, 
													`tbl_offerred_subject`.`semester`, 
													`tbl_offerred_subject`.`AY`, 
													`tbl_subject`.`subject_id`, 
													`tbl_enrollment_records`.`student_id`

											FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades, tbl_curriculum
											where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
											and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
											and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
											and  `tbl_curriculum`.`subject_id` =  `tbl_subject`.`subject_id`
											and  `tbl_curriculum`.`subject_id` =  `tbl_offerred_subject`.`subject_id`
											and  `tbl_curriculum`.`course_id` =  `tbl_offerred_subject`.`course_id`
											and `tbl_offerred_subject`.`course_id` = '$curso'
											and  `tbl_curriculum`.`course_id` = '$curso'
											and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
											AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
											and `tbl_enrollment_records`.`student_id` = '$student_ko'
											and  `tbl_offerred_subject`.`subject_id` = '$subject_ko_none'
											
											
											";

							$query_counting_none = mysql_query($sub_counting_none) or die ("could not execute query in getting the subjects pre-requisite 58");
							$counting_fetch_none = mysql_fetch_row($query_counting_none);
							$rem_ko = $counting_fetch_none[0]; //echo '<br>';

								if($rem_ko == 'FAILED' OR $rem_ko == 'DROPPED'){
									$subject_id = $counting_fetch_none[1];
									$subject_codes = $counting_fetch_none[2];
									$subject_desc = $counting_fetch_none[3];
									$subject_req = $counting_fetch_none[4];
									
									
									$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									$counting_offer = $row_count_status[0];
									
									if($counting_offer > 0){


																	$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$subject_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'
																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 909");
																	$row_final_subject_none = mysql_fetch_row($final_subject_1_none);

																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				and  `tbl_offerred_subject`.`course_id` = '$curso'
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 232.");  
																		$qqqs_fetch = mysql_fetch_row($qqqs);																		
																	    $num22 = mysql_num_rows($qqqs);

																	     $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 453.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none[7] - $roww[0];
																	    echo '<tr>';
																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none[1].'</td>';
																		    }
																		    else{
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none[13]. '"/>
																	  				 ' . $row_final_subject_none[1].'</td>';
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 323");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none[9]. $row_final_subject_none[10].'-'.$row_final_subject_none[11].$row_final_subject_none[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																		if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}
																
																echo '</tr>';

									}		

															}





													
							else{


								
									$subject_id = $counting_fetch_none[1]; 
									$subject_codes = $counting_fetch_none[2];
									$subject_desc = $counting_fetch_none[3];
									$subject_req = $counting_fetch_none[4];
									
									
									$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$subject_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									$counting_offer = $row_count_status[0];
									
									if($counting_offer > 0){

									$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$subject_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'
																						
																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 4444");
																	$row_final_subject_none = mysql_fetch_row($final_subject_1_none);

																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`enrolled_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				and  `tbl_offerred_subject`.`course_id` = '$curso'
																				
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 3233.");
																		$qqqs_fetch = mysql_fetch_row($qqqs);
																	    $num22 = mysql_num_rows($qqqs);

																	   
																	    $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 779.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none[7] - $roww[0];




																	    echo '<tr>';


																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none[1].'</td>';
																		    }
																		    else{
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none[13]. '"/>
																	  				 ' . $row_final_subject_none[1].'</td>';
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 889");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none[9]. $row_final_subject_none[10].'-'.$row_final_subject_none[11].$row_final_subject_none[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																		
																		if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$qqqs_fetch[1].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">Delete</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}
																			echo '</tr>';
																


																




									}



						}
													
													
			







				}
			else if($row_query_count_none == 0){



								$student_id=$_GET['studentId'];
								$curso=$_GET['course'];
								$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
											FROM  `tbl_ay` 
											WHERE  `ay_status` =  'ACTIVE'
											LIMIT 0 , 30";
											$resa = mysql_query($querya) or die ("Could not execute query2.");
											$my_resa = mysql_num_rows($resa);
											$row2a = mysql_fetch_row($resa);
											$ayy2 = $row2a[1];
											$tt = $row2a[2];

								
								$to_show_none = "SELECT `tbl_subject`.`subject_id`, `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_curriculum`.*
												FROM tbl_subject, tbl_curriculum, tbl_offerred_subject
												where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
												AND `tbl_curriculum`.`course_id` = '$curso'
												AND `tbl_offerred_subject`.`course_id` = '$curso'
												AND `tbl_offerred_subject`.`course_id` = `tbl_curriculum`.`course_id`
												AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
												and `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
												AND `tbl_curriculum`.`subject_id` = '$subject_ko_none'
												

												";
								$to_show_1_none = mysql_query($to_show_none) or die ("could not execute query 123");
								$fetch_none = mysql_fetch_row($to_show_1_none);

								$none_id = $fetch_none[0]; 
								$none_code = $fetch_none[1];
								$none_des = $fetch_none[2];
								$none_requisites = $fetch_none[3];
								
								
								$count_status = "SELECT count(*) 
																	FROM `tbl_offerred_subject`  
																	WHERE `subject_id` ='$none_id'
																	AND `semester`= '$tt'
																	AND `AY` = '$ayy2'
																	";
									$count_status_1 = mysql_query($count_status) or die ("could not execute query 48");
									$row_count_status = mysql_fetch_row($count_status_1);
									
							
									$counting_offer = $row_count_status[0]; 
									
									if($counting_offer > 0){

											$final_subject_none = "SELECT  distinct `tbl_subject`.`subject_id`, 
																										`tbl_subject`.`subject_code`, 
																										`tbl_subject`.`description_title`, 
																										`tbl_offerred_subject`.`section`, 
																										`tbl_subject`.`units_lec`, 
																										`tbl_subject`.`units_lab`, 
																										`tbl_subject`.`requisites_subject_id`, 
																										`tbl_offerred_subject`.`slots`, 
																										`tbl_room`.`building_name_and_room_number`, 
																										`tbl_instructor_load`.`starttime`, 
																										`tbl_instructor_load`.`starttime_extension`, 
																										`tbl_instructor_load`.`endtime`, 
																										`tbl_instructor_load`.`endtime_extension`, 
																										`tbl_offerred_subject`.`offerred_subject_id`
																						FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_instructor_load, tbl_curriculum
																						where `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
																						AND `tbl_offerred_subject`.`subject_id` = `tbl_curriculum`.`subject_id`
																						and `tbl_instructor_load`.`offered_subject_id`= `tbl_offerred_subject`.`offerred_subject_id`
																						AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
																						and `tbl_subject`.`subject_id` = '$none_id'
																						and `tbl_offerred_subject`.`semester` = '$tt'
																						and  `tbl_offerred_subject`.`AY` = '$ayy2'
																						and  `tbl_offerred_subject`.`course_id` = '$curso'


																						";
																	$final_subject_1_none = mysql_query($final_subject_none) or die ("could not execute query 565");
																	while($row_final_subject_none2 = mysql_fetch_row($final_subject_1_none)){

																		 $row_final_subject_none2[1];
																		$qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id`  
																				FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_subject, tbl_enrollment_records
																				WHERE  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
																				AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
																				AND  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
																				AND  `tbl_enrolled_subject`.`offered_term` =  '$tt'
																				AND  `tbl_enrolled_subject`.`Offered_AY` =  '$ayy2'
																				AND  `tbl_offerred_subject`.`offerred_subject_id` =  '$row_final_subject_none2[13]'
																				AND  `tbl_enrollment_records`.`student_id` =  '$student_ko'
																				
																				";
																  		$qqqs = mysql_query($qqs) or die ("Could not execute query 895.");                    
																	    $num22 = mysql_num_rows($qqqs);

																	    $wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
																					FROM tbl_enrolled_subject
																					WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$row_final_subject_none2[13]'
																					AND `tbl_enrolled_subject`.`offered_term` = '$tt'
																					AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

																				";

																		$wewewe = mysql_query($wewe) or die ("Could not execute query 4546.");
																		$roww = mysql_fetch_row($wewewe);
																		$roww[0];							                                    

																		$off_bal = $row_final_subject_none2[7] - $roww[0];


																		 $ppp = "SELECT * FROM `tbl_enrollment_records` WHERE `student_id`= '$student_id' and `term`= '$tt' and `AY` = '$ayy2'";
																		  $ppp2 = mysql_query($ppp);
																		  $pp_num = mysql_num_rows($ppp2);


																	   echo '<tr>';

																	     if($num22 >=1){
																		    	echo '<td><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
																	  			' . $row_final_subject_none2[1].'</td>';
																		    }
																		    else{

																		    	if($pp_num==1){

																		    		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$row_final_subject_none2[13]. '"/>
																	  				 ' . $row_final_subject_none2[1].'</td>';

																		    	}

																		    	else{

																		    		echo '<td><input type="checkbox" disabled name="selector[]" id="selector[]" value="'.$row_final_subject_none2[13]. '"/>
																	  				 ' . $row_final_subject_none2[1].'</td>';


																		    	}
																		    	
																		    }
																		
																		echo '<td><center>'.$row_final_subject_none2[2].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[3].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[4].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[5].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[6].'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[7].'</center></td>';
																		echo '<td><center>'.$off_bal.'</center></td>';
																		

																		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
																				FROM `tbl_instructor_load`
																				WHERE `offered_subject_id` = '$row_final_subject_none2[13]'
																				GROUP BY `offered_subject_id`
																				";
																		$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information 232");
																		$row_sche = mysql_fetch_row($sche_2);
																		$days_ni = $row_sche['0'];

																		echo '<td><center>'.$days_ni.' '.$row_final_subject_none2[9]. $row_final_subject_none2[10].'-'.$row_final_subject_none2[11].$row_final_subject_none2[12] .'</center></td>';
																		echo '<td><center>'.$row_final_subject_none2[8].'</center></td>';
																		
																			if($num22 >=1){
																		    	echo '<td><font color="red">'.'Already Added'.'</font></td>';
																		    	
																			
																		    }
																		    else{
																		    	echo '<td>'.'None'.'</td>';

																		    }
																	
																	
																	if($num22 >=1){
																		echo '<td><a href="delete_student_subject.php?id='.$row_final_subject_none2[13].'&studentId='.$_GET['studentId'].'&course='.$_GET['course'].'">'.$row_final_subject_none2[13].'</a></td>';
																	}
																	else{
																		echo '<td></td>';
																	}



																echo '<tr>';
																


																	}

									}
									
									else{
										
									}


							}
							}
							

					  		
					  }

				  		
				  	?>
				  </tbody>
				  
				</table><br>
				
				<div class="btn-group">
				  <a href="evaluation.php" align="left" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
				  <?php 
				  $student_id=$_GET['studentId'];
								$curso=$_GET['course'];
								$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
											FROM  `tbl_ay` 
											WHERE  `ay_status` =  'ACTIVE'
											LIMIT 0 , 30";
											$resa = mysql_query($querya) or die ("Could not execute query2.");
											$my_resa = mysql_num_rows($resa);
											$row2a = mysql_fetch_row($resa);
											$ayy2 = $row2a[1];
											$tt = $row2a[2];

				  $ppp = "SELECT * FROM `tbl_enrollment_records` WHERE `student_id`= '$student_id' and `term`= '$tt' and `AY` = '$ayy2'";
				  $ppp2 = mysql_query($ppp) or die ("could not execute query 543");
				  $pp_num = mysql_num_rows($ppp2);

				  if($pp_num >= 1){

				  	
					
					
								$stu_id =  $_GET['studentId'];
								$course_id = $_SESSION['course'];


								$imong_course = "SELECT `course_id` FROM `tbl_student` WHERE `student_id` = '$stu_id'";
								$imong_course_q = mysql_query($imong_course);
								$row_imong_course = mysql_fetch_row($imong_course_q);
								$row_imong_course[0];
								
								if($row_imong_course[0] == $course_id){

									echo '<a href="preview_pef2.php?studentId='.$stu_id.'&term='.$tt.'&ay='.$ayy2.'" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print PEF</a>';

									echo '<button type="submit" class="btn btn-success" align="left"  name="Add"><span class="glyphicon glyphicon-plus-sign"></span> Assign Selected</button>';
						  			echo '<button type="submit" class="btn btn-danger" name="delete"  data-toggle="modal" data-target="#delete_mandatory"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>

							  		<div class="modal fade" id="delete_mandatory" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-danger">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Warning Message</h4>
									        </div>
									        <div class="modal-body" >
									          <p>Are you sure you want to delete the selected subjects?.</p>
									        </div>
									        <div class="modal-footer">
									          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>';

								}
								else{
									
									echo '<button type="submit" class="btn btn-success" align="left"  name="Add"><span class="glyphicon glyphicon-plus-sign"></span> Assign Selected</button>';
						  			echo '<button type="submit" disabled class="btn btn-danger" name="delete"  data-toggle="modal" data-target="#delete_mandatory"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>

							  		<div class="modal fade" id="delete_mandatory" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-danger">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Warning Message</h4>
									        </div>
									        <div class="modal-body" >
									          <p>Are you sure you want to delete the selected subjects?.</p>
									        </div>
									        <div class="modal-footer">
									          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>';

									  echo '<a href="preview_pef.php?studentId='.$stu_id.'&term='.$tt.'&ay='.$ayy2.'" disabled class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print PEF</a>**You dont have any privillage to assign, delete and print PEF. Please Check the course.';

								}
								

								


							}
							
				  
					?>
					
					</form>
					<?php
				  if($pp_num == 0){

				  	$student = new student();
					$cur = $student->single_student($student_id);
					$course = new Course();
					$studcourse = $course->single_course($cur->course_id);
					
					if($studcourse->course_abb == $_SESSION['course']){
						
						
						
						
				  	echo '<button type="submit" class="btn btn-success" name="enroll" data-toggle="modal" data-target="#enrollment"><span class="glyphicon glyphicon-tag"></span> Enroll</button>';
					
				    			?><div class="modal fade" id="enrollment" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title"><center><strong>Confirm</strong></center></h4>
							        </div>
							        <div class="modal-body" >
									
									<form class="form-horizontal well span4" action="#.php" method="POST">
									
							          <p>Are you sure you want to enroll this student with following Details:.</p>
									  
									  <table class="tftable" border="1">
										<tr>
											<td align="right" width = "20%"><strong>Student ID: </strong></td>
											<td><font color="green"><?php echo $cur->student_id; ?></font></td>
										</tr>
										
										<tr>
											<td align="right" width = "20%"><strong>Student Name: </strong></td>
											<td><font color="green"><?php echo  $cur->lname.', '.$cur->fname.' '.$cur->mname; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Course: </strong></td>
											<td><font color="green"><?php echo $studcourse->course_abb.'-'.$studcourse->Major.', '.$studcourse->AY; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Term: </strong></td>
											<td><font color="green"><?php echo $tt;  ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Academin Year: </strong></td>
											<td><font color="green"><?php echo $ayy2; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Status: </strong></td>
											<td><font color="green">Continuing</font></td>
										</tr>

									  
									  
									  </table>
									
									  
							        </div>
							        <div class="modal-footer">
							          <button name="enrollment" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Confirm & Enroll</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>
									
							      </div>
							      </form>
							    </div>
							  </div>
							  
							  <?php
						
						
						
						
						
						
						
					}
					
					
					
					else{
						
						
						
						
						
				  	echo '<button type="submit" disabled class="btn btn-success" name="enroll" data-toggle="modal" data-target="#enrollment"><span class="glyphicon glyphicon-tag"></span> Enroll</button>**You dont any privillage to enroll this student. Please check the course.';
					
				    			?><div class="modal fade" id="enrollment" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title"><center><strong>Confirm</strong></center></h4>
							        </div>
							        <div class="modal-body" >
									
									<form class="form-horizontal well span4" action="#.php" method="POST">
									
							          <p>Are you sure you want to enroll this student with following Details:.</p>
									  
									  <table class="tftable" border="1">
										<tr>
											<td align="right" width = "20%"><strong>Student ID: </strong></td>
											<td><font color="green"><?php echo $cur->student_id; ?></font></td>
										</tr>
										
										<tr>
											<td align="right" width = "20%"><strong>Student Name: </strong></td>
											<td><font color="green"><?php echo  $cur->lname.', '.$cur->fname.' '.$cur->mname; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Course: </strong></td>
											<td><font color="green"><?php echo $studcourse->course_abb.'-'.$studcourse->Major.', '.$studcourse->AY; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Term: </strong></td>
											<td><font color="green"><?php echo $tt;  ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Academin Year: </strong></td>
											<td><font color="green"><?php echo $ayy2; ?></font></td>
										</tr>
										
										<tr>
											<td align="right"  width = "20%"><strong>Status: </strong></td>
											<td><font color="green">Continuing</font></td>
										</tr>

									  
									  
									  </table>
									
									  
							        </div>
							        <div class="modal-footer">
							          <button name="enrollment" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Confirm & Enroll</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>
									
							      </div>
							      </form>
							    </div>
							  </div>
							  
							  <?php
						
						
						
						
						
						
					}
					
					
					
					
					


				  }



				   ?>
				  
				</div>
				
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



