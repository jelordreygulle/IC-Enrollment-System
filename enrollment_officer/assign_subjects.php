<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$ins_id = $_GET['instructorId'];
$off_id = $_GET['offered_id'];
$current_term = $_GET['term'];
$ayy2 = $_GET['ay'];	



							                                 	




$subjects = "SELECT `tbl_subject`.`subject_code` , `tbl_subject`.`description_title` , `tbl_course`.`course_code` , `tbl_course`.`Major` , `tbl_offerred_subject`.`slots` , `tbl_offerred_subject`.`course_id` , `tbl_offerred_subject`.`section`
			FROM tbl_subject, tbl_course, tbl_offerred_subject
			WHERE `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
			AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
			AND `tbl_offerred_subject`.`offerred_subject_id` ='$off_id'";

$subjects_2 = mysql_query($subjects) or die ("Could not execute query in gettng the subjects information. Please contact you admnistrator");
$subjects_row = mysql_fetch_row($subjects_2);

$row_subject_code		= $subjects_row[0];
$row_descriptive_title	= $subjects_row[1];
$row_course_code		= $subjects_row[2];
$row_major				= $subjects_row[3];
$row_slot				= $subjects_row[4];
$row_course_id			= $subjects_row[5];
$row_section			= $subjects_row[6];



$maestra = "SELECT `name`
			FROM `tbl_instructor` 
			WHERE `instructor_id` = '$ins_id'";
$maestra_2 = mysql_query($maestra) or die ("Cannot get the instructors infromation please contact your administrator");
$row_maestra = mysql_fetch_row($maestra_2);

$row_instructors_name = $row_maestra[0];
		

?>
<div class="container">
<?php
if (isset($_POST['saveofferedsubject'])){

	if ($_POST['subject'] == "" OR $_POST['course'] == "" OR $_POST['section'] == ""  OR $_POST['slot'] == "" OR $_POST['room'] == "" OR $_POST['slot'] == "startime" OR $_POST['endtime'] == "" OR $_POST['instructor'] == ""    ) {
		message("All field is required!","error");
		check_message();
	}else{
		
		$rooms = $_POST['room'];
		
		$timestarts = $_POST['starttime'];
		$timeends = $_POST['endtime'];
		$start_extension = $_POST['startindex'];
		$end_extension = $_POST['endindex'];
		

		$days = $_POST['selector'];
		$days_count = count($days);
		$days[0];
		if (!$days==''){
			for ($i=0;$i<$days_count; $i++){
				$days_new = $days[$i];
				

				$sql22 = "SELECT COUNT( `load_id` )
							FROM `tbl_instructor_load`
							WHERE DAY = '$days_new'
							AND (
							(
							`starttime`
							BETWEEN '$timestarts'
							AND '$timeends'
							)
							OR (
							`endtime`
							BETWEEN '$timestarts'
							AND '$timeends'
							)
							)
							AND `room_id` ='$rooms'
							AND `term` = '$current_term'
							AND `AY` = '$ayy2'
							AND `starttime_extension` = '$start_extension'
							AND `endtime_extension` = '$end_extension'
							";
			    $fell = mysql_query($sql22) or die ("Could not execute query2.");
			    $fell_row = mysql_fetch_row($fell);
			    $fell_count = $fell_row[0];

				    if($fell_count > 0){

				    	?>    
					    	<script type="text/javascript">
			                	alert("There is Conflict in time start and time end with the other subjects.Please Check!");
			                </script>
	           			 <?php

	           			$i = $days_count-1;


				    }

				    else{

					    	$ins_load_confirm = "SELECT COUNT( `load_id` )
								FROM `tbl_instructor_load`
								WHERE DAY = '$days_new'
								AND (
								(
								`starttime`
								BETWEEN '$timestarts'
								AND '$timeends'
								)
								OR (
								`endtime`
								BETWEEN '$timestarts'
								AND '$timeends'
								)
								)
								
								AND `term` = '$current_term '
								AND `AY` = '$ayy2'
								AND `starttime_extension` = '$start_extension'
								AND `endtime_extension` = '$end_extension'
								AND `instructor_id` = '$ins_id'
								";
						    $ins_load_confirm_2 = mysql_query($ins_load_confirm) or die ("Could not execute query2.");
						    $row_confirm = mysql_fetch_row($ins_load_confirm_2);
						    $ins_count = $row_confirm[0];


						    if($ins_count > 0){

						    ?>    
					    	<script type="text/javascript">
			                	alert("There is Conflict in time with the schedule of the instructor.Please Check!");
			                </script>
	           				 <?php

	           				 $i = $days_count-1;

						    }

						    else{

						    	

	
								$load = new InstructorLoad();
								 $load->offered_subject_id	=	$off_id;
								$load->instructor_id		=	$ins_id;
								$load->AY 					=	$ayy2;
								 $load->term 				=	$current_term;
								 $load->room_id 				=	$rooms;
								 $load->day 					=	$days_new;
								$load->starttime 			=	$timestarts;
								 $load->endtime 				= 	$timeends;
								$load->starttime_extension 	=	$start_extension;
								 $load->endtime_extension	= 	$end_extension;
								$istrue = $load->create(); 
								
								 if ($istrue == 1){
								 	
								 	message("The assigned subject is successfully added!","success");
								 	redirect('assignInstructorSubjects.php?instructorId='.$ins_id.'&term='.$current_term.'&ay='.$ayy2);
								 }

						    }

								

					}
			}
	}		 
	 

}
	
}



?>	


		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Offered Subject</legend>
															

						<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject</label>

				              <div class="col-md-8">
				              	 <input readonly class="form-control input-sm" id="subject" name="subject" placeholder=
													  "" type="text" value="<?php echo $row_subject_code; echo ' - '; echo $row_descriptive_title; ?> ">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Instructor</label>

				              <div class="col-md-8">
				              	 <input readonly class="form-control input-sm" id="instructor" name="instructor" placeholder=
													  "" type="text" value="<?php echo $row_instructors_name;?>">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Course</label>

				              <div class="col-md-8">
				              	 <input readonly class="form-control input-sm" id="course" name="course" placeholder=
													  "" type="text" value="<?php echo $row_course_code;?>">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Section</label>

				              <div class="col-md-8">
				              	 <input readonly class="form-control input-sm" id="section" name="section" placeholder=
													  "" type="text" value="<?php echo $row_section;?>">
				              </div>
				            </div>
				          </div>
				            <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Slot</label>

				              <div class="col-md-8">
				              	 <input readonly class="form-control input-sm" id="slot" name="slot" placeholder=
													  "" type="text" value="<?php echo $row_slot;?>">
				              </div>
				            </div>
				          </div>





						<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Buildng/Room</label>

				              <div class="col-md-8">
				                 <select class="form-control input-sm" id="room" name="room" required>
				              	<option value="">--Select--</option>
				                <?php
				                  	$room = new Room();
				                  	$buths = $room ->listOfroom();	
				                  	foreach ($buths as $room ) {
				                  		echo '<option value="'. $room ->room_id.'">'.$room ->building_name_and_room_number.'</option>';
				                  	}

				                  	?>	
				                  </select>
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Day</label>

				              <div class="col-md-8">
				                 <input type="checkbox" name="selector[]" id="selector[]" value="M"/> Monday
				                 <br><input type="checkbox" name="selector[]" id="selector[]" value="T"/> Tuesday
				                 <br><input type="checkbox" name="selector[]" id="selector[]" value="W"/> Wednesday
				                 <br><input type="checkbox" name="selector[]" id="selector[]" value="H"/> Thursday
				                 <br><input type="checkbox" name="selector[]" id="selector[]" value="F"/> Friday
				                 <br><input type="checkbox" name="selector[]" id="selector[]" value="S"/> Saturday
				              </div>
				            </div>
				          </div>

				          

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Time Start</label>

				              <div class="col-md-6">
				              	<select  class="form-control input-sm" id="starttime" name="starttime" required>
					              	<option value=""></option>
					              	<option value="6:01">6:00</option>
					              	<option value="6:31">6:30</option>
					              	<option value="7:01">7:00</option>
					              	<option value="7:31">7:30</option>
					              	<option value="8:01">8:00</option>
					              	<option value="8:31">8:30</option>
					              	<option value="9:01">9:00</option>
					              	<option value="9:31">9:30</option>
					              	<option value="10:01">10:00</option>
					              	<option value="10:31">10:30</option>
					              	<option value="11:01">11:00</option>
					              	<option value="11:31">11:30</option>
					              	<option value="12:01">12:00</option>
					              	<option value="12:31">12:30</option>
					              	<option value="1:01">1:00</option>
					              	<option value="1:31">1:30</option>
					              	<option value="2:01">2:00</option>
					              	<option value="2:31">2:30</option>
					              	<option value="3:01">3:00</option>
					              	<option value="3:31">3:30</option>
					              	<option value="4:01">4:00</option>
					              	<option value="4:31">4:30</option>
					              	<option value="5:01">5:00</option>
					              	<option value="5:31">5:30</option>
					              	
				                
				                  </select>
				              </div>
				              <div class="col-md-2">
				              	<select  class="form-control input-sm" id="startindex" name="startindex" required>
					              	<option value=""></option>
					              	<option value="am">AM</option>
					              	<option value="pm">PM</option>
					              	
				                  </select>
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Time End</label>

				              <div class="col-md-6">
				              	<select  class="form-control input-sm" id="endtime" name="endtime" required>
					              	<option value=""></option>
					              	<option value="6:00">6:00</option>
					              	<option value="6:30">6:30</option>
					              	<option value="7:00">7:00</option>
					              	<option value="7:30">7:30</option>
					              	<option value="8:00">8:00</option>
					              	<option value="8:30">8:30</option>
					              	<option value="9:00">9:00</option>
					              	<option value="9:30">9:30</option>
					              	<option value="10:00">10:00</option>
					              	<option value="10:30">10:30</option>
					              	<option value="11:00">11:00</option>
					              	<option value="11:30">11:30</option>
					              	<option value="12:00">12:00</option>
					              	<option value="12:30">12:30</option>
					              	<option value="1:00">1:00</option>
					              	<option value="1:30">1:30</option>
					              	<option value="2:00">2:00</option>
					              	<option value="2:30">2:30</option>
					              	<option value="3:00">3:00</option>
					              	<option value="3:30">3:30</option>
					              	<option value="4:00">4:00</option>
					              	<option value="4:30">4:30</option>
					              	<option value="5:00">5:00</option>
					              	<option value="5:30">5:30</option>
					              	
				                
				                  </select>
				              </div>
				              <div class="col-md-2">
				              	<select  class="form-control input-sm" id="endindex" name="endindex" required>
					              	<option value=""></option>
					              	<option value="am">AM</option>
					              	<option value="pm">PM</option>
					              	
				                  </select>
				              </div>
				            </div>
				          </div>
				          

							

				         

				          

				       
				  

						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-success" name="saveofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				                
				                <a href="assignInstructorSubjects.php?instructorId=1&term=<?php echo $current_term; ?>&ay=<?php echo $ayy2; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
				                 </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



