<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php

$Instructor = new Instructor();
$cur = $Instructor->single_instructor($_GET['id']);
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

		
			$inst->name					 = $name;
			$inst->address 				 = $address;
			$inst->position 			 = $position;	
			$inst->specialization 		 = $specialization;
			$inst->employment_status	 = $empStats;


			 $inst->update($_GET['id']); 
		
			 	
			 	message("New Instructor created successfully!","success");
			 	redirect('listofinstructor.php?instuctorId=&FullName=');
			 
		

		
	}
}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend>Edit Faculty</legend>
															


				          

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "address">Fullname:</label>

				              <div class="col-md-8">
				              	<input name="deptid" type="hidden" value="">
				                 <input class="form-control input-sm" id="name" name="name" placeholder=
													  "Fullname" type="text" value="<?php echo $cur->name; ?>">
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
													  "Current Address" type="text" value="<?php echo $cur->address; ?>">
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
													  "Position" type="text" value="<?php echo $cur->position; ?>">
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
													  "Specialization" type="text" value="<?php echo $cur->specialization; ?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "empstats">Employment Status:</label>

				              <div class="col-md-8">
				               <select required class="form-control input-sm" name="empstats" id="empstats">
				                	<option value="<?php echo $cur->employment_status; ?>"><?php echo $cur->employment_status; ?></option>
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
				                <button class="btn btn-danger" name="savefaculty" type="submit" ><span class="glyphicon glyphicon-repeat"></span> Update</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



