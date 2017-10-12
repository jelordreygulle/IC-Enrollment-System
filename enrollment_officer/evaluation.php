<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';

							                                 	
$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
			FROM  `tbl_ay` 
			WHERE  `ay_status` =  'ACTIVE'
			LIMIT 0 , 30";
$resa = mysql_query($querya) or die ("Could not execute query2.");
$row2a = mysql_fetch_row($resa);
$ayy2 = $row2a[1];
$term = $row2a[2];

							                                    

?>

					    <style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>

						 <style type="text/css">
						.tftable3 {font-size:10px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable3 th {font-size:10px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable3 tr {background-color:#ffffff;}
						.tftable3 td {font-size:10px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable3 tr:hover {background-color:#ffff99;}
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
		  	 if (isset($_POST['search'])){
				if ($_POST['txtsearch']==""){
					message("ID Number is required!","error");
					check_message();

				}else{


					$student = new student();
					$tol = $student->find_all_student($_POST['txtsearch']);
							
					if ($tol <= 0) {
						message("ID number does not exist. Please Check!","error");
						check_message();
					}else{
						
						 	
						 	
							$cur = $student->single_student($_POST['txtsearch']);
							$course = new Course();
							$studcourse = $course->single_course($cur->course_id);

						 
					}	 

					



					

					
				}
			}

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
    <a class="navbar-brand" href="#"> Student ID Number:</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <form class="navbar-form navbar-left" action="evaluation.php" method="POST">
      <div class="form-group">
        <input type="text" name="txtsearch" class="form-control" placeholder="Search">
      </div>
      <button type="submit" name="search"class="btn btn-default">  <span class="glyphicon glyphicon-search"></span></button>
      

    </form>


    
  </div><!-- /.navbar-collapse -->
</nav>
<table align="center">
				         	<thead>
							  	<tr id="table">
							  		<th width="15%" >ID No.</th>
							  		<th width="35%" >Name</th>
							  		<th width="35%" >Course</th>
							  		<th width="15%" >Option</th>
							  		
							  		
							  		
				
							  	</tr>	
						    </thead> 
						     <tbody>
						     	<tr>
						     		<td><font color="red"><?php echo (isset($cur)) ? $cur->student_id : 'ID' ;?></font></td>
						     		<td><font color="red"><?php echo (isset($cur)) ? $cur->lname.', '.$cur->fname.' '.$cur->mname : 'Fullname' ;?></font></td>
						     		<?php /*
						     		$course = $cur->course_id;

						     		$gg = "SELECT *
											FROM `tbl_course`
											WHERE `course_id` ='$course'";
						     		$ll = mysql_query($gg) or die ("Could not execute query for course!.");
							                          
							        $rowl = mysql_fetch_row($ll);
							                                    
							        $course_des = $rowl[1];*/

						     		?>
						     		<td><font color="red"><?php echo (isset($studcourse)) ? $studcourse->course_code : 'course' ;?></font></td>
						     		<td><a href="evaluation2.php?course=<?php echo (isset($studcourse)) ? $studcourse->course_id : 'course' ;?>&studentId=<?php echo (isset($cur)) ? $cur->student_id : 'ID' ;?>" class="btn btn-info"><span class="glyphicon glyphicon-list"></span>  View Recommended Subjects</a><td>
















						     		</td>
					

						     		







								

						</tr>

					 </tbody>
						    <tfoot>
				  	
							  	<tr><td   colspan="7"></td></tr>
							  	<tr><td  colspan="6" align="Right"></td><td align="center" ></td></tr>
							</tfoot>	   
					    
					
	</table>

    
  </div><!-- /.navbar-collapse -->
</nav>

<br>


		 
            <div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	<html>
					  
					  	<body>
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="center"><?php echo (isset($studcourse)) ? $studcourse->course_code : 'course' ;echo ', '; echo (isset($studcourse)) ? $studcourse->AY : 'ay' ;?></h3></caption>



					    <?php $c_id = (isset($studcourse)) ? $studcourse->course_id : 'course'; 
					    	$student_id_ni  = (isset($cur)) ? $cur->student_id : 'ID' ;



					    ?>


						<table class="tftable" border="2">
						<tr>
									
									
									<th width="10%"> Subj. Code</th>
									<th width="28%"> Descriptive Title</th>
									<th width="8%"> Unit(Lec)</th>
									<th width="8%"> Unit(Lab)</th>
									<th width="10%"> Total Units</th>
									<th width="10%"> Pre-requisite</th>
									<th width="7%"> Grade</th>
									<th width="13%"> Completion Grade</th>
									<th width="6%"> Taken</th>
									
									
						</tr>
					
						<tr>
						  	<td colspan="9"><center><strong>First Year, First Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'First Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>

						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						 
						
						</tr>
						
						<?php } ?>


						
						<tr>
						  	<td colspan="9"><center><strong>First Year, Second Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'First Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						  	
						 
						
						</tr>
						
						<?php } ?>






						<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'First Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>First Year, Summer</strong></center></td>
								
								    </tr>';

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
										AND `tbl_curriculum`.`year_level` = 'First Year'";
										$eng_1 = mysql_query($eng1);
										while($eng1_row = mysql_fetch_row($eng_1)){

									?>
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>

						

						<tr>
						  	<td colspan="9"><center><strong>Second Year, First Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Second Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						  	
						 
						
						</tr>
						
						<?php } ?>
					
						











						<tr>
						  	<td colspan="9"><center><strong>Second Year, Second Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Second Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						  	
						 
						
						</tr>
						
						<?php } ?>



						<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'Second Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>Second Year, Summer</strong></center></td>
								
								    </tr>';

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
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>






						
						  	
				<tr>
						  	<td colspan="9"><center><strong>Third Year, First Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Third Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						 
						
						</tr>
						
						<?php } ?>
				
				






				<tr>
						  	<td colspan="9"><center><strong>Third Year, Second Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Third Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						 
						
						</tr>
						
						<?php } ?>
				





				<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'Third Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>Third Year, Summer</strong></center></td>
								
								    </tr>';

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
										AND `tbl_curriculum`.`year_level` = 'Third Year'";
										$eng_1 = mysql_query($eng1);
										while($eng1_row = mysql_fetch_row($eng_1)){

									?>
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>








				<tr>
						  	<td colspan="9"><center><strong>Fourth Year, First Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'First Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						  	
						 
						
						</tr>
						
						<?php } ?>
				
				
				





				<tr>
						  	<td colspan="9"><center><strong>Fourth Year, Second Semester</strong></center></td>
						
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
								AND `tbl_curriculum`.`term` = 'Second Semester' 
								AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
								$eng_1 = mysql_query($eng1);
								while($eng1_row = mysql_fetch_row($eng_1)){

							?>
				
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
						  	
						 
						
						</tr>
						
						<?php } ?>






				<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'Third Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>Fourth Year, Summer</strong></center></td>
								
								    </tr>';

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
										AND `tbl_curriculum`.`year_level` = 'Fourth Year'";
										$eng_1 = mysql_query($eng1);
										while($eng1_row = mysql_fetch_row($eng_1)){

									?>
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>



						<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'Third Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>Fifth Year, First Semester</strong></center></td>
								
								    </tr>';

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
										AND `tbl_curriculum`.`term` = 'First Semester' 
										AND `tbl_curriculum`.`year_level` = 'Fifth Year'";
										$eng_1 = mysql_query($eng1);
										while($eng1_row = mysql_fetch_row($eng_1)){

									?>
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>




						<?php


							$counting = "SELECT * 
										FROM `tbl_curriculum`
										WHERE `course_id` = '$c_id'
										AND `term` = 'Summer'
										AND `year_level` = 'Third Year'";
							$counting_1 = mysql_query($counting);
							$row_count = mysql_num_rows($counting_1);

							if($row_count > 0){

									echo '<tr>
								  	<td colspan="9"><center><strong>Fifth Year, Second Semester</strong></center></td>
								
								    </tr>';

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
										AND `tbl_curriculum`.`term` = 'Second Semester' 
										AND `tbl_curriculum`.`year_level` = 'Fifth Year'";
										$eng_1 = mysql_query($eng1);
										while($eng1_row = mysql_fetch_row($eng_1)){

									?>
									<tr>
						
								  	<td><?php echo $eng1_row[1]; ?></td>
								  	<td><?php echo $eng1_row[2]; ?></td>
								  	<td><center><?php echo $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4]; ?></center></td>
								  	<td><center><?php echo $eng1_row[4] + $eng1_row[3]; ?></center></td>
								  	<td><center><?php echo $eng1_row[5]; ?></center></td>
								  	<?php
						  		$sp = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										";
								$sp_1 = mysql_query($sp);
								$row_sp = mysql_num_rows($sp_1);

								if($row_sp > 1){

									
									$sp_fail = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'FAIL'
										OR `tbl_grades`.`remarks` = 'DROPPED'
										";
									$sp_fail_1 = mysql_query($sp_fail);
									$row_sp_fail = mysql_fetch_row($sp_fail_1);

									if($row_sp_fail[6] == ''){
										echo '<td><center>'.$row_sp_fail[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_fail[6].'</center></td>';
									}



								$sp_pass = " SELECT `tbl_grades`.`grade_id`, `tbl_grades`.`final_grade`, `tbl_grades`.`remarks`, `tbl_subject`.`subject_code`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`, `tbl_grades`.`completion_grade`
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_grades, tbl_offerred_subject, tbl_subject
										where `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_enrolled_subject`.`offered_subject_id`
										AND `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										AND `tbl_subject`.`subject_id` = '$eng1_row[0]'
										AND `tbl_enrollment_records`.`student_id` = '$student_id_ni'
										AND `tbl_grades`.`remarks` = 'PASSED'
										OR `tbl_grades`.`remarks` = 'INC'
										OR `tbl_grades`.`remarks` = 'IP'
										OR OR `tbl_grades`.`remarks` = 'COMPLETED'
										";
									$sp_pass_1 = mysql_query($sp_pass);
									$row_sp_pass = mysql_fetch_row($sp_pass_1);

									if($row_sp_pass[6] == ''){
										echo '<td><center>'.$row_sp_pass[1].'</center></td>';

									}

									else if($row_sp_fail[6] != ''){
										echo '<td><center>'.$row_sp_pass[6].'</center></td>';
									}


								}

								else{

									$row_sp_fetch = mysql_fetch_row($sp_1);

									echo '<td><center>'.$row_sp_fetch[1].'</center></td>';
									echo '<td><center>'.$row_sp_fetch[6].'</center></td>';
									echo '<td><center>'.$row_sp.'</center></td>';

								}


						  	?>
						  	
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>














				</table>
				
							
						<div class="btn-group">
						 <!-- <a href="preview_adviceslip.php?txtsearch=<?php //echo $_POST['txtsearch']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Preview</a>-->
					<!--	  <button type="button" class="btn btn-default" name="print"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>-->
						</form>
						
			
			<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			}
			</script>

            </div><!--/span-->
            
        </div><!--End or row-->
          


			        </div><!--End or row-->
				          



</div>
</div>
									
</form>
				  
</div>

</div>

		   
            
			

<?php include("footer.php") ?>



