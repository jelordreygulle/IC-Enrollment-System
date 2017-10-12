<?php
require_once("includes/initialize.php");
include 'header-transaction.php';

?>
<div class="container">
	<?php
		check_message();
	?>
		<div class="well">
			    <form action="delete_student.php" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Student Assessment</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="15%">Assessment ID.</th>
				  		<th width="15%">Term</th>
				  		<th width="15%">Academic Year</th>
				  		<th width="10%">Status</th>
				  		<th width="55%">Optons</th>
				  		
				  		<th></th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 8;
										
					//total count record ($total_count)
					$countEmp = new AssessmentPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new AssessmentPagination($current_page, $per_page, $total_count);

				  	  @$idno =  $_GET['studentId'];
				  	  
				  	  
				  	  	$mydb->setQuery("SELECT * FROM `tbl_assessment` WHERE `student_id` = '$idno'
				  	  					LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}");
				  	  	loadresult();

				  	  
				  	  

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $assessment) {
					  		echo '<tr>';

					  		echo '<td><a href="./edit_studentinfo.php?id='.$assessment->assessment_id.'">' . $assessment->assessment_id.'</a></td>';
					  		echo '<td>'. $assessment->semester.'</td>';
					  		echo '<td>'. $assessment->AY.'</td>';
					  		echo '<td>'. $assessment->status.'</td>';
					  		echo '<td><a class="btn btn-default" href = "listofpayment.php?assessmentId='.$assessment->assessment_id.'" ><span class="glyphicon glyphicon-time"></span> Payment History</a>

					  					<a class="btn btn-info" href = "update_payment.php?assessmentId='.$assessment->assessment_id.'" ><span class="glyphicon glyphicon-repeat"></span> Update Student Payment</a>



					  			</td>';
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
						echo ' <li><a href=./listofstudent2.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=./listofstudent2.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=./listofstudent2.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}
					?>
				</td>
			</tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
			
				   
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



