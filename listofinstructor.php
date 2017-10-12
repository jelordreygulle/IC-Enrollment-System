

<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>
<div class="container">
	<?php
		check_message();
			
		?>


<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
</style>


<div class="col-md-14">
		<div class="well">
			    <form action="delete_instructor.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Faculty</h3></caption>
				  <thead>
				  	<tr>
				  		<th>ID #</th>
				  		<th>Name</th>
				  		<th>Address</th>
				  		<th>Position</th>
				  		<th>Specialization</th>
				  		<th>Employment Status</th>
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



				  	 @$FullName = $_GET['FullName'] ;
				  	  @$faculty_id = $_GET['instuctorId'];
				  	?>
				  	<?php

				  	if ($FullName=='' and $faculty_id==''){
				  		$mydb->setQuery("SELECT * 
							FROM   tbl_instructor
							LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}
							");
				  		loadresult();
				  	}
				  	else if($FullName=='' AND $faculty_id !=''){

				  		$mydb->setQuery("SELECT *
											FROM tbl_instructor
											WHERE `instructor_id` ='$faculty_id'

							LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}
							");
							loadresult();


				  	}


				  	else{
				  			$mydb->setQuery("SELECT *
											FROM tbl_instructor
											WHERE `instructor_id` ='$faculty_id'
											OR `name` LIKE '%$FullName%'

							LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}
							");
							loadresult();
						}
				  	  		

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td><a href="edit_instructor.php?id='.$result->instructor_id.'">' . $result->instructor_id.'</a></td>';
						  		echo '<td>'. $result->name.'</td>';
						  		echo '<td>'. $result->address.'</td>';
						  		echo '<td>'. $result->position.'</td>';
						  		echo '<td>'. $result->specialization.'</td>';
						  		echo '<td>'. $result->employment_status.'</td>';
						  		
					 			echo '<td><a href="listofloads.php?instructorId='.$result->instructor_id.'">List of Loads</a></td>';
						  		
						  		
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
				</table><br>
				<div class="btn-group">
				  <a href="newfaculty.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <a href="filter_faculty.php" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</a>
				  </div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
<div>
<?php include("footer.php") ?>





