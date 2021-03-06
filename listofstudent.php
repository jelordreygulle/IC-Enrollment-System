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
		<div class="well">
			    <form action="delete_student.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Student</h3></caption>
				  <thead>
				  	<tr>
				  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th>Fullname</th>
				  		<th>Course</th>
				  		<th>Options</th>
				  	
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 10;
										
					//total count record ($total_count)
					$countEmp = new StudPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new StudPagination($current_page, $per_page, $total_count);

				  	  @$idno =  $_GET['idno'];
				  	  @$lname =  $_GET['lname'];
				  	  @$fname =  $_GET['fname'];
				  	  if ($idno == '' AND $lname=='' AND $fname == ''){
				  	  	$mydb->setQuery("SELECT DISTINCT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name',  `tbl_course`.`course_code` ,  `tbl_student`.`course_id` ,  `tbl_course`.`course_id` 
											FROM tbl_student, tbl_course
											WHERE (
											 `tbl_student`.`course_id` =  `tbl_course`.`course_id`
											) LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}");
				  	  	loadresult();

				  	  }else{
							$mydb->setQuery("SELECT DISTINCT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name',  `tbl_course`.`course_code` ,  `tbl_student`.`course_id` ,  `tbl_course`.`course_id` 
												FROM tbl_student, tbl_course
												WHERE (`tbl_student`.`course_id` =  `tbl_course`.`course_id`
												AND (`tbl_student`.`student_id` =  '$idno'
												OR  `tbl_student`.`lname` =  '$lname'
												OR  `tbl_student`.`fname`  =  '$fname')

												)
												LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}

							");	

							

							loadresult();	
				  	  }

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';

					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->student_id. '"/>
					  				<a href="./edit_studentinfo.php?id='.$student->student_id.'">' . $student->student_id.'</a></td>';
					  		echo '<td>'. $student->Name.'</td>';
					  		echo '<td>'. $student->course_code.'</td>';
					  		
					  		echo '<td><a href = "studentrecords.php?studentId='.$student->student_id.'&course='.$student->course_id.'" >Enrolled Subjects</a></td>';
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
						echo ' <li><a href=./listofstudent.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=./listofstudent.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=./listofstudent.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}
					?>
				</td>
			</tr>
				  </tfoot>	
				</table>
				<br>
				<div class="btn-group">
				  <a href="newstudent.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				   
				   <a href="studFilter.php" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</a>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



