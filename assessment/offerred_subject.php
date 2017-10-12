<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';

							                                 	$ayy = $_SESSION['accademic'];
							                                    $querya ="SELECT  `ay_id` ,  `ay` 
																			FROM  `tbl_ay` 
																			WHERE  `ay_id` =  '$ayy'
																			LIMIT 0 , 30";
							                                    $resa = mysql_query($querya) or die ("Could not execute query2.");
							                          
							                                    $row2a = mysql_fetch_row($resa);
							                                    
							                                      $ayida = $row2a[0];
							                                      $ayy2 = $row2a[1];

							                                    
$tt = $_SESSION['term'];

?>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_subject.php" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Subject Offering as of AY <?php echo $ayy2; ?> - <?Php echo $_SESSION['term'];?></h3></caption>
				  <thead>
				  	<tr>
				  		<th width="10%" >Subj. Code</th>
				  		<th width="25%" >Descriptive Title</th>
				  		<th width="5%" >Unit(lec)</th>
				  		<th width="5%" >Unit(lab)</th>
				  		<th width="15%" >Section</th>
				  		<th width="25%" >Course</th>
				  		
				  		<th width="10%" >More</th>
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
						
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;	
					$per_page = 8;
					$countEmp = new SubjPagination_offerred();
					$total_count = $countEmp->count_allrecords2();					
					$pagination = new SubjPagination_offerred($current_page, $per_page, $total_count);
				  	  @$subjid =  $_GET['subjectid'];
				  	  @$subjcode =  $_GET['subjectcode'];
				  	  
				  	  
				  	 
					  		$mydb->setQuery("SELECT `tbl_offerred_subject` . * , `tbl_room` . * , `tbl_course` . * , `tbl_subject` . *
											FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_course
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
											AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
											AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`AY` = '$ayy2'
							  		 		LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();
					 

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->offerred_subject_id. '"/>
						  				<a href="editSubject.php?id='.$result->offerred_subject_id.'">' . $result->subject_code.'</a></td>';
						  		echo '<td width="30%">'. $result->description_title.'</td>';
						  		echo '<td>'. $result->units_lec.'</td>';
						  		echo '<td>'. $result->units_lab.'</td>';
						  		echo '<td>'. $result->section.'</td>';
						  		echo '<td>'. $result->course_abb.' - '.$result->Major.'</td>';
						  		echo '<td><a href = "offered_subject_details.php?offeredsubjectId='.$result->offerred_subject_id.'" >Details</a></td>';
						  		
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7"><?php	echo '<ul class="pager" align="center">';


					if ($pagination->total_pages() > 1){

						echo 'Page ' .$current_page .' of '. $pagination->total_pages();

						if ($current_page == 1 ){
							echo ' <li class="disabled"><a href=listofsubject.php?page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=listofsubject.php?page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=listofsubject.php?page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=listofsubject.php?page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=listofsubject.php?page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=listofsubject.php?page='.($current_page + 1) .'>Next</a></li> ';
						}
						
					
							
						if ($current_page ==  $pagination->total_pages() ){
													
							echo ' <li class="disabled"><a href=listofsubject.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}else{
							echo ' <li><a href=listofsubject.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}
							
					}
					
					?></td></tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
				  <a href="newofferedsubject.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New Subject Offered </a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



