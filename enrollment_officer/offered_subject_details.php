<?php
require_once("includes/initialize.php");
include 'header-entry.php';


$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
				FROM  `tbl_ay` 
				WHERE  `ay_status` =  'Active'
				LIMIT 0 , 30";
	$resa = mysql_query($querya) or die ("Could not execute query2.");
	$row2a = mysql_fetch_row($resa);
	$ayy2 = $row2a[1];
	$tt = $row2a[2];

?>
<div class="container">
<?php
	$offeredid = $_GET['offeredsubjectId'];
	//$singlesubject = new Offered_Subject();
	//$object = $single_offeredsubject->single_offered_subject($subjid);


$sqldd = "SELECT `tbl_subject`.`subject_code`, 
				 `tbl_subject`.`description_title`, 
				 `tbl_subject`.`requisites_subject_id`, 
				 `tbl_subject`.`units_lec`, 
				 `tbl_subject`.`units_lab`, 
				 `tbl_offerred_subject`.`section`, 
				 `tbl_course`.`course_code`, 
				 `tbl_instructor_load`.`day`, 
				 `tbl_instructor_load`.`starttime`, 
				 `tbl_instructor_load`.`starttime_extension`, 
				 `tbl_instructor_load`.`endtime`, 
				 `tbl_instructor_load`.`endtime_extension`, 
				 `tbl_room`.`building_name_and_room_number`, 
				 `tbl_offerred_subject`.`slots`, 
				 `tbl_offerred_subject`.`offerred_subject_id`
		FROM tbl_course, tbl_offerred_subject, tbl_room, tbl_instructor, tbl_instructor_load, tbl_subject
		where `tbl_course`.`course_id`= `tbl_offerred_subject`.`course_id`
		AND `tbl_offerred_subject`.`offerred_subject_id` = `tbl_instructor_load`.`offered_subject_id`
		AND `tbl_instructor`.`instructor_id` = `tbl_instructor_load`.`instructor_id`
		AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
		AND `tbl_offerred_subject`.`subject_id` = `tbl_offerred_subject`.`subject_id`
		AND `tbl_offerred_subject`.`semester` = '$tt'
		AND  `tbl_offerred_subject`.`AY` = '$ayy2'
		AND `tbl_offerred_subject`.`offerred_subject_id` = '$offeredid'
		AND `tbl_subject`.`subject_id` = `tbl_offerred_subject`.`subject_id`
		";
$result2qq = mysql_query($sqldd) or die ("Could not execute query for getting the subject information.");
$rowd = mysql_fetch_row($result2qq);

$off_id = $rowd['5'];

$wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
			FROM tbl_enrolled_subject
			WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$offeredid'
			AND `tbl_enrolled_subject`.`offered_term` = '$tt'
			AND `tbl_enrolled_subject`.`Offered_AY` = '$ayy2'

		";

$wewewe = mysql_query($wewe) or die ("Could not execute query2.");
$roww = mysql_fetch_row($wewewe);
$roww['0'];							                                    

$off_bal = $rowd['13'] - $roww['0'];



?>







		
		 
		        <form class="form-horizontal well span4" action="offered_subject_id.php?id=<?php echo $rowd['5'];?>" method="POST">

					<fieldset>
						<legend>Offered Subject Details</legend>
						<center>									

							<style width="100%" type="text/css">
							.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
							.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
							.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#176B99;}
							.tg .tg-yw4l{vertical-align:top}
							</style>
							<table class="tg">
							  <tr>
							    <th class="tg-yw4l"><center> PARTICULARS</center></th>
							    <th class="tg-yw4l"><center> DETAILS</center></th>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Term:</strong></span></td>
							  	<td><?php echo $tt;?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Academic Year:</strong></td>
							  	<td><?php echo $ayy2;?></td>
							  </tr>
							  
							  <tr>
							  	<td><span class="pull-right"><strong>Subject Code:</strong></span></td>
							  	<td><?php echo $rowd['0'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Descriptive Title:</strong></span></td>
							  	<td><?php echo $rowd['1'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Pre-requisite:</strong></span></td>
							  	<td><?php echo $rowd['2'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Unit(lec):</strong></span></td>
							  	<td><?php echo $rowd['3'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Unit(lab):</strong></span></td>
							  	<td><?php echo $rowd['4'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Section:</strong></span></td>
							  	<td><?php echo $rowd['5'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Course:</strong></span></td>
							  	<td><?php echo $rowd['6'];?></td>
							  </tr>

							  <?php $sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
										FROM `tbl_instructor_load`
										WHERE `offered_subject_id` = '$rowd[14]'
										GROUP BY `offered_subject_id`
										";
								$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information");
								$row_sche = mysql_fetch_row($sche_2);
								$days_ni = $row_sche['0'];

								?>

							   <tr>
							  	<td><span class="pull-right"><strong>Class Schedule:</strong></span></td>
							  	<td><?php echo $days_ni; echo ' ', $rowd['8']; echo $rowd['9']; echo '-', $rowd['10']; echo $rowd['11']; ?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Building/Room:</strong></span></td>
							  	<td><?php echo $rowd['12'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Slot:</strong></span></td>
							  	<td><?php echo $rowd['13']; ?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Available Slot:</strong></span></td>
							  	<td><?php echo $off_bal; ?></td>
							  </tr>

							</table>
				     
						<br>
						 <div class="form-group">
				            <div class="col-md-12">
				              <label class="col-md-3 control-label" for=
				              "idno"></label>

				              <div class="col-md-6">
				                <a href="offerred_subject.php" name="add" class="btn btn-danger"><span class="glyphicon arrow-left"></span> Back</a>
				                
				              </div>
				            </div>
				          </div>

							
					</center></fieldset>	

									
				</form>
				</div><!--End of container-->
		

<?php include("footer.php") ?>

