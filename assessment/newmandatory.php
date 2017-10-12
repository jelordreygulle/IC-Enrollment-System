<?php
require_once("includes/initialize.php");
include 'header-fee.php';
?>
<div class="container">
<?php
if (isset($_POST['savemandatory'])){

	if ($_POST['mafcode'] == "" OR $_POST['mafdes'] == "" OR $_POST['mafamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$mocode   		= $_POST['mafcode'];
			$modesc	 		= $_POST['mafdes'];
			$moamount		= $_POST['mafamount'];

			$jojo = "SELECT * FROM `tbl_mandatory_fee` WHERE `mandatory_fee_code` ='$mocode' or `mandatory_fee_description` = '$modesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Miscelleneous code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newmandatory2.php?mafamount='. $moamount.'&mafcode='.$mocode.'&mafdes='.$modesc);

			}

			else{

				$man = new mandatory();
				
				
		
				$man->mandatory_fee_code		 		= $mocode;
				$man->mandatory_fee_description			= $modesc;
				$man->mandatory_fee_amount		 		= $moamount;
				

				 $istrue = $man->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Other Mandatory Fee Particulars created successfully!","success");
				 	redirect('./listofmandatoryfee.php?mafid=&mafcode=&mafdes=');
				 }


			}



			
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewmandatory'])) {
	if ($_POST['mafcode'] == "" OR $_POST['mafdes'] == "" OR $_POST['mafamount'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
			$mocode   		= $_POST['mafcode'];
			$modesc	 		= $_POST['mafdes'];
			$moamount		= $_POST['mafamount'];

			$jojo = "SELECT * FROM `tbl_mandatory_fee` WHERE `mandatory_fee_code` ='$mocode' or `mandatory_fee_description` = '$modesc'";
			$queries = mysql_query($jojo) or die ("Could not execute query2.");
			$row_count = mysql_num_rows($queries);



			if($row_count >=1){

				?>    <script type="text/javascript">
	                alert("Miscelleneous code or description is already exist! Please Check!");
	                
	                </script>

	                
				<?php

				redirect('newmandatory2.php?mafamount='. $moamount.'&mafcode='.$mocode.'&mafdes='.$modesc);

			}

			else{

				$man = new mandatory();
				
				
		
				$man->mandatory_fee_code		 		= $mocode;
				$man->mandatory_fee_description			= $modesc;
				$man->mandatory_fee_amount		 		= $moamount;
				

				 $istrue = $man->create(); 
				 if ($istrue == 1){
				 	
		
				 	message("New Other Mandatory Fee Particulars created successfully!","success");
				 	
				 }


			}



			
	}		 
	 
	 

}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">









					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Mandatory Fee Particular</legend>
								


						


							<div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfcode">Mandatory Fee Code</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafcode" name="mafcode" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfdes">Mandatory Fee Description</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafdes" name="mafdes" placeholder=
													  "" type="text" value="">
				              </div>
				            </div>
				          </div>


				           <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-4 control-label" for=
				              "mfamount">Amount</label>

				              <div class="col-md-6">
				                 <input required class="form-control input-sm" id="mafamount" name="mafamount" placeholder=
													  "" type="text" value="">
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

							  <button class="btn btn-default" name="saveandnewmandatory" type="submit" data-toggle="modal" data-target="#new_mandatory_modal_new" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              

				               <div class="modal fade" id="new_mandatory_modal_new" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Message</h4>
							        </div>
							        <div class="modal-body">
							          <p>Are you sure you want to SAVE the new mandatory fee particular(s) and add new?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="saveandnewmandatory" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
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



