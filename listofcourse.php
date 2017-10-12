<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>

<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
</style>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_course.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Course</h3></caption>
				  <thead>
				  	<tr>
				  		<th>Course ID</th>
				  		 <th>Course Code</th>
				  		 <th>Major</th>
				  		<th>AY</th>
				  		<th>Option</th>
				  		
				 
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

				  		echo '<td><a href="editCourse.php?id='.$result->course_id.'">' . $result->course_id.'</a></td>';
				  		echo '<td>'. $result->course_code.'</td>';

				  	
									if ($result->major == '') {
										echo '<td>'. $mess.'</td>';
									}

									else{
										echo '<td>'. $result->major.'</td>';


									}

				  		echo '<td>'. $result->ay.'</td>';
				  		echo '<td><a href="curriculum.php?id='.$result->course_id.'">' . 'View Curriculum'.'</a></td>';
				  		
				  		echo '</tr>';
				  		} 
				  	}	
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="5"></td></tr>
				  </tfoot>	
				</table><br>
				<div class="btn-group">
				  <a href="newCourse.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span>  New Course</a>
				  <a href="courseFilter.php" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span>  Search</a>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



