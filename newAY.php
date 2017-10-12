<?php
require_once("includes/initialize.php");
include 'header.php';
?>
<div class="container">
<?php
if (isset($_POST['save'])){

	if ($_POST['ay'] == "" OR $_POST['ay_term'] == "" OR $_POST['ay_status'] == "") {
		message("All field is required!", "error");
		check_message();
	}else{
		$sy = new ay();
		$ay				= $_POST['ay'];
		$ay_term   		= $_POST['ay_term'];
		$ay_status 		= $_POST['ay_status'];
		$res = $sy->find_all_sy($ay, $ay_term );
				
		if ($res >=1) {
			message("School Year and Term is already exist! Please Check.","error");
			check_message();
		}else{
			$sy->ay 			= $ay;
			$sy->ay_status 		= $ay_status;
			$sy->term 		 	= $ay_term;
			 $istrue = $sy->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $ay ."] Academic Year successfullycreated!","success");
				redirect('listofay.php');

			 }
		}	 

		
	}
}

?>

		
		
			  <form class="form-horizontal well span6" action="#" method="POST">

					<fieldset>
						<legend>New Academic Year</legend>
															
				          <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Academic Year:</label>

				                <div class="col-md-8">
				                  <input required class="form-control input-sm" id="ay" name="ay" type=
				                  "text" placeholder="e.g 2016-2017">
				                </div>

				            </div>

				          </div>

				           <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Term:</label>

				                <div class="col-md-8">
				                   <select class="form-control input-sm" name="ay_term" id="ay_term" required>
										<option value=""></option>
										<option value="First Semester">First Semester</option>
										<option value="Second Semester">Second Semester</option>
										<option value="Summer">Summer</option>
									</select>	
				                </div>

				            </div>

				          </div>
				           <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Academic Status:</label>

				                <div class="col-md-8">
				                   
				                   <select class="form-control input-sm" name="ay_status" id="ay_status" required>
										<option value=""></option>
										<option value="Active">Active</option>
										<option value="Deactivated">Deactivate</option>
									</select>	
				                </div>
				                </div>

				            </div>
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-success" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

				<div class="form-group">
		            <div class="rows">
		              <div class="col-md-6">
		                <label class="col-md-6 control-label" for=
		                "otherperson"></label>

		                <div class="col-md-6">
			             
		                </div>
		              </div>

		              <div class="col-md-6" align="right">
		               

		               </div>
		              
		          </div>
		          </div>
					
				</form>
			

				</div><!--End of container-->
			

<?php include("footer.php") ?>



