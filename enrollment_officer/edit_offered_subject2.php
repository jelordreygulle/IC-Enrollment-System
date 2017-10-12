<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$offered_id = $_GET['id'];
$offered_room_id = $_GET['room'];
?>

<?php
$student = new Offerred_Subject();
$cur = $student->single_offeredsubject($_GET['id']);


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
$off2 = mysql_query($off) or die ("Could not execute query2.");
$row_off = mysql_fetch_row($off2);
$off_subject_id = $row_off[0];
$off_subject_code = $row_off[1];
$off_subject_description_title = $row_off[2];



?>	


<script type="text/javascript">

function redirect(value){
	<?php
    echo 'window.location.href = "/Initao_College/enrollment_officer/edit_offered_subject2.php?id='.$offered_id.'&room="+value;'
   // echo 'window.location.href = "/Initao_College/enrollment_officer/edit_offered_subject.php?id='.$offered_id.'&subjectid='. $_POST['subject'].'&course='.$_POST['course'].'&section='.$_POST['section'].'&slot='.$_POST['slot'].'&room="+value;'
    
    ?>
}
</script>






<div class="container">


<div class="row row-offcanvas row-offcanvas-right">
<div class="col-xs-6 col-sm-6 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="panel panel-success">
					
					  <div class="panel-heading">List of Room Schedules</div>
					   <div class="panel-body">	
						   <form  method="POST" action="index.php">
								<div class="col-xs-12 col-sm-12">

					            	


					            	<table class="table table-hover">
					<caption><h3 align="left">List of Subject</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="25%" >Room ID</th>
				  		<th width="45%" >Building/Room</th>
				  		<th width="5%" >Capacity</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
					
				  	  
				  	  if ($offered_room_id){ 
					  		$mydb->setQuery("SELECT  *
												FROM  `tbl_room`
					  		 					 ");
						  	loadresult();
					  	}else{
					  		$mydb->setQuery("SELECT  *
											FROM  `tbl_room`
										WHERE `room_id`='{$offered_room_id}'
										 
										");
					  		loadresult();

					  	}

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td width="15%">
						  				<a href="edit_room.php?id='.$result->room_id.'">' . $result->room_id.'</a></td>';
						  		echo '<td width="30%">'. $result->building_name_and_room_number.'</td>';
						  		
						  		echo '<td width="30%">'. $result->capacity.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				 
				</table>




						        
						        </div>
					        </form>
						</div>
				</div>
	</div>
	<!--/.well --> 
</div>























     <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Offered Subject</legend>
															



				          	<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Buildng/Room</label>

				              <div class="col-md-8">
				                 <select  onchange="redirect(this.value)" class="form-control input-sm" id="room" name="room" required>
				              	<option value="">--Select Room--</option>
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
				              "subjdesc">Schedule</label>

				              <div class="col-md-8">
				                 
									<select  class="form-control"  id="schedule" name="schedule" required>
					            					<option value="">Term</option>
													<option value="First Semester">First Semester</option>
													<option value="Second Semester">Second Semester</option>
													<option value="Summer">Summer</option>
															
									</select>	

				              </div>
				            </div>
				          </div>


				       






							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject</label>

				              <div class="col-md-8">
				              	<select  class="form-control input-sm" id="subject" name="subject" required>
				              	<option onchange="edit.php" value="<?php echo $cur->subject_id; ?>"><?php echo $off_subject_code;?>-<?php echo $off_subject_description_title;?></option>
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
				                <button class="btn btn-default" name="saveofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               <button class="btn btn-default" name="saveandnewofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



