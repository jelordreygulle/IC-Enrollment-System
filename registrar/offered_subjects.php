<?php
require_once("includes/initialize.php");
include 'header-reports.php';


	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
				FROM  `tbl_ay` 
				WHERE  `ay_status` =  'Active'
				LIMIT 0 , 30";
	$resa = mysql_query($querya) or die ("Could not execute query2.");
	$row2a = mysql_fetch_row($resa);
	$ayy2 = $row2a[1];
	$tt = $row2a[2];



							                                    

$session_course = $_SESSION['course'];

?>

<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
</style>




<div class="container">
 	
		<div class="rows">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-6">
		  <form class="form-horizontal span4" action="" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Select Query Option to view Offerred Subject</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">Academic Year:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="ay" id="ay">
				                 	<option value=""></option>
				                  	<?php

				                  	
									$mydb->setQuery("SELECT DISTINCT  `ay` 
														FROM  `tbl_ay` ");
									ay_loadresult();
									

				                  	function ay_loadresult(){
								  		global $mydb;
								  		$cur = $mydb->loadResultlist();
										foreach ($cur as $result) {
									  		

									  		echo '<option value="'. $result->ay.'">'.$result->ay .'</option>';
									  		
									  	
								  		}
								  	} 

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>
				         
				          <div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">Term:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="term" id="term">
				                 	<option value=""></option>
				                 	<option value="First Semester">First Semester</option>
				                 	<option value="Second Semester">Second Semester</option>
				                 	<option value="Summer">Summer</option>
				                  	

										
									</select>	
				                </div>

				            </div>

				          </div>
				         
				  			<div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">Course:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="course" id="course">
				                 	<option value=""></option>
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code .', '.$course->ay.'</option>';
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
									    <button type="submit" name="search" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
									     <a href="offerred_subject.php" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</a>
									    				  
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









<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
							
				<table class="tftable">
					<caption><h3 align="left">Subject Offering</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="10%" >Subj. Code</th>
				  		<th width="20%" >Descriptive Title</th>
				  		<th width="5%" >Unit(lec)</th>
				  		<th width="5%" >Unit(lab)</th>
				  		<th width="5%" >Section</th>
				  		<th width="20%" >Course</th>
				  		<th width="5%" >More</th>
				  		<th width="10%" >Status</th>
				  		<th width="10%" >Instructor</th>
				  		<th width="10%" >Option</th>
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
						
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;	
					$per_page = 25;
					$countEmp = new SubjPagination_offerred();
					$total_count = $countEmp->count_allrecords2();					
					$pagination = new SubjPagination_offerred($current_page, $per_page, $total_count);
				  	  @$subjid =  $_GET['subjectid'];
				  	  @$subjcode =  $_GET['subjectcode'];
				  	  
				  	  
				  	 
					  		
				@$ay 		 =  $_POST['ay'];
				@$term 	 =  $_POST['term'];
				@$course 	 =  $_POST['course'];
				  	  
				  	  If (isset($_POST['search'])){
				  	  	
				  	  	if ($term == ''  AND $course==''  AND $ay == ''){

				  	  		$mydb->setQuery("SELECT `tbl_offerred_subject`.`AY`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject` . *  , `tbl_course` . * , `tbl_subject` . *, `tbl_offerred_subject`.`AY` as ay_ko, `tbl_offerred_subject`.`semester` as term_ko, `tbl_offerred_subject`.`course_id` as course_niya
											FROM tbl_subject, tbl_offerred_subject,  tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`									
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`AY` = '$ayy2'
											AND `tbl_offerred_subject`.`course_id` = $session_course

							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();



				  	  	}

				  	  	else if($term != '' AND $ay != ''  AND $course==''  ){
				  	  		$mydb->setQuery("SELECT `tbl_offerred_subject`.`AY`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject` . *  , `tbl_course` . * , `tbl_subject` . *, `tbl_offerred_subject`.`AY` as ay_ko, `tbl_offerred_subject`.`semester` as term_ko, `tbl_offerred_subject`.`course_id` as course_niya
											FROM tbl_subject, tbl_offerred_subject,  tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`									
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											AND `tbl_offerred_subject`.`semester` = '$term'
											AND `tbl_offerred_subject`.`AY` = '$ay'

							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();

				  	  	}

				  	  	else if($term == '' AND $ay == ''  AND $course !=''  ){
				  	  		$mydb->setQuery("SELECT `tbl_offerred_subject`.`AY`, `tbl_offerred_subject`.`semester`,`tbl_offerred_subject` . *  , `tbl_course` . * , `tbl_subject` . *, `tbl_offerred_subject`.`AY` as ay_ko, `tbl_offerred_subject`.`semester` as term_ko, `tbl_offerred_subject`.`course_id` as course_niya
											FROM tbl_subject, tbl_offerred_subject,  tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`									
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											and `tbl_offerred_subject`.`course_id` = '$course'

							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();

				  	  	}
				  	  	else{
				  	  	$mydb->setQuery("SELECT `tbl_offerred_subject`.`AY`, `tbl_offerred_subject`.`semester`,`tbl_offerred_subject` . *  , `tbl_course` . * , `tbl_subject` . *, `tbl_offerred_subject`.`AY` as ay_ko, `tbl_offerred_subject`.`semester` as term_ko, `tbl_offerred_subject`.`course_id` as course_niya
											FROM tbl_subject, tbl_offerred_subject,  tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`									
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											AND `tbl_offerred_subject`.`semester` = '$term'
											AND `tbl_offerred_subject`.`AY` = '$ay'
											AND `tbl_offerred_subject`.`course_id` = '$course'

							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}  ");
						  	loadresult();

				  	  }
				  	  
				  	  
				  	  }
				  	  else{
				  	  	$mydb->setQuery("SELECT `tbl_offerred_subject`.`AY`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject` . *  , `tbl_course` . * , `tbl_subject` . *, `tbl_offerred_subject`.`AY` as ay_ko, `tbl_offerred_subject`.`semester` as term_ko, `tbl_offerred_subject`.`course_id` as course_niya
											FROM tbl_subject, tbl_offerred_subject,  tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`									
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`AY` = '$ayy2'

							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();

				  	  }



					 

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
								

									$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
												FROM  `tbl_ay` 
												WHERE  `ay_status` =  'Active'
												LIMIT 0 , 30";
									$resa = mysql_query($querya) or die ("Could not execute query2.");
									$row2a = mysql_fetch_row($resa);
									$ayy2 = $row2a[1];
									$tt = $row2a[2];
									$num_resa = mysql_num_rows($resa);

						  		echo '<tr>';

						  
						  			echo '<td>' . $result->subject_code.'</td>';

						  		

						  		
						  		

						  		echo '<td>'. $result->description_title.'</td>';
						  		echo '<td>'. $result->units_lec.'</td>';
						  		echo '<td>'. $result->units_lab.'</td>';
						  		echo '<td>'. $result->section.'</td>';
						  		echo '<td>'. $result->course_abb.' - '.$result->Major.'</td>';
						  		echo '<td><a href = "offered_subject_details.php?offeredsubjectId='.$result->offerred_subject_id.'" >Details</a></td>';

						  		$mine = "SELECT * FROM `tbl_instructor_load` WHERE `offered_subject_id` = '$result->offerred_subject_id'
											AND `AY` = '$result->ay_ko'
											AND `term` = '$result->term_ko'
											";
									$mineq = mysql_query($mine) or die ("Coud not execute query in getting the instructors load information");
									$mine_nq = mysql_num_rows($mineq);
									

									if($mine_nq > 0){

										$row_mine_instructor = mysql_fetch_row($mineq);
										$load_instructor_id = $row_mine_instructor[2];

										$fac = "SELECT `name` FROM `tbl_instructor` WHERE `instructor_id`= '$load_instructor_id'";
										$facu = mysql_query($fac) or die ("the query for getting the name of the instructor is unsuccessful. Please contact you administrator");
										$row_fac = mysql_fetch_row($facu);
										$facu_name = $row_fac[0];

										echo '<td><font color="green">Assigned</font></td>';
						  				echo '<td>'.$facu_name.'</td>';
						  			?>
						  				<td><a data-toggle="modal" data-target="#add_grades">View Enrolled Students</a> 





						  				<div class="modal fade" id="add_grades" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-info">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <strong><center><h4 class="modal-title">Enrolled Students</h4></center></strong>
									        </div>
									        <div class="modal-body" >

									      
											<form class="form-horizontal well span6" action="preview_master_list.php?offered_subject=<?php echo $result->offerred_subject_id; ?>&instructorID=<?php echo $load_instructor_id; ?>" method="POST">
										
									          <table class="tftable3">
									        	<tr>
									        		<th width="15%">Student ID</th>
													<th width="30%">Name</th>
											  		<th width="55%">Course</th>
											 	</tr>

											<?php
											 $mineq = "SELECT  `tbl_course`.`course_code` ,  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ',  `tbl_student`.`mname` ) AS  'Name'
												FROM tbl_course, tbl_student, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject
												WHERE  `tbl_course`.`course_id` =  `tbl_offerred_subject`.`course_id` 
												AND  `tbl_course`.`course_id` =  `tbl_student`.`course_id` 
												AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
												AND  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
												AND  `tbl_enrollment_records`.`student_id` =  `tbl_student`.`student_id` 
												AND  `tbl_offerred_subject`.`offerred_subject_id` = '$result->offerred_subject_id' ";
											$my_mine = mysql_query($mineq);
											while($mine_row = mysql_fetch_row($my_mine)){?>

												<tr>
									        		<td><?php echo $mine_row[1]; ?></th>
													<td><?php echo $mine_row[2]; ?></th>
											  		<td><?php echo $mine_row[0]; ?></th>
											 	</tr>

											 	<?php
											} 
											echo '<tr>';
									        		echo '<td colspan="2"></td>';
													echo '<td></td>';
											  		
											echo '</tr>';

											$num_mine = mysql_num_rows($my_mine);

											echo '<tr>';
									        		echo '<td colspan="2"><center><strong><font color="red">Total Enrolled Student</font></strong></center></td>';
													echo '<td><center><strong><font color="red">'.$num_mine.'</font></strong></center></td>';
											  		
											echo '</tr>';




											?>
										
											 
											</table>	   


									        
									        <div class="modal-footer">
									          <button class="btn btn-primary" name="save" type="submit" ><span class="glyphicon glyphicon-print"></span> Print This</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
									        </div>

									        </div>
											</form>
									      </div>
									      
									    </div>
									  </div>






									  </td>












						  			<?php

									}

									else{

										if($_SESSION['course'] == $result->course_niya){

											if($num_resa == 1){

											echo '<td><font color="red">Not Assigned</font></td>';
							  				echo '<td>None</td>';
							  				echo '<td><a href = "assign_subjects2.php?instructorId=&offered_id='.$result->offerred_subject_id.'&ay='.$ayy2.'&term='.$tt.'" >Assign this</a></td>';
											}
											else{

											echo '<td><font color="red">Not Assigned</font></td>';
							  				echo '<td>None</td>';
							  				echo '<td></td>';
											}

							  				}
						  				else{
						  					echo '<td><font color="red">Not Assigned</font></td>';
							  				echo '<td>None</td>';
							  				echo '<td></td>';
							  				}
									
									}

						  		
						  		echo '</tr>'; ?>



					





					<?php	  	}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="10"><?php	echo '<ul class="pager" align="center">';


					if ($pagination->total_pages() > 1){

						echo 'Page ' .$current_page .' of '. $pagination->total_pages();

						if ($current_page == 1 ){
							echo ' <li class="disabled"><a href=offered_subjects.php?page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=offered_subjects.php?page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=offered_subjects.php?page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=offered_subjects.php?page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=offered_subjects.php?page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=offered_subjects.php?page='.($current_page + 1) .'>Next</a></li> ';
						}
						
					
							
						if ($current_page ==  $pagination->total_pages() ){
													
							echo ' <li class="disabled"><a href=offered_subjects.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}else{
							echo ' <li><a href=offered_subjects.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}
							
					}
					
					?></td></tr>
				  </tfoot>	
				</table>
				
			
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



