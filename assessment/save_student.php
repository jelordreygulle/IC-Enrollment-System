<?php
require_once("includes/initialize.php");	
$_SESSION['officer_incharge_id'];
//primary Details

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
$course 	= $_POST['course'];
$officer = $_SESSION['officer_incharge_id'];



$student = new Student();

$student->course_id			=	$course;
$student->officer_incharge_id		=	$_SESSION['officer_incharge_id'];
	
$student->lname				=	$LNAME;
$student->fnmae				=	$FNAME;
$student->mname				=	$MNAME;
$student->gender			=	$SEX;
$student->birthdate			=	$BDAY;
$student->birth_place		=	$BPLACE;
$student->religion			=	$RELIGION;
$student->mother_name		=	$MOTHER;
$student->father_name		=	$FATHER;
$student->mother_occupation	=	$MOTHER_OCCU; 
$student->father_occupation	=	$FATHER_OCCU;
$student->contact_number	=	$CONTACT_NO;
$student->status			=	$STATUS;
$student->age				=	$AGE;
$student->address			=	$HOME_ADD;
$student->registration_date			=	'CURRENT_TIMESTAMP';


$sqlS = "SELECT *
FROM `tbl_student`
WHERE `mname` LIKE '$MNAME'
AND `lname` LIKE '$LNAME'
AND `fname` = '$FNAME'
";
 $result2S = mysql_query($sqlS) or die ("Could not execute query2.");
 $num2S = mysql_num_rows($result2S);

if($num2S >= '1'){
	message('The Last Name, Middle Name and the First Name that you inputted is already Exist! Please Check and Update it if possible', "error");
	redirect ('newstudent.php');

}
else{

			if ($LNAME == "") {
				message('Last Name is required!', "error");
				redirect ('newstudent.php');
			}elseif ($FNAME == "") {
				message('First Name is required!', "error");
				redirect ('newstudent.php');
			



				
			}else{

				

				 $sql = "INSERT INTO `tbl_student`(`course_id`, `officer_incharge_id`, `lname`, `fname`, `mname`, `gender`, `birthdate`, `birth_place`, `religion`, `mother_name`, `father_name`, `mother_occupation`, `father_occupation`, `contact_number`, `status`, `age`, `address`, `registration_date`) 
				 		 VALUES ('$course','$officer','$LNAME','$FNAME','$MNAME','$SEX','$BDAY','$BPLACE','$RELIGION','$MOTHER','$FATHER','$MOTHER_OCCU','$FATHER_OCCU','$CONTACT_NO','$STATUS','$AGE','$HOME_ADD',CURRENT_TIMESTAMP)";
			     $result2 = mysql_query($sql) or die ("Could not execute query2.");
			      
			      message('New student addedd successfully!', "success");
				redirect('listofstudent.php');	

			}

}


?>