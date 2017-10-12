<?php
require_once("includes/initialize.php");
include 'header.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('listofay.php?ay='.$_POST['ay'].'&ay_status='.$_POST['ay_status'].'&ay_term='.$_POST['ay_term']);
			
}

?>		
		<div class="rows">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-12">
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Query Options</h3>
					  </div>
					  <div class="panel-body">

					  
				          <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Academic Year:</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="ay" name="ay" type=
				                  "text" placeholder="e.g 2016-2017">
				                </div>

				            </div>

				          </div>

				           <div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				             <label class="col-md-3 control-label" for=
				                "FullName">Term:</label>

				                <div class="col-md-8">
				                   <select class="form-control input-sm" name="ay_term" id="ay_term">
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
				                   
				                   <select class="form-control input-sm" name="ay_status" id="ay_status">
										<option value=""></option>
										<option value="Active">Active</option>
										<option value="Deactivated">Deactivate</option>
									</select>	
				                </div>
				                </div>

				            </div>

				          </div>
				           
						<div class="form-group" id="instuctorId">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" name="search" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    <a href="newAY.php" name="add" class="btn btn-default"> <span class="glyphicon glyphicon-plus"></span> Add</a>
									  
									  
									</div>
				                </div>

				            </div>

				          </div>
				          



					  </div>
					</div>
									
				</form>
		  </div>
		    <div class="col-md-8">
		  
		  </div>

		</div>		
			
</div><!--End of container-->
			

<?php include("footer.php") ?>



