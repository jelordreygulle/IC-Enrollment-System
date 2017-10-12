<?php
require_once("includes/initialize.php");
include 'header-entry.php';
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
<div class="container">
<?php
	$offeredid = $_GET['offeredsubjectId'];
	//$singlesubject = new Offered_Subject();
	//$object = $single_offeredsubject->single_offered_subject($subjid);


$sqldd = "SELECT `tbl_subject`. *, `tbl_offerred_subject`. * , `tbl_room`. * , `tbl_course`. *  
			FROM tbl_subject, tbl_offerred_subject, tbl_room, tbl_course
			WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
			AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
			AND `tbl_course`.`course_id` = `tbl_offerred_subject`.`course_id`
			AND `tbl_offerred_subject`.`semester` = '$tt'
			AND `tbl_offerred_subject`.`AY` = '$ayy2'
			AND `tbl_offerred_subject`.`offerred_subject_id` = '$offeredid'";
$result2qq = mysql_query($sqldd) or die ("Could not execute query2.");
$rowd = mysql_fetch_row($result2qq);

$off_id = $rowd['5'];

$wewe = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS UN
			FROM tbl_enrolled_subject
			WHERE `tbl_enrolled_subject`.`offered_subject_id` = '$off_id'

		";

$wewewe = mysql_query($wewe) or die ("Could not execute query2.");
$roww = mysql_fetch_row($wewewe);
							                                    

$off_bal = $rowd['8'] - $roww['0'];



?>







		
		 
		        <form class="form-horizontal well span4" action="offered_subject_id.php?id=<?php echo $rowd['5'];?>" method="POST">

					<fieldset>
						<legend>Offered Subject Details</legend>
						<center>									

							<style type="text/css">
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
							  	<td><?php echo $rowd['1'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Descriptive Title:</strong></span></td>
							  	<td><?php echo $rowd['2'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Pre-requisite:</strong></span></td>
							  	<td><?php echo $rowd['5'];?></td>
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
							  	<td><?php echo $rowd['13'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Course:</strong></span></td>
							  	<td><?php echo $rowd['19']; echo ' - '; echo $rowd['20']; echo ', '; echo $rowd['21'];?></td>
							  </tr>

							   <tr>
							  	<td><span class="pull-right"><strong>Class Schedule:</strong></span></td>
							  	<td><?php echo $rowd['11'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Building/Room:</strong></span></td>
							  	<td><?php echo $rowd['17'];?></td>
							  </tr>

							  <tr>
							  	<td><span class="pull-right"><strong>Slot:</strong></span></td>
							  	<td><?php echo $rowd['9']; ?></td>
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

