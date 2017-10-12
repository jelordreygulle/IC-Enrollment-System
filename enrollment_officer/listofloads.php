

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

<div class="col-md-14">
		<div class="well">
			    <form action="delete_instructor.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Faculty Loads</h3></caption>
				  <thead>
				  	<tr>
				  		
				  		<th>Term</th>
				  		<th>School Year</th>
				  		<th>Options</th>
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	
				  	
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 5;
										
					//total count record ($total_count)
					$countEmp = new InstructorPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new InstructorPagination($current_page, $per_page, $total_count);

				  	  @$faculty_id = $_GET['instructorId'];
				  
				  		$mydb->setQuery("SELECT DISTINCT `AY` , `term`
											FROM `tbl_instructor_load`
											WHERE `instructor_id` ='$faculty_id'
							LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}
							");
				  		loadresult();
				  
				  	  		

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {

								$new_fac = $_GET['instructorId'];
						  		echo '<tr>';

						  		
						  		echo '<td>'. $result->AY.'</td>';
						  		echo '<td>'. $result->term.'</td>';
						  		
					 			echo '<td><a href="instructor_subjects.php?instructorId='.$new_fac.'&term='.$result->term.'&ay='.$result->AY.'">View List of Subjects</a></td>';
						  		
						  		
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7">
				  		<?php	echo '<ul class="pagination" align="center">';
									
					if ($pagination->total_pages() > 1){
						//this is for previous record
						if ($pagination->has_previous_page()){
						echo ' <li><a href=./listOfinstructor.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=./listOfinstructor.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=./listOfinstructor.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}
					?>
				</td>
			</tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
					<a href="filter_faculty.php" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</a>

				<?php

						$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
												FROM  `tbl_ay` 
												WHERE  `ay_status` =  'Active'
												LIMIT 0 , 30";
									$resa = mysql_query($querya) or die ("Could not execute query2.");
									$row2a = mysql_fetch_row($resa);
									$ayy2 = $row2a[1];
									$tt = $row2a[2];

									$num_ni = mysql_num_rows($resa);

					
						if($num_ni == 1){
							echo  '<a href="instructor_subjects.php?instructorId='.$_GET['instructorId'].'&term='.$tt.'&ay='.$ayy2.'" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> New Load</a>';

						}
						else if($num_ni > 1){
							echo  '<a href="instructor_subjects.php?instructorId='.$_GET['instructorId'].'&term='.$tt.'&ay='.$ayy2.'" disabled class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> New Load</a>**Conflict with the other schedules. Please contact you Administrator.';

						}
						else{
							echo  '<a href="instructor_subjects.php?instructorId='.$_GET['instructorId'].'&term='.$tt.'&ay='.$ayy2.'" disabled class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> New Load</a>**This academic year is already expired.';

						}



				?>
				 
				  
				  </div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
<div>
<?php include("footer.php") ?>





