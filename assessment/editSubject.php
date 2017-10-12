<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
	$subjid = $_GET['id'];
	$singlesubject = new Subject();
	$object = $singlesubject->single_subject($subjid);
if (isset($_POST['savecourse'])){
	

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit_lec'] == "" OR $_POST['unit_lab'] == "" OR $_POST['prerequisite'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

			$subj = new Subject();
			$Subjectid			= $_GET['id'];
			$subjcode   		= $_POST['subjcode'];
			$subjdesc	 		= $_POST['subjdesc'];
			$unit_lec 			= $_POST['unit_lec'];
			$unit_lab 			= $_POST['unit_lab'];
			$pre 				= $_POST['prerequisite'];
		

			$subj->subject_id					= $Subjectid;
			$subj->subject_code		 			= $subjcode;
			$subj->description_title  			= $subjdesc;
			$subj->units_lec			 		= $unit_lec;
			$subj->units_lab 			 		= $unit_lab;
			$subj->requisites_subject_id 		= $pre;
			
 			$subj->update($Subjectid);
			message($subjcode. " has updated successfully!", "info");
			redirect('listofsubject.php');
			 
			
		}	 

		
	}

?>		
		
		 
		        <form class="form-horizontal well span4" action="editSubject.php?id=<?php echo $object->subject_id;?>" method="POST">

					<fieldset>
						<legend>Edit Subject</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject Code</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
													  "Subject Code" type="text" value="<?php echo $object->subject_code;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Subject Description</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
													  "Subject Description" type="text" value="<?php echo $object->description_title;?>">
				              </div>
				            </div>
				          </div>

				         

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "unit">No of unit(lec)</label>

				              <div class="col-md-8">
				                


								 <select  class="form-control input-sm" id="unit" name="unit_lec" required>
					            					<option value="<?php echo $object->units_lec;?>"><?php echo $object->units_lec;?></option>
													<option value="0"></option>
													<option value="0.5">0.5</option>
													<option value="1">1</option>
													<option value="1.5">1.5</option>
													<option value="2">2</option>
													<option value="2.5">2.5</option>
													<option value="3">3</option>
													<option value="3.5">3.5</option>
													<option value="4">4</option>
													<option value="4.5">4.5</option>
													<option value="5">5</option>
													<option value="5.5">5.5</option>
													<option value="5.5">6</option>
															
								 </select>	
				              </div>
				            </div>
				          </div>


				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "unit">No of unit(lab)</label>

				              <div class="col-md-8">
				                


								 <select  class="form-control input-sm" id="unit" name="unit_lab" required>
					            					<option value="<?php echo $object->units_lab;?>"><?php echo $object->units_lab;?></option>
					            					<option value="0"></option>
													<option value="0.5">0.5</option>
													<option value="1">1</option>
													<option value="1.5">1.5</option>
													<option value="2">2</option>
													<option value="2.5">2.5</option>
													<option value="3">3</option>
													<option value="3.5">3.5</option>
													<option value="4">4</option>
													<option value="4.5">4.5</option>
													<option value="5">5</option>
													<option value="5.5">5.5</option>
													<option value="5.5">6</option>
															
								 </select>	
				              </div>
				            </div>
				          </div>
				         

				            <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "course">Prerequisite</label>

				              <div class="col-md-8">
				              <select required class="form-control input-sm" name="prerequisite" id="prerequisite">
				              <option value="<?php echo $object->requisites_subject_id;?>"><?php echo $object->requisites_subject_id;?></option>
				              <option value="None">None</option>
				               <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {
				                  		echo '<option value="'. $subject->subject_code.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	

				                </select>
				              </div>
				            </div>
				          </div>

				          
				     
						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>

