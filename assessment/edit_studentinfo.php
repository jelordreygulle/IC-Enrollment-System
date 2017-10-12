<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>
<div class="container">
<?php
	check_message();
if (isset($_POST['submit'])){	

$FNAME = $_POST['fName'];
$LNAME = $_POST['lName'];
$MNAME = $_POST['mName'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['bday'];
$BPLACE= $_POST['bplace'];
$STATUS= $_POST['status'];
$AGE   = $_POST['age'];

$RELIGION = $_POST['religion'];
$CONTACT_NO = $_POST['contact'];
$HOME_ADD = $_POST['home'];
$FATHER 			= $_POST['father'];
$FATHER_OCCU 		= $_POST['fOccu'];
$MOTHER 			= $_POST['mother'];
$MOTHER_OCCU 		= $_POST['mOccu'];
$course 	= null;
$officer = $_SESSION['officer_incharge_id'];



$student = new Student();
//$student->S_ID				= "null";
//$student->IDNO 				=	$IDNO;
$student->lname			=	$LNAME;
$student->fname				=	$FNAME;
$student->mname				=	$MNAME;
$student->gender				=	$SEX;
$student->birthdate	=	$BDAY;
$student->birth_place	=	$BPLACE;
$student->religion			=	$RELIGION;

$student->mother_name		=	$MOTHER;
$student->father_name		=	$FATHER;
$student->mother_occupation		=	$MOTHER_OCCU;
$student->father_occupation		=	$FATHER_OCCU;
$student->contact_number		=	$CONTACT_NO;
$student->status			=	$STATUS;
$student->age				=	$AGE;
$student->address			=	$HOME_ADD;



if ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}else{

	$student->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	
	message('Student infomation updated successfully!', "info");
	redirect('listofstudent.php');	


}
}
?>
<?php 

				$student = new Student();
				$cur = $student->single_student($_GET['id']);
			?>
		          <form class="form-horizontal well span9" action="edit_studentinfo.php?id=<?php echo $cur->student_id; ?>" method="POST">

		<fieldset>
					<legend><span class="glyphicon glyphicon-edit"></span>   Edit Student Information</legend><br>


		


			




		</fieldset>			


					<fieldset>
						<legend>Primary Details</legend>
															

			
        
         <div class="form-group">
            <div class="rows">
              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "lName">LastName:*</label>

                <div class="col-md-8">
                  <input value = "<?php echo $cur->lname; ?>" required class="form-control input-sm" id="lName" name="lName" type=
                  "text" placeholder="Last Name">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "fName">Firstname:*</label>

                <div class="col-md-8">
                  <input required value = "<?php echo $cur->fname; ?>" class="form-control input-sm" id="fName" name="fName" type=
                  "text" placeholder="First Name">
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "mName">Middlename:*</label>

                <div class="col-md-8">
                  <input value = "<?php echo $cur->mname; ?>" class="form-control input-sm" id="mName" name="mName" type=
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
						<option value = ""><?php echo $cur->gender; ?></option>
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
                    <input required value = "<?php echo $cur->birthdate; ?>" class="form-control" size="11" type="text"  readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
			</div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "bplace">Birth place</label>

                <div class="col-md-8">
                  <input value = "<?php echo $cur->birth_place; ?>" class="form-control input-sm" id="bplace" name="bplace" type=
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
	                	<option value = ""><?php echo $cur->status; ?></option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>	
					</select>	
                </div>
              </div>

              <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "age">Age</label>

                <div class="col-md-8">
                  <input value = "<?php echo $cur->age; ?>" class="form-control input-sm" id="age" name="age" type="number" placeholder="age">
                </div>
              </div>

			<div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "religion">Religion </label>

                <div class="col-md-8">
	                 <input value = "<?php echo $cur->religion; ?>" class="form-control input-sm" id="religion" name="religion" type=
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
                  <input required class="form-control input-sm" value = "<?php echo $cur->address; ?>" id="home" name="home" type=
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
			                 <input required class="form-control input-sm" value = "<?php echo $cur->father_name; ?>" id="father" name="father" type=
		                  "text" placeholder="Father's Name">
		                </div>
		              </div>

		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "fOccu">Occupation </label>

		                <div class="col-md-8">
		                  <input required class="form-control input-sm" id="fOccu" value = "<?php echo $cur->father_occupation; ?>" name="fOccu" type="text" placeholder="Occupation">
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
			                 <input class="form-control input-sm" value = "<?php echo $cur->mother_name; ?>" id="mother" name="mother" type=
		                  "text" placeholder="Mother's Name">
		                </div>
		              </div>

		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for=
		                "mOccu">Occupation </label>

		                <div class="col-md-8">
		                  <input class="form-control input-sm" id="mOccu" name="mOccu" value = "<?php echo $cur->mother_occupation; ?>" type="text" placeholder="Occupation">
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
			                 <input class="form-control input-sm" value = "<?php echo $cur->contact_number; ?>" id="contact" name="contact" type=
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



