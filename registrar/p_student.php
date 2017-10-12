<?php
require_once("includes/initialize.php");	
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



$student = new Student();
$student->course_id			=	$LNAME;
$student->course_id			=	$LNAME;
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






if ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('newstudent.php');
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('newstudent.php');
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('newstudent.php');
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('newstudent.php');
	
}else{

	$student->create(); 
	#$sy->create();  
	
	message('New student addedd successfully!', "success");
	redirect('listofstudent.php');	


}


?>