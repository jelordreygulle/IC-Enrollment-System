<?php
require_once("includes/initialize.php");
include 'header-fee.php';
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

			$jojo = "SELECT * FROM `tbl_tuition_fee` WHERE `tuition_fee_code` ='$tcode' or `tuition_fee_description` = '$tdesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Tuition Fee code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newtuition2.php?tfamount='. $tamount.'&tfcode='.$tcode.'&tfdes='.$tdesc);

			}

			else{

				$tui = new tuition();
				
				
		
				$tui->tuition_fee_code		 		= $tcode;
				$tui->tuition_fee_description		= $tdesc;
				$tui->tuition_fee_amount		 	= $tamount;
				

				 $istrue = $tui->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Tuition Fee Particulars successfully created!","success");
				 	redirect('./listoftuitionfee.php?tuid=&tucode=&tudes=');
				 }


			}



			
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewtuition'])) {
	if ($_POST['tfcode'] == "" OR $_POST['tfdes'] == "" OR $_POST['tfamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$tcode   		= $_POST['tfcode'];
			$tdesc	 		= $_POST['tfdes'];
			$tamount		= $_POST['tfamount'];

			$jojo = "SELECT * FROM `tbl_tuition_fee` WHERE `tuition_fee_code` ='$tcode' or `tuition_fee_description` = '$tdesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Tuition Fee code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newtuition2.php?tuiamount='. $tamount.'&tuicode='.$tcode.'&tuides='.$tdesc);

			}

			else{

				$tui = new tuition();
				
				
		
				$tui->tuition_fee_code		 		= $tcode;
				$tui->tuition_fee_description		= $tdesc;
				$tui->tuition_fee_amount		 	= $tamount;
				

				 $istrue = $tui->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Tuition Fee Particulars successfully created!","success");
				 	
				 }


			}



			
	}		 
	 
	 

}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">









					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Tuition Fee Particular</legend>
								


						


							<div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Tuition Fee Code</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="tfcode" name="tfcode" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Tuition Fee Description</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="tfdes" name="tfdes" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="tfamount" name="tfamount" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				           





				  

						
						 <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-6">
				                <button class="btn btn-success" name="savetuition" type="submit" data-toggle="modal" data-target="#new_tuition_modal" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               
				              <!-- Modal save new miscelleneous fee particulars-->
				               <div class="modal fade" id="new_tuition_modal" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new tuition fee particular(s)?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="savetuition" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>

							  <button class="btn btn-default" name="saveandnewtuition" type="submit" data-toggle="modal" data-target="#new_tuition_modal_new" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              

				               <div class="modal fade" id="new_tuition_modal_new" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new tuition fee particular(s) and add new?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="saveandnewtuition" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-check"></i> Close</button>
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



