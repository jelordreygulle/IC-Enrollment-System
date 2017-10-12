<?php
require_once("includes/initialize.php");
include 'header-fee.php';

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
			    <form action="delete_tuition.php" Method="POST">  					
				<table class="tftable" border="1">
					<caption><h3 align="left">List of Tuition Fees</h3></caption>
				  <thead>
				  	<tr>
				  		
				  		<th width="15%">Tuition Fee ID</th>
				  		<th width="20%">Tuition Fee Code</th>
				  		<th width="50%">Tuition Fee Description</th>
				  		<th width="15%">Amount</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 5;
										
					//total count record ($total_count)
					$countEmp = new TuiPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new TuiPagination($current_page, $per_page, $total_count);

				  	  $tuiid =  $_GET['tuid'];
				  	  $tuicode =  $_GET['tucode'];
				  	  $tuides =  $_GET['tudes'];
				  	  if ($tuiid == '' AND $tuicode == '' AND $tuides == ''){

				  	  		$mydb->setQuery("SELECT * FROM `tbl_tuition_fee`
											 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}

							");	

							

							loadresult();
				  	  	

				  	  }else{
							

							$mydb->setQuery("SELECT * FROM `tbl_tuition_fee`
											WHERE `tuition_fee_code`  LIKE '$mafcode'
											OR `tuition_fee_description` LIKE '$mafdes'
				  	  					 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}");
				  	  	loadresult();	
				  	  }

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $tui) {
					  		echo '<tr>';
					  		
					  		echo '<td><a href="./edit_tuition.php?id='.$tui->tuition_fee_id.'">' . $tui->tuition_fee_id.'</a></td>';
					  		echo '<td>'. $tui->tuition_fee_code.'</td>';
					  		echo '<td>'. $tui->tuition_fee_description.'</td>';
					  		echo '<td>'. $tui->tuition_fee_amount.'</td>';
					  		
					  		//echo '<td><a href = "studentrecords.php?studentId='.$mis->student_id.'" >Enrolled Subjects</a></td>';
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody></table>
				  <tfoot>
				  	<tr><td colspan="7">
				  		<?php	echo '<ul class="pagination" align="center">';
									
					if ($pagination->total_pages() > 1){
						//this is for previous record
						if ($pagination->has_previous_page()){
						echo ' <li><a href=./listoftuitionfee.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=./listoftuitionfee.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=./listoftuitionfee.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}
					?>
				</td>
			</tr>
				  </tfoot>	<br><br>
				
				<div class="btn-group">
				  <a href="newtuition.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				   
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



