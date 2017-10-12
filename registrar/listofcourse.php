<?php
require_once("includes/initialize.php");
include 'header.php';

?>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_course.php" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">List of Course</h3></caption>
				  <thead>
				  	<tr>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Course ID</th>
				  		 <th>Course Code</th>
				  		 <th>Major</th>
				  		<th>AY</th>
				  		
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	@$courseid =  $_GET['courseid'];
				  	  @$coursename =  $_GET['coursename'];
				  	  @$Major 	   =  $_GET['Major'];
				  					
				  	  
				  	  if ($coursename == '' AND $Major == ''){ 
					  		$mydb->setQuery("SELECT `course_id`, `course_code`, `major`, `ay` 
					  						 FROM `tbl_course`
											 ");
				  		
						  	loadresult();
					  	}else{
					  		$mydb->setQuery("SELECT `course_id`, `course_code`, `major`, `ay` 
					  						 FROM `tbl_course`
											WHERE `course_code`='{$coursename}'
											OR `major`='{$Major}' OR `course_id`='{$courseid}'");
					  		loadresult();

					  	}
				function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();
				  		$mess='None';

						foreach ($cur as $result) {
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->course_id. '"/>
				  				<a href="editCourse.php?id='.$result->course_id.'">' . $result->course_id.'</a></td>';
				  		echo '<td>'. $result->course_code.'</td>';

				  	
									if ($result->major == '') {
										echo '<td>'. $mess.'</td>';
									}

									else{
										echo '<td>'. $result->major.'</td>';


									}

				  		echo '<td>'. $result->ay.'</td>';
				  		
				  		echo '</tr>';
				  		} 
				  	}	
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td><td></td></tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
				  <a href="newCourse.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



