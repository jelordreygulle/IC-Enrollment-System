<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('listofcourse.php?idno='. $_POST['courseid']. $_POST['coursename'].'&Major='.$_POST['Major']);
			
}

?>		
		<div class="rows">
		  <div class="col-md-1">
		  
		  </div>

		  <div class="col-md-8">
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span>Course Query Options</h3>
					  </div>
					  <div class="panel-body">

					 
				          
					  	<div class="form-group" id="idno">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "coursename">Course ID:</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="coursename" name="courseid" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>

				          <div class="form-group" id="idno">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "coursename">Course Name:</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="coursename" name="coursename" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label" for=
				                "Major">Major:</label>

				                <div class="col-md-8">
				                  <input class="form-control input-sm" id="Major" name="Major" type=
				                  "text" placeholder="">
				                </div>

				            </div>

				          </div>
				        

						<div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    <a href="newcourse.php" name="add" class="btn btn-info"> <span class="glyphicon glyphicon-plus"></span> Add</a>
									  
									  
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



