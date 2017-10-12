<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';






	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
				FROM  `tbl_ay` 
				WHERE  `ay_status` =  'Active'
				LIMIT 0 , 30";
	$resa = mysql_query($querya) or die ("Could not execute query2.");
	$row2a = mysql_fetch_row($resa);
	$ayy2 = $row2a[1];
	$tt = $row2a[2];

$c_id = $_GET['courseId'];
?>

<?php
		 if (isset($_POST['save'])){

		 	$kurso = $_GET['courseId'];


			if(isset($_POST['1_First_sem_id'])){
			$f1_id=$_POST['1_First_sem_id'];
			$f1=$_POST['1_First_sem'];
			$f1_key = count($f1);
			$f1[0];
			$f1_id[0];
			for($i=0;$i<$f1_key;$i++){
		 		$new_f1 = $f1[$i];
		 		$new_f1_id = $f1_id[$i];
				
		 		if($new_f1 == '' and $new_f1_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_f1_id);

		 		}
		 		else{

		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'First Semester';
					$curr->update($new_f1_id);


		 		}
				
			}}

			$f11=$_POST['11_First_sem'];
			$f11_key = count($f11);
			$f11[0];
			for($i=0;$i<$f11_key;$i++){
		 		$new_f11 = $f11[$i];
		 		
				
		 		if($new_f11 == ''){

		 		}
		 		else{

		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f11;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'First Semester';
					$curr->create($new_f1_id);


		 		}
				
			}


			

			if(isset($_POST['2_First_sem_id'])){
			$f2_id=$_POST['2_First_sem_id'];
			$f2_id[0];
			$f2=$_POST['2_First_sem'];
			$f2_key = count($f2);
			$f2[0];
			for($i=0;$i<$f2_key;$i++){
		 		$new_f2 = $f2[$i];
		 		$new_f2_id = $f2_id[$i];
				
		 		if($new_f2 == '' and $new_f2_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_f2_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'First Semester';
					$curr->update($new_f2_id);
		 			
		 		}
				
			}}

			$f22=$_POST['22_First_sem'];
			$f22_key = count($f22);
			$f22[0];
			for($i=0;$i<$f22_key;$i++){
		 		$new_f22 = $f22[$i];
				
		 		if($new_f22 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f22;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}


			if(isset($_POST['3_First_sem_id'])){
			$f3_id=$_POST['3_First_sem_id'];
			$f3_id[0];
			$f3=$_POST['3_First_sem'];
			$f3_key = count($f3);
			$f3[0];
			for($i=0;$i<$f3_key;$i++){
		 		$new_f3 = $f3[$i];
		 		$new_f3_id = $f3_id[$i];
				
		 		if($new_f3 == '' and $new_f3_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_f3_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'First Semester';
					$curr->update($new_f3_id);
		 			
		 		}
				
			}}



			$f33=$_POST['33_First_sem'];
			$f33_key = count($f33);
			$f33[0];
			for($i=0;$i<$f33_key;$i++){
		 		$new_f33 = $f33[$i];
				
		 		if($new_f33 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f33;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}




			if(isset($_POST['4_First_sem_id'])){
			$f4_id=$_POST['4_First_sem_id'];
			$f4_id[0];
			$f4=$_POST['4_First_sem'];
			$f4_key = count($f4);
			$f4[0];
			for($i=0;$i<$f4_key;$i++){
		 		$new_f4 = $f4[$i];
		 		$new_f4_id = $f4_id[$i];
				
		 		if($new_f4 == '' and $new_f4_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_f4_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'First Semester';
					$curr->update($new_f4_id);
		 			
		 		}
				
			}}

			$f44=$_POST['44_First_sem'];
			$f44_key = count($f44);
			$f44[0];
			for($i=0;$i<$f44_key;$i++){
		 		$new_f44 = $f44[$i];
				
		 		if($new_f44 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f44;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}


			
			

			if(isset($_POST['5_First_sem_id'])){
			$f5_id=$_POST['5_First_sem_id'];
			$f5_id[0];
			$f5=$_POST['5_First_sem'];
			$f5_key = count($f5);
			$f5[0];
			for($i=0;$i<$f5_key;$i++){
		 		$new_f5 = $f5[$i];
		 		$new_f5_id = $f5_id[$i];
				
		 		if($new_f5 == '' and $new_f5_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_f5_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f5;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'First Semester';
					$curr->update($new_f5_id);
		 			
		 		}
				
			}}

			$f55=$_POST['55_First_sem'];
			$f55_key = count($f55);
			$f55[0];
			for($i=0;$i<$f55_key;$i++){
		 		$new_f55 = $f55[$i];
				
		 		if($new_f55 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f55;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}


			


			if(isset($_POST['1_second_sem_id'])){
			$s1_id=$_POST['1_second_sem_id'];
			$s1_id[0];
			$s1=$_POST['1_second_sem'];
			$s1_key = count($s1);
			$s1[0];
			for($i=0;$i<$s1_key;$i++){
		 		$new_s1 = $s1[$i];
		 		$new_s1_id = $s1_id[$i];
				
		 		if($new_s1 == '' and $new_s1_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_s1_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Second Semester';
					$curr->update($new_s1_id);
		 			
		 		}
				
			}}

			$s11=$_POST['11_second_sem'];
			$s11_key = count($s11);
			$s11[0];
			for($i=0;$i<$s11_key;$i++){
		 		$new_s11 = $s11[$i];
				
		 		if($new_s11 == ''){

		 		}

		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s11;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}



			
			if(isset($_POST['2_second_sem_id'])){
			$s2_id=$_POST['2_second_sem_id'];
			$s2_id[0];
			$s2=$_POST['2_second_sem'];
			$s2_key = count($s2);
			$s2[0];
			for($i=0;$i<$s2_key;$i++){
		 		$new_s2 = $s2[$i];
		 		$new_s2_id = $s2_id[$i];
				
		 		if($new_s2 == '' and $new_s2_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_s2_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Second Semester';
					$curr->update($new_s2_id);
		 			
		 		}
				
			}}


			$s22=$_POST['22_second_sem'];
			$s22_key = count($s22);
			$s22[0];
			for($i=0;$i<$s22_key;$i++){
		 		$new_s22 = $s22[$i];
				
		 		if($new_s22 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s22;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}





			if(isset($_POST['3_second_sem_id'])){
			$s3_id=$_POST['3_second_sem_id'];
			$s3_id[0];
			$s3=$_POST['3_second_sem'];
			$s3_key = count($s3);
			$s3[0];
			for($i=0;$i<$s3_key;$i++){
		 		$new_s3 = $s3[$i];
		 		$new_s3_id = $s3_id[$i];
				
		 		if($new_s3 == '' and $new_s3_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_s3_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Second Semester';
					$curr->update($new_s3_id);
		 			
		 		}
				
			}}

			$s33=$_POST['33_second_sem'];
			$s33_key = count($s33);
			$s33[0];
			for($i=0;$i<$s33_key;$i++){
		 		$new_s33 = $s33[$i];
				
		 		if($new_s33 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s33;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}



			if(isset($_POST['4_second_sem_id'])){
			$s4_id=$_POST['4_second_sem_id'];
			$s4_id[0];
			$s4=$_POST['4_second_sem'];
			$s4_key = count($s4);
			$s4[0];
			for($i=0;$i<$s4_key;$i++){
		 		$new_s4 = $s4[$i];
		 		$new_s4_id = $s4_id[$i];
				
		 		if($new_s4 == '' and $new_s4_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_s4_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->update($new_s4_id);
		 			
		 		}
				
			}}


			$s44=$_POST['44_second_sem'];
			$s44_key = count($s44);
			$s44[0];
			for($i=0;$i<$s44_key;$i++){
		 		$new_s44 = $s44[$i];
				
		 		if($new_s44 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s44;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			

			if(isset($_POST['5_second_sem_id'])){
			$s5_id=$_POST['5_second_sem_id'];
			$s5_id[0];
			$s5=$_POST['5_second_sem'];
			$s5_key = count($s5);
			$s5[0];
			for($i=0;$i<$s5_key;$i++){
		 		$new_s5 = $s5[$i];
		 		$new_s5_id = $s5_id[$i];
				
		 		if($new_s5 == '' and $new_s5_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_s5_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s5;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->update($new_s5_id);
		 			
		 		}
				
			}}

			$s55=$_POST['55_second_sem'];
			$s55_key = count($s55);
			$s55[0];
			for($i=0;$i<$s55_key;$i++){
		 		$new_s55 = $s55[$i];
				
		 		if($new_s55 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s55;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			if(isset($_POST['1_summer_id'])){
			$su1_id=$_POST['1_summer_id'];
			$su1_id[0];
			$su1=$_POST['1_summer'];
			$su1_key = count($su1);
			$su1[0];
			for($i=0;$i<$su1_key;$i++){
		 		$new_su1 = $su1[$i];
		 		$new_su1_id = $su1_id[$i];
				
		 		if($new_su1 == '' and $new_su1_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_su1_id);


		 		}

		 		
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Summer';
					$curr->update($new_su1_id);
		 			
		 		}
				
			}

		}

			$su11=$_POST['11_summer'];
			$su11_key = count($su11);
			$su11[0];
			for($i=0;$i<$su11_key;$i++){
		 		$new_su11 = $su11[$i];
				
		 		if($new_su11 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su11;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}


			
			if(isset($_POST['2_summer_id'])){
			$su2_id=$_POST['2_summer_id'];
			$su2_id[0];
			$su2=$_POST['2_summer'];
			$su2_key = count($su2);
			$su2[0];
			for($i=0;$i<$su2_key;$i++){
		 		$new_su2 = $su2[$i];
		 		$new_su2_id = $su2_id[$i];
				
		 		if($new_su2 == '' and $new_su2_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_su2_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Summer';
					$curr->update($new_su2_id);
		 			
		 		}
				
			}
		}

			$su22=$_POST['22_summer'];
			$su22_key = count($su22);
			$su22[0];
			for($i=0;$i<$su22_key;$i++){
		 		$new_su22 = $su22[$i];
				
		 		if($new_su22 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su22;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}


			
			if(isset($_POST['3_summer_id'])){
			$su3_id=$_POST['3_summer_id'];
			$su3_id[0];
			$su3=$_POST['3_summer'];
			$su3_key = count($su3);
			$su3[0];
			for($i=0;$i<$su3_key;$i++){
		 		$new_su3 = $su3[$i];
		 		$new_su3_id = $su3_id[$i];
				
		 		if($new_su3 == '' and $new_su3_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_su3_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Summer';
					$curr->update($new_su3_id);
		 			
		 		}
				
			}}

			$su33=$_POST['33_summer'];
			$su33_key = count($su33);
			$su33[0];
			for($i=0;$i<$su33_key;$i++){
		 		$new_su33 = $su33[$i];
				
		 		if($new_su33 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su33;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}


			if(isset($_POST['4_summer_id'])){
			$su4_id=$_POST['4_summer_id'];
			$su4_id[0];
			$su4=$_POST['4_summer'];
			$su4_key = count($su4);
			$su4[0];
			for($i=0;$i<$su4_key;$i++){
		 		$new_su4 = $su4[$i];
		 		$new_su4_id = $su4_id[$i];
				
		 		if($new_su4 == '' and $new_su4_id != ''){

		 			$curr = new curriculum();
		 			$curr->delete($new_su4_id);

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Summer';
					$curr->update($new_su4_id);
		 			
		 		}
				
			}
		}
			$su44=$_POST['44_summer'];
			$su44_key = count($su44);
			$su44[0];
			for($i=0;$i<$su44_key;$i++){
		 		$new_su44 = $su44[$i];
				
		 		if($new_su44 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su44;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}

			
			
					 	
					 	message("New curriculum is successfully created!","success");
					 	redirect('curriculum.php?id='.$kurso);
			
					 

				
			
	}

  ?>

					    <style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>

<style type="text/css">
.tftable2 {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable2 th {font-size:12px;background-color:#f8dbc0;border-width: 1px;padding: 8px;border-style: solid;border-color: rgba(114, 158, 165, 0.02);text-align:left;}
.tftable2 tr {background-color:#ffffff;}
.tftable2 td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable2 tr:hover {background-color:#ffff99;}
</style>

<style type="text/css">


body { 
background-image: url(); 
background-repeat: no-repeat; 
height: 100%; 
width: 100%; 
background-position: bottom; 
} 
.top {
    border-top:thin solid;
    border-color:black;
}

.bottom {
    border-bottom:thin solid;
    border-color:black;
}

.left {
    border-left:thin solid;
    border-color:black;
}

.right {
    border-right:thin solid;
    border-color:black;
}
.header-row { position:fixed; top:0; left:0; }
.table {padding-top:5px; }
</style>

<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
	$curriculum = new course();
	$cur = $curriculum->single_course($_GET['courseId']);
		

  ?>

     <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
   
   
  	<h3><span class="glyphicon glyphicon-edit"></span> Update Curriculum</h3>

    
  </div><!-- /.navbar-collapse -->
</nav>

    
  </div><!-- /.navbar-collapse -->
</nav>




<div class="col-8 col-sm-8 col-lg-8">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	<html>
					  
					  	<body>
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="center"><?php echo $cur->course_code ; ?>, <?php echo $cur->AY; ?></h3></caption>


<br>



						<table class="tftable" border="2">
						<tr>
									
							<th><center>Subject</center></th>
									
									
						</tr>
					
						<tr>
						  	<td><center><strong>First Year, First Semester</strong></center></td>
						</tr>
					
						<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'First Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="1_First_sem_id[]" name="1_First_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				              	<option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>

						  	<select  class="form-control input-sm" id="11_First_sem[]" name="11_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_First_sem[]" name="11_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_First_sem[]" name="11_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_First_sem[]" name="11_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>
				

				<tr>
				<td><center><strong>First Year, Second Semester</strong></center></td>
				</tr>
					
				<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'First Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input  type="hidden" id="1_second_sem_id[]" name="1_second_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				              	<option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="11_second_sem[]" name="11_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_second_sem[]" name="11_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_second_sem[]" name="11_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_second_sem[]" name="11_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>


			<tr>
						  	<td><center><strong>First Year, Summer</strong></center></td>
						</tr>
					
						<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Summer' 
								AND `tbl_curriculum`.`year_level` = 'First Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="1_summer_id[]" name="1_summer_id[]"/ value="<?php echo $eng1_row[6]; ?>">
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="11_summer[]" name="11_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_summer[]" name="11_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_summer[]" name="11_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="11_summer[]" name="11_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



			<tr>
				<td><center><strong>Second Year, First Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Second Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id=="2_First_sem_id[]" name="2_First_sem_id[]" value="<?php echo $eng1_row[6]; ?>"/>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="22_First_sem[]" name="22_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_First_sem[]" name="22_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_First_sem[]" name="22_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_First_sem[]" name="22_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



				<tr>
				<td><center><strong>Second Year, Second Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`,
												`tbl_curriculum`.`curriculum_id`, 
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Second Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="2_second_sem_id[]" name="2_second_sem_id[]" value="<?php echo $eng1_row[6]; ?>"/>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="22_second_sem[]" name="22_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_second_sem[]" name="22_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_second_sem[]" name="22_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_second_sem[]" name="22_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



			<tr>
				<td><center><strong>Second Year, Summer</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Summer' 
								AND `tbl_curriculum`.`year_level` = 'Second Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="2_summer_id[]" name="2_summer_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="22_summer[]" name="22_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_summer[]" name="22_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_summer[]" name="22_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="22_summer[]" name="22_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>







			<tr>
				<td><center><strong>Third Year, First Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Third Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="3_First_sem_id[]" name="3_First_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="33_First_sem[]" name="33_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_First_sem[]" name="33_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_First_sem[]" name="33_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_First_sem[]" name="33_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



			<tr>
				<td><center><strong>Third Year, Second Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Third Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="3_second_sem_id[]" name="3_second_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="33_second_sem[]" name="33_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_second_sem[]" name="33_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_second_sem[]" name="33_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_second_sem[]" name="33_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>




			<tr>
				<td><center><strong>Third Year, Summer</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Summer' 
								AND `tbl_curriculum`.`year_level` = 'Third Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="3_summer_id[]" name="3_summer_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="33_summer[]" name="33_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_summer[]" name="33_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_summer[]" name="33_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="33_summer[]" name="33_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>




			<tr>
				<td><center><strong>Fourth Year, First Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`,
												`tbl_curriculum`.`curriculum_id`, 
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="4_First_sem_id[]" name="4_First_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="44_First_sem[]" name="44_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_First_sem[]" name="44_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_First_sem[]" name="44_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_First_sem[]" name="44_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



			<tr>
				<td><center><strong>Fourth Year, Second Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="4_second_sem_id[]" name="4_second_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="44_second_sem[]" name="44_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_second_sem[]" name="44_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_second_sem[]" name="44_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_second_sem[]" name="44_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>


			<tr>
				<td><center><strong>Fourth Year, Summer</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Summer' 
								AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="4_summer_id[]" name="4_summer_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="44_summer[]" name="44_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_summer[]" name="44_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_summer[]" name="44_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="44_summer[]" name="44_summer[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>






			<tr>
				<td><center><strong>Fifth Year, First Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fifth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="5_First_sem_id[]" name="5_First_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				               <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="55_First_sem[]" name="55_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_First_sem[]" name="55_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_First_sem[]" name="55_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_First_sem[]" name="55_First_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>



			<tr>
				<td><center><strong>Fifth Year, Second Semester</strong></center></td>
			</tr>
					
			<tr>
							<?php
								$eng1 = "SELECT `tbl_subject`.`subject_id`, 
												`tbl_subject`.`subject_code`, 
												`tbl_subject`.`description_title`, 
												`tbl_subject`.`units_lec`, 
												`tbl_subject`.`units_lab`, 
												`tbl_subject`.`requisites_subject_id`, 
												`tbl_curriculum`.`curriculum_id`,
												`tbl_curriculum`.*
								FROM tbl_subject, tbl_curriculum
								where `tbl_curriculum`.`subject_id` = `tbl_subject`.`subject_id`
								AND `tbl_curriculum`.`course_id` = '$c_id'
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fifth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td>
						  		<input type="hidden" id="5_second_sem_id[]" name="5_second_sem_id[]" value="<?php echo $eng1_row[6]; ?>" />
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]" >
				              	<option value="<?php echo $eng1_row[0]; ?>"><?php echo $eng1_row[1], '-', $eng1_row[2]; ?></option>
				                <option value="">--Empty--</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				        </tr>
					<?php } ?>

					<tr>
						<td>
						  	<select  class="form-control input-sm" id="55_second_sem[]" name="55_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_second_sem[]" name="55_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_second_sem[]" name="55_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>

				    <tr>
						<td>
						  	<select  class="form-control input-sm" id="55_second_sem[]" name="55_second_sem[]" >
				            <option value=""></option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'&nbsp&nbsp&nbsp ||&nbsp&nbsp&nbsp Pre-requisite:&nbsp&nbsp'.$subject->requisites_subject_id.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				    </tr>







				</table>

				<br>
				
				<div class="btn-group">
						 <!-- <a href="preview_adviceslip.php?txtsearch=<?php //echo $_POST['txtsearch']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Preview</a>-->
					 <button type="submit" class="btn btn-success" name="save" data-toggle="modal" data-target="#save_curriculum"><span class="glyphicon glyphicon-save"></span> Update</button>
					
				    <div class="modal fade" id="save_curriculum" role="dialog">
							    <div class="modal-dialog">
							    
							      
							      <div class="modal-content">
							        <div class="alert alert-info">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title"><strong>Confirmation Message</strong></h4>
							        </div>
							        <div class="modal-body" >
							          <p>Are you sure you want to update this curriculum?.</p>
							        </div>
							        <div class="modal-footer">
							          <button name="save" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes</button>
							          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>


				</div>

			</form>
						
			
			<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			}
			</script>
</body>
</html?
				  
</div>

</div>
</div>
		   
            
			

<?php include("footer.php") ?>



