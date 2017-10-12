<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['savefaculty'])){

	if ($_POST['position'] == "" OR $_POST['name'] == "" OR $_POST['address'] == "" OR $_POST['specialization'] == "" OR $_POST['empstats'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$inst = new Instructor();
		$name   		= $_POST['name'];
		$address	 	= $_POST['address'];
		$specialization = $_POST['specialization'];
		$empStats 		= $_POST['empstats'];
		$position 		= $_POST['position'];	

		$res = $inst->find_all_instructor($name);
				
		if ($res >=1) {
			message("Instructor name already exist!","error");
			check_message();
		}else{
			$inst->name					 = $name;
			$inst->address 				 = $address;
			$inst->position 			 = $position;	
			$inst->specialization 		 = $specialization;
			$inst->employment_status	 = $empStats;


			 $istrue = $inst->create(); 
			 if ($istrue == 1){
			 	
			 	message("New Instructor created successfully!","success");
			 	redirect('listofinstructor.php?instuctorId=&FullName=');
			 }else{

				message("No Instructor created!","error");
			 	redirect('newfaculty.php');

			 }
		}	 

		
	}
}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend>New Faculty</legend>
															


				          

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "address">Fullname:</label>

				              <div class="col-md-8">
				              	<input name="deptid" type="hidden" value="">
				                 <input class="form-control input-sm" id="name" name="name" placeholder=
													  "Fullname" type="text" value="">
				              </div>
				            </div>
				          </div>


				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "address">Current Address:</label>

				              <div class="col-md-8">
				              	<input name="deptid" type="hidden" value="">
				                 <input class="form-control input-sm" id="address" name="address" placeholder=
													  "Current Address" type="text" value="">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "position">Position:</label>

				              <div class="col-md-8">
				              	<input name="deptid" type="hidden" value="">
				                 <input class="form-control input-sm" id="position" name="position" placeholder=
													  "Position" type="text" value="">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "Gender">Gender:</label>

				              <div class="col-md-8">
				               <select required class="form-control input-sm" name="Gender" id="Gender">
				               		<option value="">--select--</option>
				                	<option value="Male">Male</option>
				                	<option value="Female">Female</option>
				                	
				                </select>	
				              </div>
				            </div>
				          </div>

				         

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "specialization">Specialization:</label>

				              <div class="col-md-8">
				              	<input name="deptid" type="hidden" value="">
				                 <input required class="form-control input-sm" id="specialization" name="specialization" placeholder=
													  "Specialization" type="text" value="">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "empstats">Employment Status:</label>

				              <div class="col-md-8">
				               <select required class="form-control input-sm" name="empstats" id="empstats">
				                	<option value="">--select--</option>
				                	<option value="Active">Active</option>
				                	<option value="Resign">Resign</option>
				                	<option value="Retired">Retired</option>
				                	
				                </select>	
				              </div>
				            </div>
				          </div>

				          
						
												
						 <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-success" name="savefaculty" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



