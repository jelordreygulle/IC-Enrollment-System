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
					<caption><h3 align="left">List of Academic Years</h3></caption>
				  <thead>
				  	<tr>
				  		<th>Academic Year</th>
				  		<th>Term</th>
				  		<th>Academic Status</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
						
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;	
					$per_page = 7;
					$countEmp = new AYPagination();
					$total_count = $countEmp->count_allrecords();					
					$pagination = new AYPagination($current_page, $per_page, $total_count);
				  	  @$ay 			=  $_GET['ay'];
				  	  @$ay_status 	=  $_GET['ay_status'];
				  	  @$ay_term		=  $_GET['ay_term'];
				  	  
				  	  
				  	  if ($ay == '' AND $ay_status =='' AND $ay_term ==''){ 
					  		$mydb->setQuery("SELECT `ay_id`, `ay`, `ay_status`, `term` FROM `tbl_ay`
					  		 				LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();
					  	}else{
					  		$mydb->setQuery("SELECT `ay_id`, `ay`, `ay_status`, `term` FROM `tbl_ay`
										WHERE `ay` = '{$ay}'
										OR `ay_status` = '{$ay_status}'
										OR `term` = '{$ay_term}'
										");
					  		loadresult();

					  	}

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td><a href="edit_ay.php?id='.$result->ay_id.'">' . $result->ay.'</a></td>';
						  		echo '<td>'. $result->term.'</td>';
						  		echo '<td>'. $result->ay_status.'</td>';
						  	
						  		
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
							echo ' <li class="disabled"><a href=listofay.php?page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=listofay.php?page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=listofay.php?page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=listofay.php?page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=listofay.php?page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=listofay.php?page='.($current_page + 1) .'>Next</a></li> ';
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
				  <a href="neway.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				 </div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



