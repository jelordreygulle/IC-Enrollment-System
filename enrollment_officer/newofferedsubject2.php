<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$room_number = $_GET['room'];

$ro = new Room();
$mineq = $ro ->single_room($room_number);
?>
<div class="container">
<?php
if (isset($_POST['saveofferedsubject'])){

	if ($_POST['subject'] == "" OR $_POST['course'] == "" OR $_POST['section'] == ""  OR $_POST['slot'] == "" OR $_POST['room'] == "" OR $_POST['slot'] == "startime" OR $_POST['endtime'] == "" OR $_POST['instructor'] == ""    ) {
		message("All field is required!","error");
		check_message();
	}else{
		
		echo $rooms = $_POST['room'];
		echo $subjects = $_POST['subject'];
		echo $timestarts = $_POST['starttime'];
		echo $timeends = $_POST['endtime'];
		echo $start_extension = $_POST['startindex'];
		echo $end_extension = $_POST['endindex'];
		echo $courses = $_POST['course'];
		echo $sections = $_POST['section'];
		echo $instructors = $_POST['instructor'];
		echo $slots = $_POST['slot'];

		$days = $_POST['selector'];
		$days_count = count($days);
		$days[0];
		if (!$days==''){
			for ($i=0;$i<$days_count; $i++){
				echo $days_new = $days[$i];
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
							AND `term` = 'First Semester'
							AND `AY` = '2016-2017'
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


				    }

				    else{


						$ayy = $_SESSION['accademic'];
						$querya ="SELECT  `ay_id` ,  `ay` 
									FROM  `tbl_ay` 
									WHERE  `ay_id` =  '$ayy'
									LIMIT 0 , 30";
						$resa = mysql_query($querya) or die ("Could not execute query2.");
						$row2a = mysql_fetch_row($resa);
						$ayida = $row2a[0];
						$ayy2 = $row2a[1];			




						$subj 		= new Offerred_Subject();
						$subject   	= $_POST['subject'];
						$course	 	= $_POST['course'];
						$section 	= $_POST['section'];
						$slot		= $_POST['slot'];	
						$term		= $_SESSION['term'];
						 
				
						$subj->subject_id	 		= $subject;
						$subj->slots 			 	= $slot;
						$subj->semester 			= $term;
						$subj->AY 					= $ayy2;
						$subj->section				= $section;
						$subj->course_id 			= $course;
						$istrue = $subj->create();


						$pool = "SELECT `offerred_subject_id` 
								FROM `tbl_offerred_subject` 
								WHERE `subject_id` = '$subject'
								and `slots` = '$slot'
								and `semester` = '$term'
								and `AY` = '$ayy2'
								and `section` = '$section'
								and `course_id` = '$course'
								";
						$pool2 = mysql_query($pool)  or die ("Could not execute query for offered subject.");
						$row_pool = mysql_fetch_row($pool2);
						echo 'mine', $off_id = $row_pool[0];


						
						$load = new InstructorLoad();
						$load->offered_subject_id	=	$off_id;
						$load->instructor_id		=	$instructors;
						$load->AY 					=	$ayy2;
						$load->term 				=	$term;
						$load->room_id 				=	$rooms;
						$load->day 					=	$days_new;
						$load->starttime 			=	$timestarts;
						$load->endtime 				= 	$timeends;
						$load->starttime_extension 	=	$start_extension;
						$load->endtime_extension	= 	$end_extension;
						$istrue2 = $load->create(); 
						
						 if ($istrue == 1 and $istrue2 == 1){
						 	
						 	//message("New Subject created successfully!","success");
						 	//redirect('offerred_subject.php');
						 }

					}
			}
	}		 
	 

}
	
}elseif (isset($_POST['saveandnewofferedsubject'])) {
	if ($_POST['subject'] == "" OR $_POST['course'] == "" OR $_POST['section'] == ""  OR $_POST['slot'] == "" OR $_POST['schedule'] == "" OR $_POST['room'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		
			
																$ayy = $_SESSION['accademic'];
							                                    $querya ="SELECT  `ay_id` ,  `ay` 
																			FROM  `tbl_ay` 
																			WHERE  `ay_id` =  '$ayy'
																			LIMIT 0 , 30";
							                                    $resa = mysql_query($querya) or die ("Could not execute query2.");
							                          
							                                    $row2a = mysql_fetch_row($resa);
							                                    
							                                    $ayida = $row2a[0];
							                                    $ayy2 = $row2a[1];			




			$subj 		= new Offerred_Subject();
			$subject   	= $_POST['subject'];
			$course	 	= $_POST['course'];
			$section 	= $_POST['section'];
			$slot		= $_POST['slot'];
			$schedule 	= $_POST['schedule'];
			$room 		= $_POST['room'];
			$term		= $_SESSION['term'];
		
	
			$subj->subject_id	 		= $subject;
			$subj->room_id		 		= $room;
			$subj->slots 			 	= $slot;
			$subj->semester 			= $term;
			$subj->schedule 			= $schedule;
			$subj->AY 					= $ayy2;
			$subj->section				= $section;
			$subj->course_id 			= $course;


			
		

			 $istrue = $subj->create();
			 if ($istrue == 1){
			 	
			 //	message("New Subject created successfully!","success");
		
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
				              "subjdesc">Buildng/Room</label>

				              <div class="col-md-8">
				                 <select class="form-control input-sm" id="room" name="room" required>
				              	<option value="<?php echo $room_number; ?>"><?php echo $mineq ->building_name_and_room_number; ?></option>
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
				              "subjcode">Subject</label>

				              <div class="col-md-8">
				              	<select  class="form-control input-sm" id="subject" name="subject" required>
				              	<option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {
				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Instructor</label>

				              <div class="col-md-8">
				              	<select  class="form-control input-sm" id="instructor" name="instructor" required>
				              	<option value=""></option>
				                <?php
				                  	$instructor = new Instructor();
				                  	$cur = $instructor->listOfinstructor();	
				                  	foreach ($cur as $instructor) {
				                  		echo '<option value="'. $instructor->instructor_id.'">'.$instructor->name.'</option>';
				                  	}

				                  	?>	
				                  </select>
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
					              	<option value="AM">AM</option>
					              	<option value="PM">PM</option>
					              	
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
					              	<option value="AM">AM</option>
					              	<option value="PM">PM</option>
					              	
				                  </select>
				              </div>
				            </div>
				          </div>
				          

							

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Course</label>

				              <div class="col-md-8">
				                 <select  class="form-control input-sm" id="course" name="course" required>
				              	<option value=""></option>
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
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Section</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="subjdesc" name="section" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Slot</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="slot" name="slot" placeholder=
													  "" type="number" value="">
				              </div>
				            </div>
				          </div>

				          

				       
				  

						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-success" name="saveofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               <button class="btn btn-default" name="saveandnewofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



