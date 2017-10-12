<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('./listoftuitionfee.php?tucode='. $_POST['tfcode'].'&tudes='.$_POST['tfdes'].'&tuid='.$_POST['tfid']);
			
}

?>		
		<div class="rows">
		  <div class="col-md-2">
		  
		  </div>

		  <div class="col-md-8">
		  	
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Tuition Fee Query Options</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="tfid">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfid">Tuition Fee ID</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="tfid" name="tfid" placeholder=
													  "" type="number" value="">
				              </div>

				            </div>

				          </div>
				          <div class="form-group" id="tfcode">
				            <div class="col-md-12">
				             <label class="col-md-4 control-label" for=
				                "mfcode">Tuition Fee Code</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="tfcode" name="tfcode" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>
				          <div class="form-group" id="tfdes">
				            <div class="col-md-12">
				               <label class="col-md-4 control-label" for=
				                "mfdes">Tuition Fee Description</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="tfdes" name="tfdes" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>

						<div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" name="search" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    <a href="newtuition.php" name="add" class="btn btn-default"> <span class="glyphicon glyphicon-plus"></span> Add</a>
									  
									  
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



