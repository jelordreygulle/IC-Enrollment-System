<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['search'])){

	redirect('./try.php?course='. $_POST['course'].'&term='.$_POST['ay'].'&ay='.$_POST['term']);
			
}

?>		
		<div class="rows">
		 

		  <div class="col-md-12">
		  	
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-search"></span> Search Student</h3>
					  </div>
					  <div class="panel-body">

					   




					  	<div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-5 control-label" for=
				                "course">Course:</label>

				                <div class="col-md-5">
				                 <select class="form-control input-sm" name="course" id="course" required>
				                 <option></option>
				                 <option value="All Student">All Student</option>
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code .'</option>';
				                  	}

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>

				          <div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-5 control-label" for=
				                "ay">AY:</label>

				                <div class="col-md-5">
				                 <select class="form-control input-sm" name="ay" id="ay" required>
				                 <option></option>
				                  	<?php
				                  	$course = new ay();
				                  	$cur = $course->allSchoolyr2();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->ay.'">'.$course->ay .'</option>';
				                  	}

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>

				           <div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-5 control-label" for=
				                "term">Term:</label>

				                <div class="col-md-5">
				                 <select class="form-control input-sm" name="term" id="term" required>
				                 <option></option>
				                 <option value="First Semester">First Semester</option>
				                 <option value="Second Semester">Second Semester</option>
				                 <option value="Summer">Summer</option>
				                  	
										
									</select>	
				                </div>

				            </div>

				          </div>











				          
				         
						<div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-5 control-label"></label>

				                <div class="col-md-5">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Export to Excel</button>
									    <a href="try.php?course=All Student&term=&ay=" class="btn btn-default"><span class="glyphicon glyphicon-download"></span> Export All</a>
									    <button type="Reset" name="search" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    
									  
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



