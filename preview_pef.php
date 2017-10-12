
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>
<?php
require_once("includes/initialize.php");
$get_student_id		 = $_GET['studentId'];
$get_ay 			 = $_GET['ay'];
$get_term			 = $_GET['term'];
include 'header-preview.php';
?>
<style type="text/css">
						.tftable2 {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
						.tftable2 th {font-size:12px;background-color:#ECE8D1;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
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
font-size: 7px;
} 
th {
    border-bottom: 1px solid #ddd;
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


.Box                           //this is the parent div
{
    background-color:red;
    width:60px;
    margin:0px;
    margin-bottom: 0px;
    padding:0px;


}
.contextimg                            //this is for the image
{
    position:relative;
    margin:0px;
    padding:0px;
    line-height:0px;

}
p{
    margin:0;
    text-align: center;
    font-size: 6px;
   
}

p2{
    margin:0;
    text-align: center;
    font-size: 9px;
    font-family: lucida sans unicode,lucida grande,sans-serif;
}
</style>


	<div class="rows">
		  
            <div class="col-5 col-sm-5 col-lg-5">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  
					
					  	<div class="Box">
						
						<center><img class="contextimg" src="img/IC_LOGO.png" width="25px">
						<p2><center><strong>Initao College</strong></center></p2> 
						<p>9022 Initao, Misamis Oriental</p>
						<p>Pre-Enrollment Form (PEF)</p></center>
						</div>

						<?php
						$mine = "SELECT CONCAT( `tbl_student`.`lname` , ', ', `tbl_student`.`fname` , ' ', `tbl_student`.`mname` ) AS 'name', `tbl_course`.`course_code` , `tbl_course`.`AY` , `tbl_student`.`student_id`
								FROM tbl_student, tbl_course
								WHERE `tbl_course`.`course_id` = `tbl_student`.`course_id`
								AND `tbl_student`.`student_id` ='$get_student_id' ";
						
						$mineq 		= mysql_query($mine) or die ("Could not execute query for miscelleneous fees.");                    
						$row_mine	= mysql_fetch_row($mineq);
						$names			 = $row_mine[0];
						$course 		= $row_mine[1];
						$course_ay 		= $row_mine[2];
						

						?><br>

						<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="8%"><span style="font-size:6px;">Name</span></td>
									<td width="54%"><span style="font-size:6px;">: <?php echo $names; ?></span></td>
									<td width="8%"><span style="font-size:6px;">ID #</span></td>
									<td width="30%"><span style="font-size:6px;">: <?php echo $get_student_id; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:6px;">Course</span></td>
									<td width="54%"><span style="font-size:6px;">: <?php echo $course; echo ', '; echo $course_ay; ?></span></td>
									<td width="8%"><span style="font-size:6px;">AY</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $get_ay; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:6px;">Scholarship</span></td>
									<td width="54%"><span style="font-size:6px;">:</span></td>
									<td width="8%"><span style="font-size:6px;">Term</span></td>
									<td width="30%"><span style="font-size:6px;">: <?php echo $get_term;?></span></td>
								</tr>
							</tbody>
				</table>

<br>


					
				<table id="table" width="100%">
					<tbody>
				  
				  	<tr>
				  		<th class="top"  align="left" style="font-size:6px;">Subject Code</th>
				  		<th class="top"   align="left" style="font-size:6px;">Descriptive Title</th>
				  		<th  class="top"  align="left" style="font-size:6px;">Units(lec)</th>
				  		<th class="top"  align="left" style="font-size:6px;">Units(lab)</th>
				  		<th  class="top" align="left" style="font-size:6px;">Schedule</th>
				  		<th  class="top" align="left" style="font-size:6px;">Bulding/Room</th>
				  		
				  	</tr>	
				 

				  <?php

				  $mydb->setQuery("SELECT `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`

									FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject

									where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
									and `tbl_enrollment_records`.`term` = '$get_term'
									and `tbl_offerred_subject`.`semester` = '$get_term'
									and `tbl_offerred_subject`.`AY` = '$get_ay'
									and `tbl_enrollment_records`.`AY` = '$get_ay'
									and `tbl_enrollment_records`.`student_id` = '$get_student_id'
									and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
									and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
									and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
									and `tbl_offerred_subject`.`AY` = `tbl_enrollment_records`.`AY`	
				  	  					");
				  	  	loadresult1();			

				  	function loadresult1(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $result) {
							$space = '    ';

					  		echo '<tr>';

					  		echo '<td width="15%" style="font-size:6px;">'. $space. $result->subject_code.'</a></td>';
					  								  		
					  		echo '<td width="25%" style="font-size:6px;">'. $space.  $result->description_title.'</td>';
					  		echo '<td width="10%" style="font-size:6px;">'. $space.  $result->units_lec.'</td>';
					  		echo '<td width="10%" style="font-size:6px;">'. $space.  $result->units_lab.'</td>';

					  		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
										FROM `tbl_instructor_load`
										WHERE `offered_subject_id` = '$result->offerred_subject_id'
										GROUP BY `offered_subject_id`
										";
								$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information");
								$row_sche = mysql_fetch_row($sche_2);
								$days_ni = $row_sche['0'];

							$ti = "SELECT DISTINCT `starttime` , `starttime_extension` , `endtime` , `endtime_extension`, `room_id`
									FROM `tbl_instructor_load`
									WHERE `offered_subject_id` = '$result->offerred_subject_id'
									";
							$tim 		= mysql_query($ti);
							$time 		= mysql_fetch_row($tim);
							$start 		= $time[0];
							$start_ex 	= $time[1];
							$end 		= $time[2];
							$end_ex 	= $time[3];
							$ro 		= $time[4];

							$ro = "SELECT `building_name_and_room_number` FROM `tbl_room` WHERE `room_id` = '$ro' ";
							$ro_2 = mysql_query($ro);
							$room = mysql_fetch_row($ro_2);
							$building_name = $room[0];

					  		echo '<td  width="20%"  style="font-size:6px;">'.  $space. $days_ni.' '.$start.$start_ex.'-'.$end.$end_ex.'</td>';
					  		echo '<td  width="20%"  style="font-size:6px;">'.  $space. $building_name.'</td>';
					  		echo '</tr>';




					  		}

				  		} 

				  	?>



				  	</tbody>
				  	<tfoot>
				  	
				  	<tr><td class="bottom"  colspan="6"></td></tr>
				  	
				  
				  </tfoot>


				 

				</table>

			

				


<br>

<?php


$tz = 'Asia/Manila';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$dt->format('d-M-Y');




$queryas13 ="SELECT  sum(`tbl_subject`.`units_lab`) as lab, sum(`tbl_subject`.`units_lec`) as lec

									FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject

									where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
									and `tbl_enrollment_records`.`term` = '$get_term'
									and `tbl_offerred_subject`.`semester` = '$get_term'
									and `tbl_offerred_subject`.`AY` = '$get_ay'
									and `tbl_enrollment_records`.`AY` = '$get_ay'
									and `tbl_enrollment_records`.`student_id` = '$get_student_id'
									and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
									and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
									and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
									and `tbl_offerred_subject`.`AY` = `tbl_enrollment_records`.`AY`";
					$resas13 = mysql_query($queryas13) or die ("Could not execute query2.");
					$row2as13 = mysql_fetch_row($resas13);
					$lab = $row2as13[0];
					$lec = $row2as13[1];
					$sum = $lab + $lec;
					

?>
	
<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="15%"><span style="font-size:6px;">Evaluated and Verified by:</span></td>
									<td width="40%"><span style="font-size:6px;">: <?php echo $_SESSION['name']; ?></span></td>
									<td width="25%"  align="right"><span style="font-size:6px;">Total Units</span></td>
									<td width="20%"><span style="font-size:6px;">:<strong> <?php echo $sum; ?></strong></span></td>
								</tr>
								<tr>
									<td width="15%"><span style="font-size:6px;">Date Evaluated</span></td>
									<td width="40%"><span style="font-size:6px;">:  <?php echo $dt->format('d-M-Y'); ?></span></td>
									
								</tr>
								<tr>
									<td width="15%"><span style="font-size:6px;">Signature</span></td>
									<td width="40%"><span style="font-size:6px;">:______________________</span></td>
									<td width="25%"  align="right"><span style="font-size:6px;">Student Signature</span></td>
									<td width="40%"><span style="font-size:6px;">:______________________</span></td>
									
								</tr>
								
							</tbody>
</table>





					
				
			</div>

            </div><!--/span-->
            
        </div><!--End or row-->
</div>

