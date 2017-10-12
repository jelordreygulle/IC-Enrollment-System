<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_subject.php" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">List of Subject</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="25%" >Subject Code</th>
				  		<th width="40%" >Description</th>
				  		<th width="10%" >Unit(lec)</th>
				  		<th width="10%" >Unit(lab)</th>
				  		<th width="25%" >Pre-requisite</th>
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
						
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;	
					$per_page = 7;
					$countEmp = new SubjPagination();
					$total_count = $countEmp->count_allrecords();					
					$pagination = new SubjPagination($current_page, $per_page, $total_count);
				  	  @$subjid =  $_GET['subjectid'];
				  	  @$subjcode =  $_GET['subjectcode'];
				  	  
				  	  
				  	  if ($subjcode == '' AND $subjid==''){ 
					  		$mydb->setQuery("SELECT  `subject_id` ,  `subject_code` ,  `description_title` ,   `units_lec` ,   `units_lab`,  `requisites_subject_id` 
												FROM  `tbl_subject`
					  		 					LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();
					  	}else{
					  		$mydb->setQuery("SELECT  `subject_id` ,  `subject_code` ,  `description_title` ,   `units_lec` ,   `units_lab` ,  `requisites_subject_id` 
											FROM  `tbl_subject`
										WHERE `subject_code`='{$subjcode}'
										or `subject_id`='{$subjid}' 
										");
					  		loadresult();

					  	}

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->subject_id. '"/>
						  				<a href="editSubject.php?id='.$result->subject_id.'">' . $result->subject_code.'</a></td>';
						  		echo '<td width="30%">'. $result->description_title.'</td>';
						  		echo '<td>'. $result->units_lec.'</td>';
						  		echo '<td>'. $result->units_lab.'</td>';
						  		echo '<td>'. $result->requisites_subject_id.'</td>';
						  		
						  		
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7"><?php	echo '<ul class="pager" align="center">';

				  /*	if ($pagination->total_pages() > 1) {
						$last = $page - 2;
						echo @"<li><a href=\"$_PHP_SELF?page=$last\">Previous</a></li>";
					} else if ($page == 0) {
						echo @"<li><a href=\"$_PHP_SELF?page=$page\"> <li>Next</a></li>";
					} else if ($page > 0) {
						$last = $page - 2;
						echo @"<li><a href=\"$_PHP_SELF?page=$last\">Previous</a></li> ";
						echo @"<li><a href=\"$_PHP_SELF?page=$page\">Next</a></li>";
					}*/

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
					/*				
					if ($pagination->total_pages() > 1){
						//this is for previous record
						if ($pagination->has_previous_page()){
						echo ' <li><a href=listofsubject.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=listofsubject.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=listofsubject.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}*/
					?></td></tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
				  <a href="newsubject.php" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



