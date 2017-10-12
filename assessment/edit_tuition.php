<?php
require_once("includes/initialize.php");
include 'header-fee.php';
$tuiid = $_GET['id'];
$singletui = new tuition();
$object = $singletui->single_tuition($tuiid);
?>
<div class="container">
<?php
if (isset($_POST['savetuition'])){

	if ($_POST['tfcode'] == "" OR $_POST['tfdes'] == "" OR $_POST['tfamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$tcode   		= $_POST['tfcode'];
			$tdesc	 		= $_POST['tfdes'];
			$tamount		= $_POST['tfamount'];

			$tui = new tuition();
			$tui->tuition_fee_code		 		= $tcode;
			$tui->tuition_fee_description		= $tdesc;
			$tui->tuition_fee_amount		 	= $tamount;
				

			$istrue = $tui->update($tuiid); 
			message("New Tuition Fee Particulars successfully Updated!","success");
			redirect('./listoftuitionfee.php?tuid=&tucode=&tudes=');
				

			}



			
		 
	 

		
	
}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">









					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Tuition Fee Particular</legend>
								


						


							<div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Tuition Fee Code</label>

				              <div class="col-md-6">
				                 <input readonly class="form-control input-sm" id="tfcode" name="tfcode" placeholder=
													  "" type="text" value="<?php echo $object->tuition_fee_code;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Tuition Fee Description</label>

				              <div class="col-md-6">
				                 <input readonly class="form-control input-sm" id="tfdes" name="tfdes" placeholder=
													  "" type="text" value="<?php echo $object->tuition_fee_description;?>">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="tfamount" name="tfamount" placeholder=
													  "" type="text" value="<?php echo $object->tuition_fee_amount;?>">
				              </div>
				            </div>
				          </div>

				           





				  

						
						 <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-6">
				                <button class="btn btn-success" name="savetuition" type="submit" data-toggle="modal" data-target="#new_tuition_modal" ><span class="glyphicon glyphicon-floppy-save"></span> Update</button>
				               
				              <!-- Modal save new miscelleneous fee particulars-->
				               <div class="modal fade" id="new_tuition_modal" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to update the tuition fee particular(s)?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="savetuition" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
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



