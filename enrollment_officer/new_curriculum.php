<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';

							                                 	$ayy = $_SESSION['accademic'];
							                                    $querya ="SELECT  `ay_id` ,  `ay` 
																			FROM  `tbl_ay` 
																			WHERE  `ay_id` =  '$ayy'
																			LIMIT 0 , 30";
							                                    $resa = mysql_query($querya) or die ("Could not execute query2.");
							                          
							                                    $row2a = mysql_fetch_row($resa);
							                                    
							                                      $ayida = $row2a[0];
							                                      $ayy2 = $row2a[1];

							                                    
$tt = $_SESSION['term'];
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
		 if (isset($_POST['save'])){

		 	$kurso = $_GET['courseId'];

			$f1=$_POST['1_First_sem'];
			$f1_key = count($f1);
			$f1[0];
			for($i=0;$i<$f1_key;$i++){
		 		$new_f1 = $f1[$i];
				
		 		if($new_f1 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();

		 		}
				
			}

			$f2=$_POST['2_First_sem'];
			$f2_key = count($f2);
			$f2[0];
			for($i=0;$i<$f2_key;$i++){
		 		$new_f2 = $f2[$i];
				
		 		if($new_f2 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}

			$f3=$_POST['3_First_sem'];
			$f3_key = count($f3);
			$f3[0];
			for($i=0;$i<$f3_key;$i++){
		 		$new_f3 = $f3[$i];
				
		 		if($new_f3 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}

			$f4=$_POST['4_First_sem'];
			$f4_key = count($f4);
			$f4[0];
			for($i=0;$i<$f4_key;$i++){
		 		$new_f4 = $f4[$i];
				
		 		if($new_f4 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}

			$f5=$_POST['5_First_sem'];
			$f5_key = count($f5);
			$f5[0];
			for($i=0;$i<$f5_key;$i++){
		 		$new_f5 = $f5[$i];
				
		 		if($new_f5 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_f5;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'First Semester';
					$curr->create();
		 			
		 		}
				
			}

			$s1=$_POST['1_second_sem'];
			$s1_key = count($s1);
			$s1[0];
			for($i=0;$i<$s1_key;$i++){
		 		$new_s1 = $s1[$i];
				
		 		if($new_s1 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}

			$s2=$_POST['2_second_sem'];
			$s2_key = count($s2);
			$s2[0];
			for($i=0;$i<$s2_key;$i++){
		 		$new_s2 = $s2[$i];
				
		 		if($new_s2 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			$s3=$_POST['3_second_sem'];
			$s3_key = count($s3);
			$s3[0];
			for($i=0;$i<$s3_key;$i++){
		 		$new_s3 = $s3[$i];
				
		 		if($new_s3 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			$s4=$_POST['4_second_sem'];
			$s4_key = count($s4);
			$s4[0];
			for($i=0;$i<$s4_key;$i++){
		 		$new_s4 = $s4[$i];
				
		 		if($new_s4 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			$s5=$_POST['5_second_sem'];
			$s5_key = count($s5);
			$s5[0];
			for($i=0;$i<$s5_key;$i++){
		 		$new_s5 = $s5[$i];
				
		 		if($new_s5 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_s5;
					$curr->year_level		= 'Fifth Year';	
					$curr->term			 	= 'Second Semester';
					$curr->create();
		 			
		 		}
				
			}


			$su1=$_POST['1_summer'];
			$su1_key = count($su1);
			$su1[0];
			for($i=0;$i<$su1_key;$i++){
		 		$new_su1 = $su1[$i];
				
		 		if($new_su1 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su1;
					$curr->year_level		= 'First Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}


			$su2=$_POST['2_summer'];
			$su2_key = count($su2);
			$su2[0];
			for($i=0;$i<$su2_key;$i++){
		 		$new_su2 = $su2[$i];
				
		 		if($new_su2 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su2;
					$curr->year_level		= 'Second Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}

			$su3=$_POST['3_summer'];
			$su3_key = count($su3);
			$su3[0];
			for($i=0;$i<$su3_key;$i++){
		 		$new_su3 = $su3[$i];
				
		 		if($new_su3 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su3;
					$curr->year_level		= 'Third Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}

			$su4=$_POST['4_summer'];
			$su4_key = count($su4);
			$su4[0];
			for($i=0;$i<$su4_key;$i++){
		 		$new_su4 = $su4[$i];
				
		 		if($new_su4 == ''){

		 		}
		 		else{
		 			$curr = new curriculum();
					$curr->course_id 		= $kurso;
					$curr->subject_id		= $new_su4;
					$curr->year_level		= 'Fourth Year';	
					$curr->term			 	= 'Summer';
					$curr->create();
		 			
		 		}
				
			}

			
			
					 	
					 	message("New curriculum is successfully created!","success");
					 	redirect('listofcourse.php');
			
					 

				
			
	}

  ?>

   

<div class="col-12 col-sm-12 col-lg-12">
     <div class="panel panel-primary">
					  
		<div class="panel-body">
			<form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="center">Bachelor of Science in Hotel and Restaurant</h3></caption>






						<table class="tftable" border="2">
						<tr>
									
									<th width="100%" colspan="5"><center>Subject</center></th>
									
									
						</tr>
					
						<tr>
						  	<td><center><strong>First Year, First Semester</strong></center></td>
						  	<td><center><strong>Second Year, First Semester</strong></center></td>
						  	<td><center><strong>Third Year, First Semester</strong></center></td>
						  	<td><center><strong>Fourth Year, First Semester</strong></center></td>
						  	<td><center><strong>Fifth Year, First Semester</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" >
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" >
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]" >
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" >
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]" >
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]" >
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_First_sem[]" name="1_First_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_First_sem[]" name="2_First_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_First_sem[]" name="3_First_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_First_sem[]" name="4_First_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_First_sem[]" name="5_First_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>






						
						<tr>
						  	<td><center><strong>First Year, Second Semester</strong></center></td>
						  	<td><center><strong>Second Year, Second Semester</strong></center></td>
						  	<td><center><strong>Third Year, Second Semester</strong></center></td>
						  	<td><center><strong>Fourth Year, Second Semester</strong></center></td>
						  	<td><center><strong>Fifth Year, Second Semester</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>
						


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">5</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">6</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">7</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">8</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">9</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">10</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">11</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">12</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">13</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">14</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_second_sem[]" name="1_second_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_second_sem[]" name="2_second_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_second_sem[]" name="3_second_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_second_sem[]" name="4_second_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="5_second_sem[]" name="5_second_sem[]">
				              	<option value="">15</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
						  	
						
						</tr>


						
						<tr>
						  	<td><center><strong>First Year, Summer</strong></center></td>
						  	<td><center><strong>Second Year, Summer</strong></center></td>
						  	<td><center><strong>Third Year, Summer</strong></center></td>
						  	<td><center><strong>Fourth Year, Summer</strong></center></td>
						
						</tr>

						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]" >
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]">
				              	<option value="">1</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>



						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]">
				              	<option value="">2</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]">
				              	<option value="">3</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						<tr>
						  	
				             <td>
						  		<select  class="form-control input-sm" id="1_summer[]" name="1_summer[]" >
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="2_summer[]" name="2_summer[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>

				             <td>
						  		<select  class="form-control input-sm" id="3_summer[]" name="3_summer[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             <td>
						  		<select  class="form-control input-sm" id="4_summer[]" name="4_summer[]">
				              	<option value="">4</option>
				                <?php
				                  	$subject = new Subject();
				                  	$cur = $subject->listOfsubject();	
				                  	foreach ($cur as $subject) {

				                  		echo '<option value="'. $subject->subject_id.'">'.$subject->subject_code.'-'.$subject->description_title.'</option>';
				                  	}

				                  	?>	
				                  </select>
				            </td>
				             
						
						</tr>


						

				</table>
				
					<br>		
				<div class="btn-group">
						 <!-- <a href="preview_adviceslip.php?txtsearch=<?php //echo $_POST['txtsearch']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Preview</a>-->
					<button  type="submit" class="btn btn-success" name="save"><span class="glyphicon glyphicon-save"></span> Save and Close</button>
				</div>
			</form>
						
			
			<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			}
			</script>

            </div><!--/span-->
  			</div><!--End or row-->          
      </div><!--End or row-->
          
   </div><!--End or row-->

</div><!--End or row-->
				          


















</div>
</div>
									
</form>
				  
</div>

</div>

		   
            
			

<?php include("footer.php") ?>



