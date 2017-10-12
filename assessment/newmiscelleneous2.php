<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php
if (isset($_POST['savemiscelleneous'])){

	if ($_POST['mfcode'] == "" OR $_POST['mfdes'] == "" OR $_POST['mfamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$miscode   		= $_POST['mfcode'];
			$misdesc	 	= $_POST['mfdes'];
			$misamount		= $_POST['mfamount'];

			$jojo = "SELECT * FROM `tbl_miscelleneous_fee` WHERE `miscelleneous_fee_code` ='$miscode' or `miscelleneous_fee_description` = '$misdesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Miscelleneous code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newmiscelleneous2.php?mfamount='. $misamount.'&mfcode='.$miscode.'&mfdes='.$misdesc);

			}

			else{

				$mis = new miscelleneous();
				
				
		
				$mis->miscelleneous_fee_code		 		= $miscode;
				$mis->miscelleneous_fee_description			= $misdesc;
				$mis->miscelleneous_fee_amount		 		= $misamount;
				

				 $istrue = $mis->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Miscelleneous created successfully!","success");
				 	redirect('./listofmiscelleneousfee.php?mfid=&mfcode=&mfdes=');
				 }


			}



			
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewmiscelleneous'])) {
	if ($_POST['mfcode'] == "" OR $_POST['mfdes'] == "" OR $_POST['mfamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$miscode   		= $_POST['mfcode'];
			$misdesc	 	= $_POST['mfdes'];
			$misamount		= $_POST['mfamount'];

			$jojo = "SELECT * FROM `tbl_miscelleneous_fee` WHERE `miscelleneous_fee_code` ='$miscode' or `miscelleneous_fee_description` = '$misdesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Miscelleneous code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newmiscelleneous2.php?mfamount='. $misamount.'&mfcode='.$miscode.'&mfdes='.$misdesc);

			}

			else{

				$mis = new miscelleneous();
				
				
		
				$mis->miscelleneous_fee_code		 		= $miscode;
				$mis->miscelleneous_fee_description			= $misdesc;
				$mis->miscelleneous_fee_amount		 		= $misamount;
				

				 $istrue = $mis->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Miscelleneous created successfully!","success");
				 	
				 }


			}



			
	}		 
	 

}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Miscelleneous Fee Particular</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Misc. Fee Code</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="mfcode" name="mfcode" placeholder=
													  "" type="text" value="<?php echo $_GET['mfcode']; ?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Misc. Fee Description</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="mfdes" name="mfdes" placeholder=
													  "" type="text" value="<?php echo $_GET['mfdes']; ?>">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="mfamount" name="mfamount" placeholder=
													  "" type="text" value="<?php echo $_GET['mfamount']; ?>">
				              </div>
				            </div>
				          </div>

				           





				  

						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-success" name="savemiscelleneous" type="submit" data-toggle="modal" data-target="#new_miscelleneous_modal" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               
				              <!-- Modal save new miscelleneous fee particulars-->
				               <div class="modal fade" id="new_miscelleneous_modal" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new miscelleneous fee particular(s)?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="savemiscelleneous" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>

							  <button class="btn btn-default" name="saveandnewmiscelleneous" type="submit" data-toggle="modal" data-target="#new_miscelleneous_modal_new" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              

				               <div class="modal fade" id="new_miscelleneous_modal_new" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new miscelleneous fee particular(s) and add new?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="saveandnewmiscelleneous" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>


				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



