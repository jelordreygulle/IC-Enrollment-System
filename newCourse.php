<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['savecourse'])){

	if ( $_POST['coursedesc'] == "" OR $_POST['AY'] == "" OR $_POST['abb'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$course = new Course();
		$res = $course->find_all_course($_POST['coursedesc']);
				
		if ($res >=1) {
			message("Course name already exist!","error");
			check_message();
		}else{
			$course->course_code	 = $_POST['coursedesc'];
			$course->Major 			 = $_POST['Major'];
			$course->course_abb 	 = $_POST['abb'];
			$course->AY 			 = $_POST['AY'];	
			 $istrue = $course->create(); 
			 if ($istrue == 1){
			 	
			 	message($_POST['coursedesc']."New course created successfully!","success");
			 	redirect('listofcourse.php');
			 }
		}	 

		
	}
}

?>		
		
		 
		        <form class="form-horizontal well span6" action="#.php" method="POST">

					<fieldset>
						<legend>New Course</legend>
															

						

				            <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "coursedesc">Course Description</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="coursedesc" name="coursedesc" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>





				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "major">Major</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="coursedesc" name="Major" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				         

						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "abb">Course Abbreviation</label>

				              <div class="col-md-8">
				                   <input class="form-control input-sm" id="abb" name="abb" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "dept">AY</label>

				              <div class="col-md-8">
				                   <input class="form-control input-sm" id="AY" name="AY" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>

				</div><!--End of container-->
			

<?php include("footer.php") ?>



