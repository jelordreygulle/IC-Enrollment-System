<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php

	$misid = $_GET['id'];
	$singlemis = new miscelleneous();
	$object = $singlemis->single_miscelleneous($misid);


if (isset($_POST['savemiscelleneous'])){

	if ($_POST['mfcode'] == "" OR $_POST['mfdes'] == "" OR $_POST['mfamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$micode   		= $_POST['mfcode'];
			$midesc	 		= $_POST['mfdes'];
			$miamount		= $_POST['mfamount'];

			

				$mis = new miscelleneous();
				
				
		
				$mis->miscelleneous_fee_code		 		= $micode;
				$mis->miscelleneous_fee_description			= $midesc;
				$mis->miscelleneous_fee_amount		 		= $miamount;
				

				 $mis->update($misid); 
				 message($midesc. " has updated successfully!", "info");
				 
				 redirect('./listofmiscelleneousfee.php?mfid=&mfcode=&mfdes=');
				
	 

		
	
}}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">









					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Miscelleneous Fee Particular</legend>
								


						


							<div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Miscelleneous Fee Code</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mfcode" name="mfcode" placeholder=
													  "" type="text" value="<?php echo $object->miscelleneous_fee_code;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Miscelleneous Fee Description</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mfdes" name="mfdes" placeholder=
													  "" type="text" value="<?php echo $object->miscelleneous_fee_description;?>">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mfamount" name="mfamount" placeholder=
													  "" type="text" value="<?php echo $object->miscelleneous_fee_amount;?>">
				              </div>
				            </div>
				          </div>

				           





				  

						
						 <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-6">
				                <button class="btn btn-success" name="savemiscelleneous" type="submit" data-toggle="modal" data-target="#edit_miscelleneous_modal" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               
				              <!-- Modal save new miscelleneous fee particulars-->
				               <div class="modal fade" id="edit_miscelleneous_modal" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to Edit this Miscelleneous fee particular(s)?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="savemiscelleneous" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
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



