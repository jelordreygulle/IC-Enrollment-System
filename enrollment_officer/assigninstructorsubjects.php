<?php
require_once("includes/initialize.php");
include 'header.php';
$instructor_id=$_GET['instructorId'];
$ayy = $_GET['ay'];
$tt = $_GET['term'];

$ayy2 = $_GET['ay'];


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
		  <div class="col-md-1">
		  
		  </div>

		  <div class="col-md-10">
		  <form class="form-horizontal span4" action="" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Query Options</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="subjcode">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject Code:</label>

				              <div class="col-md-8">
				            
				                 <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
												  "Subject Code" type="text" value="">
				              </div>

				            </div>
				          </div>
				  			<div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">Course:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="course" id="course">
				                 	<option value="Select Course">Select Course</option>
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code.'-'.$course->Major.'</option>';
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
									    <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" name="search" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    				  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
		  </div>
		   
		</div>		
			
</div><!--End of container-->
		
<div class="container">
	<?php
		check_message();
			
		?>		

		<div class="well">
			    <form action="p_instructorSubjects.php?instructorId=<?php echo $_GET['instructorId']; ?>" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Offered Subject as of <?php echo $ayy2;?> - <?php echo $tt; ?></h3></caption>
				  <thead>
				  	<tr>
				  		<th>Subject Code</th>
				  		<th>Descriptive Title</th>
				  		<th>Section</th>
				  		<th>Course</th>
				  		<th>Status</th>
				  		
				 		<th>Instructor</th>
				 		<th>Option</th>
				 		
				 		<th></th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$instructorId=$_GET['instructorId'];
				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 10;
										
					//total count record ($total_count)
					$countEmp = new SubjPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new SubjPagination($current_page, $per_page, $total_count);
				  	  @$subjcode =  $_POST['subjcode'];
				  	  @$course 	 =  $_POST['course'];
				  	
				  	  
				    If (isset($_POST['search'])){
				  	  if ($subjcode == '' AND $course=='Select Course'  ){ 

					  		$mydb->setQuery("SELECT `tbl_course` . * , `tbl_offerred_subject` . * , `tbl_subject` . *
												FROM tbl_course, tbl_offerred_subject, tbl_subject
												WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
												AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
												AND `tbl_offerred_subject`.`semester` = '$tt'
												AND `tbl_offerred_subject`.`AY` = '$ayy2'
					  						LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");

						  	loadresult();
						 
					  	}


					  	else if($subjcode != '' AND $course=='Select Course' ){
					  		 $mydb->setQuery("SELECT `tbl_course`.*, `tbl_offerred_subject`.*, `tbl_subject`.*
												FROM tbl_course, tbl_offerred_subject, tbl_subject
												where `tbl_offerred_subject`.`subject_id`= `tbl_subject`.`subject_id`
												AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
												AND `tbl_offerred_subject`.`semester` = '$tt'
												AND `tbl_offerred_subject`.`AY` = '$ayy2'
												AND `tbl_subject`.`subject_code` = '$subjcode'
												
										");
						  	loadresult();

					  	}

					  	else{
					  		 $mydb->setQuery("SELECT `tbl_course`.*, `tbl_offerred_subject`.*, `tbl_subject`.*
												FROM tbl_course, tbl_offerred_subject, tbl_subject
												where `tbl_offerred_subject`.`subject_id`= `tbl_subject`.`subject_id`
												AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
												AND `tbl_offerred_subject`.`semester` = '$tt'
												AND `tbl_offerred_subject`.`AY` = '$ayy2'
												
												AND `tbl_offerred_subject`.`course_id` ='$course'
										");
						  	loadresult();

					  	}
					  }else{
					  $mydb->setQuery("SELECT `tbl_course` . * , `tbl_offerred_subject` . * , `tbl_subject` . *
										FROM tbl_course, tbl_offerred_subject, tbl_subject
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

							

								$tt5 = $_GET['term'];

								$ayy25 = $_GET['ay'];

								
						  		echo '<td>'. $result->subject_code.'</td>';
						  		echo '<td>'. $result->description_title.'</td>';
						  		echo '<td>'. $result->section.'</td>';
						  		echo '<td>'. $result->course_abb.'-'.$result->Major.'</td>';
						  		
							  		$mine = "SELECT * FROM `tbl_instructor_load` WHERE `offered_subject_id` = '$result->offerred_subject_id'
											AND `AY` = '$ayy25'
											AND `term` = '$tt5'
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
						  				echo '<td></td>';



									}

									else{

										echo '<td><font color="red">Not Assigned</font></td>';
						  				echo '<td>None</td>';
						  				echo '<td><a href = "assign_subjects.php?instructorId='.$_GET['instructorId'].'&offered_id='.$result->offerred_subject_id.'&ay='.$_GET['ay'].'&term='.$_GET['term'].'" >Assign this</a></td>';

									}

						  		
								
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7"><?php	echo '<ul class="pager" align="center">';
 
					if ($pagination->total_pages() > 1){

						echo 'Page ' .$current_page .' of '. $pagination->total_pages();

						if ($current_page == 1 ){
							echo ' <li class="disabled"><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.($current_page + 1) .'>Next</a></li> ';
						}
						
					
							
						if ($current_page ==  $pagination->total_pages() ){
													
							echo ' <li class="disabled"><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.$pagination->total_pages().'>Last </a> </li>';
						}else{
							echo ' <li><a href=assignInstructorSubjects.php?instructorId='.$instructorId.'&page='.$pagination->total_pages().'>Last </a> </li>';
						}
							
					}
					 
					?></td></tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
				  <a href="instructor_subjects.php?instructorId=<?php echo $instructor_id; ?>&term=<?php echo $tt; ?>&ay=<?php echo $ayy2; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
				  
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



