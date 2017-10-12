<?php
require_once("includes/initialize.php");
include 'header.php';


?>
<div class="container">
			
<?php
	$courseid = $_GET['id'];
	$singledept = new Course();
	$object = $singledept->single_course($courseid);


	if (isset($_POST['savecourse'])){

		if ($_POST['coursename'] == ""  OR $_POST['abb'] == "" OR $_POST['ay'] == "") {
			
			message("All field is required!", "error");

		}else{
			$course = new Course();
			$course->course_code 	= $_POST['coursename'];
			$course->Major 		 	= $_POST['major'];
			$course->copurse_abb 	= $_POST['abb'];
			$course->AY 			= $_POST['ay'];
				
			$course->update($_GET['id']);
			

			message($_POST['coursename']. " s successfully updated!", "info");
			redirect('listofcourse.php');

		}
	}

			

?>

			  <form class="form-horizontal well span6" action="editCourse.php?id=<?php echo $courseid;?>" method="POST">

					<fieldset>
						<legend>Edit Course</legend>
															

							
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "coursename">Course Description</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="coursename" name="coursename" placeholder=
													  "" type="text" value="<?php echo $object->course_code;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "major">Major</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="major" name="major" placeholder=
													  "" type="text" value="<?php echo $object->Major;?>">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "major">Course Abbreviation</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="abb" name="abb" placeholder=
													  "" type="text" value="<?php echo $object->course_abb;?>">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay">Academic Year</label>

				              <div class="col-md-8">
				              <input class="form-control input-sm" id="ay" name="ay" placeholder=
													  "Academic Year" type="text" value="<?php echo $object->AY;?>">
				              </div>
				            </div>
				          </div>




						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	
					
				</form>
			
				</div><!--End of container-->
			

<?php include("footer.php") ?>



