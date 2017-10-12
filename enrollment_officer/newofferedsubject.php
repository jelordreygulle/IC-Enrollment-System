<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';
$session_course = $_SESSION['course'];
?>
<div class="container">
<?php
if (isset($_POST['saveofferedsubject'])){

	if ($_POST['subject'] == ""  OR $_POST['section'] == ""  OR $_POST['slot'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		
	
	$ayy2 = $_GET['ay'];
	$tt = $_GET['term'];



			$subj 		= new Offerred_Subject();
			$subject   	= $_POST['subject'];
			$course	 	= $_POST['course'];
			$section 	= $_POST['section'];
			$slot		= $_POST['slot'];
			
			$term		= $tt;
		
	
			$subj->subject_id	 		= $subject;
			
			$subj->slots 			 	= $slot;
			$subj->semester 			= $term;
			
			$subj->AY 					= $ayy2;
			$subj->section				= $section;
			$subj->course_id 			= $course;



			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
			 	redirect('offerred_subject.php');
			 }
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewofferedsubject'])) {
	if ($_POST['subject'] == ""  OR $_POST['section'] == ""  OR $_POST['slot'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		

		
		$ayy2 = $_GET['ay'];
		$tt = $_GET['term'];		




			$subj 		= new Offerred_Subject();
			$subject   	= $_POST['subject'];
			$course	 	= $_POST['course'];
			$section 	= $_POST['section'];
			$slot		= $_POST['slot'];
			
			$term		= $tt;
		
	
			$subj->subject_id	 		= $subject;
			
			$subj->slots 			 	= $slot;
			$subj->semester 			= $term;
			
			$subj->AY 					= $ayy2;
			$subj->section				= $section;
			$subj->course_id 			= $course;



			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	?>    
				 	<script type="text/javascript">
	               		 alert("New Offered Subject is successfully Added!");
	                </script>
            	<?php
			 	redirect('newofferedsubject.php?ay='.$ayy2.'&term='.$tt);
			 	
			 }
}
}

?>	


		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Offered Subject</legend>
															



							<div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjcode">Subject</label>

				              <div class="col-md-9">
				              	<select  class="form-control input-sm" id="subject" name="subject" required>
				              	<option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->findallsubjectfromcurriculum($session_course);	
				                  	foreach ($cur as $subject) {
				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</font></option>';
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

				              <div class="col-md-9">
				                 <select  class="form-control input-sm" id="course" name="course" readonly >
				              
				                <?php
				                  	$course = new Course();
				                  	$cur = $course->single_course($session_course);	
				                  	
				                  		echo '<option value="'. $cur->course_id.'">'.$cur->course_code.'-'.$cur->Major.', '.$cur->AY.'</option>';
				                  	

				                  	?>	
				                  </select>
				              </div>
				            </div>
				          </div>


				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Section</label>

				              <div class="col-md-9">
				                 <input required class="form-control input-sm" id="subjdesc" name="section" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "subjdesc">Slot</label>

				              <div class="col-md-9">
				                 <input required class="form-control input-sm" id="slot" name="slot" placeholder=
													  "" type="number" value="">
				              </div>
				            </div>
				          </div>

				          

				       
				  

						
						 <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-3 control-label" for=
				              "idno"></label>

				              <div class="col-md-9">
				                <button class="btn btn-success" name="saveofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               <button class="btn btn-default" name="saveandnewofferedsubject" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				               <a href="offerred_subject.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Close</a>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



