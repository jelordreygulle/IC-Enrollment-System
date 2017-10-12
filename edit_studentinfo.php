<?php
require_once("includes/initialize.php");
include 'header.php';

?>
<div class="container">
<?php
	check_message();
if (isset($_POST['submit'])){	

$IDNO  = $_POST['student_id'];
$LNAME = $_POST['lname'];
$FNAME = $_POST['fname'];
$MNAME = $_POST['mname'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['birthdate'];
$RELIGION = $_POST['religion'];
$mother   = $_POST['mother_name'];
$father   = $_POST['father_name'];
$contact = $_POST['contact_number'];
$STATUS= $_POST['status'];
$age = $_POST['age'];
$HOME_ADD = $_POST['address'];



$student = new Student();
//$student->S_ID				= "null";
$student->IDNO 				=	$IDNO;
$student->LNAME				=	$LNAME;
$student->FNAME				=	$FNAME;
$student->MNAME				=	$MNAME;
$student->SEX				=	$SEX;
$student->BDAY				=	$BDAY;
$student->RELIGION			=	$RELIGION;

$student->mother		=	$mother;
$student->father		=	$father;
$student->contact		=	$CONTACT_NO;
$student->STATUS			=	$STATUS;
$student->AGE				=	$AGE;
$student->HOME_ADD			=	$HOME_ADD;


//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newstudent.php');
}

*/  
//secondary Details

/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newstudent.php');
}
*/


//$istrue = $requirements->create(); 
/*if ($istrue) {
	output_message('Student requirements successfully added!');
	redirect ('newstudent.php');
} 
*/

if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('edit_studentinfo.php?id='.$IDNO);
	
}else{

	$student->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	$studdetails->update($_GET['id']);
	$requirements->update($_GET['id']); 
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
						<legend>New Student</legend>
															

						<div class="form-group" id="idno">
			            <div class="col-md-4">
			              <label class="col-md-4 control-label" for=
			              "idno">ID Number*</label>

			              <div class="col-md-8">
			                 <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Number" type="text" value="<?php echo $cur->student_id; ?>" readonly>
			              </div>

			            </div>

			          </div>
			        
			         <div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "lName">LastName:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="lName" name="lName" type=
			                  "text" placeholder="Last Name" value="<?php echo $cur->lname; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "fName">Firstname:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="fName" name="fName" type=
			                  "text" placeholder="First Name" value="<?php echo $cur->fname; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "mName">Middlename:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="mName" name="mName" type=
			                  "text" placeholder="Middle Name" value="<?php echo $cur->mname; ?>">
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
				                <select class="form-control input-sm" name="gender" id="gender">
				                	<option value="<?php echo $cur->gender; ?>"><?php echo $cur->gender; ?></option>
									<option value="M">Male</option>
									<option value="F">Female</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "bday">Birth Date</label>
			    
							<div class="col-md-8">
			                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
			                    <input class="form-control" size="11" type="text" value="<?php echo $cur->birthdate; ?>" readonly name="bday" id="bday">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
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
				                	<option value="<?php echo $cur->STATUS; ?>"><?php echo $cur->STATUS; ?></option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "age">Age</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="age" value="<?php echo $cur->age; ?>">
			                </div>
			              </div>

			            </div>
			          </div>
							
						<div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "religion">Religion </label>

			                <div class="col-md-8">
				                 <input class="form-control input-sm" id="religion" name="religion" type=
			                  "text" placeholder="Religion" value="<?php echo $cur->religion; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "contact">Contact </label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="contact" name="contact" type="text" placeholder="Contact Number" value="<?php echo $cur->contact_number; ?>">
			                </div>
			              </div>
			               
			          </div>
			          </div>

			          	<div class="form-group">
			            <div class="rows">
			              <div class="col-md-8">
			                <label class="col-sm-2 control-label" for=
			                "home">Home   </label>

			                <div class="col-md-10">
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $cur->address; ?>">
			                </div>
			              </div>

			              
			            </div>
			          </div>	


				<div class="form-group">
			            <div class="rows">
			              <div class="col-md-8">
			                <label class="col-sm-2 control-label" for=
			                "home">Fathers Name  </label>

			                <div class="col-md-10">
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $cur->father_name; ?>">
			                </div>
			              </div>

			              
			            </div>
			          </div>	

		             
		          </div>
		          </div>

				

				<div class="form-group">
			            <div class="rows">
			              <div class="col-md-8">
			                <label class="col-sm-2 control-label" for=
			                "home">Mothers Name  </label>

			                <div class="col-md-10">
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $cur->mother_name; ?>">
			                </div>
			              </div>

			              
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
		               <button class="btn btn-primary" name="submit" type="submit" >Save</button>

		               </div>
		              
		          </div>
		          </div>
					
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			

<?php include("footer.php") ?>



