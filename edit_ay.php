<?php
require_once("includes/initialize.php");
include 'header.php';
?>
<div class="container">
<?php

$ayid = $_GET['id'];
$singleay = new ay();
$object = $singleay->single_sy($ayid);

if (isset($_POST['save'])){

	if ($_POST['ay'] == "" OR $_POST['ay_term'] == "" OR $_POST['ay_status'] == "") {
		message("All field is required!", "error");
		check_message();
	}else{
		$sy = new ay();
		$ay				= $_POST['ay'];
		$ay_term   		= $_POST['ay_term'];
		$ay_status 		= $_POST['ay_status'];
		
			$sy->ay 			= $ay;
			$sy->ay_status 		= $ay_status;
			$sy->term 		 	= $ay_term;
			$sy->update($ayid); 
			
			 
			 	message("New [". $ay ."] Academic Year successfullycreated!","success");
				redirect('listofay.php');


		
	}
}

?>

		
		
			  <form class="form-horizontal well span6" action="#" method="POST">

					<fieldset>
						<legend>Update Academic Year</legend>
															
				          <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Academic Year:</label>

				                <div class="col-md-8">
				                  <input required class="form-control input-sm" id="ay" name="ay" value="<?php echo $object->ay; ?>" type=
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
										<option value="<?php echo $object->term; ?>"><?php echo $object->term; ?></option>
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
										<option value="<?php echo $object->ay_status; ?>"><?php echo $object->ay_status; ?></option>
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
				               <button type="submit" class="btn btn-success" name="save" data-toggle="modal" data-target="#save_curriculum"><span class="glyphicon glyphicon-refresh"></span> Update</button>
					
				    			<div class="modal fade" id="save_curriculum" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title"><strong>Confirmation Message</strong></h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to update this Academic Year?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="save" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>
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



