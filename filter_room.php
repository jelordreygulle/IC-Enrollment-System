<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('listofroom.php?roomid='.$_POST['roomid'].'&building='.$_POST['building']);
			
}

?>		
		<div class="rows">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-7">
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Rooms Query Options</h3>
					  </div>
					  <div class="panel-body">

					     
					  	 <div class="form-group" id="subjcode">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Room ID:</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="roomid" name="roomid" placeholder=
													  "" type="text" value="">
				              </div>

				            </div>

				          </div>
				          


					     <div class="form-group" id="subjcode">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Building/Room:</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="building" name="building" placeholder=
													  "" type="text" value="">
				              </div>

				            </div>

				          </div>

					   



				         

						<div class="form-group" id="subjcode">
				            <div class="col-md-11">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" name="search" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    <a href="newroom.php" name="add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</a>
									  						  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
		  </div>
		    <div class="col-md-3">
		  
		  </div>

		</div>		
			
</div><!--End of container-->
			

<?php include("footer.php") ?>



