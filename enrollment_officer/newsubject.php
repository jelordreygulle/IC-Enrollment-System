<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['savecourse'])){

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit_lec'] == "" OR $_POST['unit_lab'] == ""  OR $_POST['prerequisite'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		

			$subj = new Subject();
			$subjcode   	= $_POST['subjcode'];
			$subjdesc	 	= $_POST['subjdesc'];
			$unit_lec 			= $_POST['unit_lec'];
			$unit_lab 			= $_POST['unit_lab'];
			$pre 			= $_POST['prerequisite'];
		
	
			$subj->subject_code		 		= $subjcode;
			$subj->description_title 		= $subjdesc;
			$subj->units_lec 			 		= $unit_lec;
			$subj->units_lab 			 		= $unit_lab;
			$subj->requisites_subject_id 	= $pre;


			 $istrue = $subj->create(); 
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
			 	redirect('listofsubject.php');
			 }
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewcourse'])) {
	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit_lec'] == "" OR $_POST['unit_lab'] == ""  OR $_POST['prerequisite'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		

		
			$subj = new Subject();
			$subjcode   	= $_POST['subjcode'];
			$subjdesc	 	= $_POST['subjdesc'];
			$unit_lec 			= $_POST['unit_lec'];
			$unit_lab 			= $_POST['unit_lab'];
			$pre 			= $_POST['prerequisite'];
		
	
			$subj->subject_code		 		= $subjcode;
			$subj->description_title 		= $subjdesc;
			$subj->units_lec 			 		= $unit_lec;
			$subj->units_lab 			 		= $unit_lab;
			$subj->requisites_subject_id 	= $pre;
			
		

			 $istrue = $subj->create();
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
		
			 }
}
}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Subject</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject Code</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
													  "Subject Code" type="text" value="">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Descriptive Title</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
													  "Subject Description" type="text" value="">
				              </div>
				            </div>
				          </div>

				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "unit">No of unit(lec)</label>

				              <div class="col-md-8">
				                


								 <select  class="form-control input-sm" id="unit" name="unit_lec" required>
					            					<option value=""></option>
					            					<option value="0">0</option>
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
													<option value="6">6</option>
													<option value="6.5">6.5</option>
													<option value="7">7</option>
													<option value="7.5">7.5</option>
													<option value="8">8</option>
															
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
					            					<option value=""></option>
					            					<option value="0">0</option>
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
				              <option value=""></option>
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
				                <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               <button class="btn btn-default" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



