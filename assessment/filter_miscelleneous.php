<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('./listofmiscelleneousfee.php?mfid='. $_POST['mfid'].'&mfcode='.$_POST['mfcode'].'&mfdes='.$_POST['mfdes']);
			
}

?>		
		<div class="rows">
		  <div class="col-md-2">
		  
		  </div>

		  <div class="col-md-8">
		  	
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Misscelleneous Fee Query Options</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="mfid">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfid">Misc. Fee ID</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="mfid" name="mfid" placeholder=
													  "" type="number" value="">
				              </div>

				            </div>

				          </div>
				          <div class="form-group" id="mfcode">
				            <div class="col-md-12">
				             <label class="col-md-4 control-label" for=
				                "mfcode">Misc. Fee Code</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="mfcode" name="mfcode" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-12">
				               <label class="col-md-4 control-label" for=
				                "mfdes">Misc. Fee Description</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="mfdes" name="mfdes" type=
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
									    <a href="newmiscelleneous.php" name="add" class="btn btn-default"> <span class="glyphicon glyphicon-plus"></span> Add</a>
									  
									  
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



