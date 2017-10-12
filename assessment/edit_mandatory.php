<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php

	$manid = $_GET['id'];
	$singleman = new mandatory();
	$object = $singleman->single_mandatory($manid);


if (isset($_POST['savemandatory'])){

	if ($_POST['mafcode'] == "" OR $_POST['mafdes'] == "" OR $_POST['mafamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$mocode   		= $_POST['mafcode'];
			$modesc	 		= $_POST['mafdes'];
			$moamount		= $_POST['mafamount'];

			

				$man = new mandatory();
				
				
		
				$man->mandatory_fee_code		 		= $mocode;
				$man->mandatory_fee_description			= $modesc;
				$man->mandatory_fee_amount		 		= $moamount;
				

				$man->update($manid); 
						
				 message($modesc. " has updated successfully!", "info");
				 	redirect('./listofmandatoryfee.php?mafid=&mafcode=&mafdes=');
				
	 

		
	
}}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">









					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Mandatory Fee Particular</legend>
								


						


							<div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Mandatory Fee Code</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafcode" name="mafcode" placeholder=
													  "" type="text" value="<?php echo $object->mandatory_fee_code;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Mandatory Fee Description</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafdes" name="mafdes" placeholder=
													  "" type="text" value="<?php echo $object->mandatory_fee_description;?>">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafamount" name="mafamount" placeholder=
													  "" type="text" value="<?php echo $object->mandatory_fee_amount;?>">
				              </div>
				            </div>
				          </div>

				           





				  

						
						 <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-6">
				                <button class="btn btn-success" name="savemandatory" type="submit" data-toggle="modal" data-target="#new_mandatory_modal" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               
				              <!-- Modal save new miscelleneous fee particulars-->
				               <div class="modal fade" id="new_mandatory_modal" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new mandatory fee particular(s)?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="savemandatory" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
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



