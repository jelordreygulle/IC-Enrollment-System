<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>
<div class="container">
<?php
	check_message();
?>

		        <form class="form-horizontal well span9" action="./save_student.php" method="POST">

		<fieldset>
					<legend><span class="glyphicon glyphicon-plus"></span>   New Student</legend><br>


		<div class="form-group">
            <div class="rows">
              <div class="col-md-8">
                <label class="col-md-2 control-label" for=
                "lName">Course:*</label>

                <div class="col-md-10">
                  <select required class="form-control input-sm" name="course" id="course">
									<option value=""></option>
									<?php
									$c = '-';
				                  	$new_course = new Course();
				                  	$cur = $new_course->listOfcourse();	
				                  	foreach ($cur as $new_course) {
				                  		echo '<option value="'. $new_course->course_id.'">'.$new_course->course_code.$c.$new_course->Major.'</option>';
				                  	}

				                  	?>		
								

								</select>	
                </div>
              </div>

              

     
            </div>
          </div>
			


			




		</fieldset>			


					<fieldset>
						<legend>Primary Details</legend>
															

			
        
         <div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "lName">LastName:*</label>

                <div class="col-md-8">
                  <input required class="form-control input-sm" id="lName" name="lName" type=
                  "text" placeholder="Last Name">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "fName">Firstname:*</label>

                <div class="col-md-8">
                  <input required class="form-control input-sm" id="fName" name="fName" type=
                  "text" placeholder="First Name">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "mName">Middlename:*</label>

                <div class="col-md-8">
                  <input class="form-control input-sm" id="mName" name="mName" type=
                  "text" placeholder="Middle Name">
                </div>
              </div>
            </div>
          </div>
			
			<div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "gender">Gender </label>

                <div class="col-md-8">
	                <select required class="form-control input-sm" name="gender" id="gender">
						<option value=""></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>	
					</select>	
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "bday">Birth Date</label>
    
				<div class="col-md-8">
                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input required class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
			</div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "bplace">Birth place</label>

                <div class="col-md-8">
                  <input class="form-control input-sm" id="bplace" name="bplace" type=
                  "text" placeholder="Birth Place">
                </div>
              </div>
            </div>
          </div>
									 
          	<div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "status">Civil Status </label>

                <div class="col-md-8">
	                <select class="form-control input-sm" name="status" id="status">
	                	<option value=""></option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>	
					</select>	
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "age">Age</label>

                <div class="col-md-8">
                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="age">
                </div>
              </div>

			<div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "religion">Religion </label>

                <div class="col-md-8">
	                 <input class="form-control input-sm" id="religion" name="religion" type=
                  "text" placeholder="Religion">
                </div>
              </div>
            </div>
          </div>
				
			

          	<div class="form-group">
            <div class="rows">
              <div class="col-md-8">
                <label class="col-sm-2 control-label" for=
                "home">Permanent Address</label>

                <div class="col-md-10">
                  <input required class="form-control input-sm" id="home" name="home" type=
                  "text" placeholder="Home Address">
                </div>
              </div>

              
            </div>
          </div>	

					  
							
					</fieldset>	

				<fieldset>
				<legend>Secondary Details</legend>

				<div class="form-group">
		            <div class="rows">
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "father">Father's Name </label>

		                <div class="col-md-8">
			                 <input class="form-control input-sm" id="father" name="father" type=
		                  "text" placeholder="Father's Name">
		                </div>
		              </div>

		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "fOccu">Occupation </label>

		                <div class="col-md-8">
		                  <input class="form-control input-sm" id="fOccu" name="fOccu" type="text" placeholder="Occupation">
		                </div>
		              </div>
		              
		          </div>
		          </div>

				<div class="form-group">
		            <div class="rows">
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "mother">Mother's Name </label>

		                <div class="col-md-8">
			                 <input class="form-control input-sm" id="mother" name="mother" type=
		                  "text" placeholder="Mother's Name">
		                </div>
		              </div>

		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "mOccu">Occupation </label>

		                <div class="col-md-8">
		                  <input class="form-control input-sm" id="mOccu" name="mOccu" type="text" placeholder="Occupation">
		                </div>
		              </div>

		              
		          </div>
		          </div>



		          <div class="form-group">
		            <div class="rows">
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "contact">Contact Number </label>

		                <div class="col-md-8">
			                 <input class="form-control input-sm" id="contact" name="contact" type=
		                  "text" placeholder="Parents Contact Number">
		                </div>
		              </div>

		              

		              
		          </div>
		          </div>








				
			


				
		          
				</fieldset>	

				
				<div class="form-group">
		            <div class="rows">
		              <div class="col-md-6">
		                <label class="col-md-6 control-label" for=
		                "otherperson"></label>

		                <div class="col-md-6">
			             
		                </div>
		              </div>

		              <div class="col-md-6" align="right">
		               <button class="btn btn-success" name="submit" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>

		               </div>
		              
		          </div>
		          </div>
					
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			

<?php include("footer.php") ?>



