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
			    <form action="delete_miscelleneous.php" Method="POST">  					
				<table class="tftable" border="1">
					<caption><h3 align="left">List of Miscelleneous Fees</h3></caption>
				  <thead>
				  	<tr>
				  		<br>
				  		<th width="10%">Misc. Fee ID</th>
				  		<th width="15%">Misc. Fee Code</th>
				  		<th width="55%">Misc. Fee Description</th>
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
					$countEmp = new MisPagination();
					$total_count = $countEmp->count_allrecords();
					
					$pagination = new MisPagination($current_page, $per_page, $total_count);

				  	  $id =  $_GET['mfid'];
				  	  $mfcodes =  $_GET['mfcode'];
				  	  $mfdess =  $_GET['mfdes'];
				  	  if ($id == '' AND $mfcodes == '' AND $mfdess == ''){

				  	  		$mydb->setQuery("SELECT * FROM `tbl_miscelleneous_fee`
											 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}

							");	

							

							loadresult();
				  	  	

				  	  }else{
							

							$mydb->setQuery("SELECT *
											FROM `tbl_miscelleneous_fee`
											WHERE `miscelleneous_fee_code` LIKE '$mfcodes'
											OR `miscelleneous_fee_description` LIKE '$mfdess'
				  	  					 LIMIT {$pagination->per_page} OFFSET {$pagination->offset()}");
				  	  	loadresult();	
				  	  }

				  		
				  		
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $mis) {
					  		echo '<tr>';
					  		
					  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$mis->miscelleneous_fee_id. '"/>
					  				<a href="./edit_miscelleneous.php?id='.$mis->miscelleneous_fee_id.'">' . $mis->miscelleneous_fee_id.'</a></td>';
					  		echo '<td>'. $mis->miscelleneous_fee_code.'</td>';
					  		echo '<td>'. $mis->miscelleneous_fee_description.'</td>';
					  		echo '<td>'. $mis->miscelleneous_fee_amount.'</td>';
					  		
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
				  <a href="newmiscelleneous.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				   <button type="submit" class="btn btn-danger" name="delete" data-toggle="modal" data-target="#delete_miscelleneous"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					
				    <div class="modal fade" id="delete_miscelleneous" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-danger">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Warning Message</h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to delete The selected mscelleneous fee particulars?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>







					<a href="filter_miscelleneous.php" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>  Search</a>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



