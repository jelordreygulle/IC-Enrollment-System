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
			    <form action="delete_mandatory.php" Method="POST">  					
				<table class="tftable" border="1">
					<caption><h3 align="left">List of Mandatory Fees</h3></caption>
				  <thead>
				  	<tr>
				  		
				  		<th width="15%">Mandatory Fee ID</th>
				  		<th width="20%">Mandatory Fee Code</th>
				  		<th width="50%">Mandatory Fee Description</th>
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
					$countEmp = new ManPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new ManPagination($current_page, $per_page, $total_count);

				  	  $mafid =  $_GET['mafid'];
				  	  $mafcode =  $_GET['mafcode'];
				  	  $mafdes =  $_GET['mafdes'];
				  	  if ($mafid == '' AND $mafcode == '' AND $mafdes == ''){

				  	  		$mydb->setQuery("SELECT * FROM `tbl_mandatory_fee`
											 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}

							");	

							

							loadresult();
				  	  	

				  	  }else{
							

							$mydb->setQuery("SELECT * FROM `tbl_mandatory_fee`
											WHERE `mandatory_fee_code`  LIKE '$mafcode'
											OR `mandatory_fee_description` LIKE '$mafdes'
				  	  					 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}");
				  	  	loadresult();	
				  	  }

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $man) {
					  		echo '<tr>';
					  		
					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$man->mandatory_fee_id. '"/>
					  				<a href="./edit_mandatory.php?id='.$man->mandatory_fee_id.'">' . $man->mandatory_fee_id.'</a></td>';
					  		echo '<td>'. $man->mandatory_fee_code.'</td>';
					  		echo '<td>'. $man->mandatory_fee_description.'</td>';
					  		echo '<td>'. $man->mandatory_fee_amount.'</td>';
					  		
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
						echo ' <li><a href=./listofmiscelleneousfee.php?page='.$pagination->previous_page().'>&laquo; </a> </li>';
						}
						 //it loops to all pages
					 	 for($i = 1; $i <= $pagination->total_pages(); $i++){
							//check if the value of i is set to current page	
							if ($i == $pagination->current_page){
							//then it sset the i to be active or focused
								echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
							 }else {
							 //display the page number
								echo ' <li><a href=./listofmiscelleneousfee.php?page='.$i.'> '. $i .' </a></li>';
							 } 
						 }
						//this is for next record		
						if ($pagination->has_next_page()){
						echo ' <li><a href=./listofmiscelleneousfee.php?page='.$pagination->next_page().'>&raquo;</a></li> ';
						}
						
					}
					?>
				</td>
			</tr>
				  </tfoot>	<br><br><br>
				
				<div class="btn-group">
				  <a href="newmandatory.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				   <button type="submit" class="btn btn-danger" name="delete" data-toggle="modal" data-target="#delete_mandatory"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					
				    <div class="modal fade" id="delete_mandatory" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-danger">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Warning Message</h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to delete the selected mandatory fee particulars?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>







					<a href="filter_mandatory.php" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>  Search</a>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



