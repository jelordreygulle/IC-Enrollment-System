<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$offered_id = $_GET['id'];
?>
<div class="container">
<?php
$student = new Offerred_Subject();
$cur = $student->single_offeredsubject($_GET['id']);
$courses 		=  $cur->course_id;
$edit_slot 		= $cur->slots;
$edit_section 	= $cur->section;


$off ="SELECT `tbl_subject`.`subject_id` , `tbl_subject`.`subject_code` , `tbl_subject`.`description_title`
			FROM tbl_offerred_subject, tbl_subject
			WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
			AND `tbl_offerred_subject`.`offerred_subject_id` ='$offered_id'
			";
$off2 = mysql_query($off) or die ("Could not execute query2.");
$row_off = mysql_fetch_row($off2);
$off_subject_id = $row_off[0];
$off_subject_code = $row_off[1];
$off_subject_description_title = $row_off[2];



$off ="SELECT `tbl_subject`.`subject_id` , `tbl_subject`.`subject_code` , `tbl_subject`.`description_title`
			FROM tbl_offerred_subject, tbl_subject
			WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
			AND `tbl_offerred_subject`.`offerred_subject_id` ='$offered_id'
			";
$off2 = mysql_query($off) or die ("Could not execute query in getting the subject information. Please contact your Administrator");
$row_off = mysql_fetch_row($off2);
$off_subject_id = $row_off[0];
$off_subject_code = $row_off[1];
$off_subject_description_title = $row_off[2];




$off_cour ="SELECT  `course_id`, `course_code`, `Major`, `course_abb`, `AY`
		FROM tbl_course
		 WHERE `course_id` = '$courses'";
$off_cours 				 = mysql_query($off_cour) or die ("Could not execute query for getting course information Please Contact your Adminstrator.");
$off_course 			 = mysql_fetch_row($off_cours);
$off_course_id 			 = $off_course[0];
$off_course_code 		 =$off_course[1];
$off_course_major 		 = $off_course[2];
$off_course_abbreviation = $off_course[3];
$off_course_ay			 = $off_course[4];





if (isset($_POST['updateofferedsubject'])){
	

	if ($_POST['course'] == "" OR $_POST['section'] == ""  OR $_POST['slot'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		

			$offerings = new Offerred_Subject();
			$offerings_course		= $_POST['course'];
		 $offerings_subject		= $_POST['subject'];
			$offerings_section  	= $_POST['section'];
			$offerings_slot		   	= $_POST['slot'];
			

			$offerings->course_id	= $offerings_course;
			$offerings->slots		= $offerings_slot;
			$offerings->subject_id		= $offerings_subject;
			$offerings->section 	= $offerings_section;

			
 			$offerings->update($offered_id);
			message($off_subject_code. " is successfully updated!", "info");
			redirect('offerred_subject.php');
			 
			
		}	 

		
	}












?>	








     <form class="form-horizontal well span5" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Offered Subject</legend>
															








						

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Subject</label>

				              <div class="col-md-8">
				                 

								<select  class="form-control input-sm" id="subject" name="subject" required>
								<option value="<?php echo $off_subject_code;?> <?php echo $off_subject_description_title;?>"><?php echo $off_subject_code;?> <?php echo $off_subject_description_title;?></option>
				              
				                <?php
				                  	$subject = new subject();
				                  	$cur = $subject->findallsubjectfromcurriculum($courses);	
				                  	foreach ($cur as $subject) {
				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.', '.$course->AY.'</option>';
				                  	}

				                  	?>	
				                  </select>
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Course</label>

				              <div class="col-md-8">
				                 <select readonly class="form-control input-sm" id="course" name="course" required>
				              	<option value="<?php echo $off_course_id;?>"><?php echo $off_course_code;?>-<?php echo $off_course_major;?>, <?php echo $off_course_ay;?></option>
				                <?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code.'-'.$course->Major.', '.$course->AY.'</option>';
				                  	}

				                  	?>	
				                  </select>
				              </div>
				            </div>
				          </div>


				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Section</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="section" name="section" placeholder=
													  "" type="text" value="<?php echo $edit_section; ?>">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Slot</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="slot" name="slot" placeholder=
													  "" type="number" value="<?php echo $edit_slot; ?>">
				              </div>
				            </div>
				          </div>




				      





				       
				  

						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                
				                 <button type="submit" class="btn btn-danger" name="updateofferedsubject" data-toggle="modal" data-target="#update_offered_subject"><span class="glyphicon glyphicon-repeat"></span> Update</button>
					
				    <div class="modal fade" id="update_offered_subject" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Confirmation Message</h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to edit this offered subject?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="updateofferedsubject" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>
				               
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



