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










$c_id = $_GET['id'];
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
	$cur = $curriculum->single_course($_GET['id']);
		

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
  
    <?php
    	$id_sa_course = $_GET['id'];
    	$find_cur_1 = "SELECT `course_id` FROM `tbl_curriculum` WHERE `course_id` = '$id_sa_course' ";
    	$find_cur_query = mysql_query($find_cur_1);
    	$curriculum_row = mysql_num_rows($find_cur_query);
    	$course_count = $curriculum_row;

    	if($course_count >0){

    		ECHO '<form class="navbar-form navbar-left" action="curriculum.php" method="POST">
		      <a href="edit_curriculum.php?courseId='.$c_id.'" class="btn btn-warning"><span class="glyphicon glyphicon-repeat"></span> Update Curriculum</a>
		    </form>';

    	}
    	else{

    		ECHO '<form class="navbar-form navbar-left" action="curriculum.php" method="POST">
		      <a href="new_curriculum.php?courseId='.$c_id.'" class="btn btn-info"><span class="glyphicon glyphicon-repeat"></span> Create Curriculum</a>
		    </form>';

    	}



    ?>

   


    
  </div><!-- /.navbar-collapse -->
</nav>

    


<?php 


if($course_count == 0){

}

else{

?>


<div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	<html>
					  
					  	<body>
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="center"><?php echo $cur->course_code ; ?>, <?php echo $cur->AY; ?></h3></caption>


<br>



						<table class="tftable" border="2">
						<tr>
									
									
									<th width="10%"> Subj. Code</th>
									<th width="45%"> Descriptive Title</th>
									<th width="10%"> Unit(Lec)</th>
									<th width="10%"> Unit(Lab)</th>
									<th width="10%"> Total Units</th>
									<th width="15%"> Pre-requisite</th>
									
									
						</tr>
					
						<tr>
						  	<td colspan="6"><center><strong>First Year, First Semester</strong></center></td>
						
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
						  	
						 
						
						</tr>
						
						<?php } ?>


						
						<tr>
						  	<td colspan="6"><center><strong>First Year, Second Semester</strong></center></td>
						
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
								  	<td colspan="6"><center><strong>First Year, Summer</strong></center></td>
								
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
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>

						

						<tr>
						  	<td colspan="6"><center><strong>Second Year, First Semester</strong></center></td>
						
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
						  	
						 
						
						</tr>
						
						<?php } ?>
					
						











						<tr>
						  	<td colspan="6"><center><strong>Second Year, Second Semester</strong></center></td>
						
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
								  	<td colspan="6"><center><strong>Second Year, Summer</strong></center></td>
								
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
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>

						
						  	
				<tr>
						  	<td colspan="6"><center><strong>Third Year, First Semester</strong></center></td>
						
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
						  	
						 
						
						</tr>
						
						<?php } ?>

				











				<tr>
						  	<td colspan="6"><center><strong>Third Year, Second Semester</strong></center></td>
						
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
								  	<td colspan="6"><center><strong>Third Year, Summer</strong></center></td>
								
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
								  	
								 
								
									</tr>
								
								<?php } 



							}

							else{



							}




						?>








				<tr>
						  	<td colspan="6"><center><strong>Fourth Year, First Semester</strong></center></td>
						
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
						  	
						 
						
						</tr>
						
						<?php } ?>
				
				
				





				<tr>
						  	<td colspan="6"><center><strong>Fourth Year, Second Semester</strong></center></td>
						
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
								  	<td colspan="6"><center><strong>Fourth Year, Summer</strong></center></td>
								
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
								  	<td colspan="6"><center><strong>Fifth Year, First Semester</strong></center></td>
								
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
								  	<td colspan="6"><center><strong>Fifth Year, Second Semester</strong></center></td>
								
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

<?php } ?>

</div>
</div>
									
</form>
				  
</div>

</div>

		   
            
			

<?php include("footer.php") ?>



