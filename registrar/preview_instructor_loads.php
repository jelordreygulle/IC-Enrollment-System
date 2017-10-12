<?php
require_once("includes/initialize.php");
$load_instructor		 = $_GET['instructorId'];
$load_ay 			 = $_GET['ay'];
$load_term			 = $_GET['term'];
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
						<p>INSTRUCTOR LOADS</p></center>
						</div>

						<?php
						$mine = "SELECT `name`, `instructor_id` FROM `tbl_instructor` WHERE `instructor_id` ='$load_instructor' ";
						
						$mineq 		= mysql_query($mine) or die ("Could not execute query for miscelleneous fees.");                    
						$row_mine	= mysql_fetch_row($mineq);
						$name			 = $row_mine[0];
						$instructor_id 		= $row_mine[1];
						

						?><br>

						<table id="table" width="100%">
							<tbody>
								<tr>
									
									<td width="8%"><span style="font-size:7px;">ID #</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $load_instructor; ?></span></td>
									<td width="8%"><span style="font-size:7px;">Term</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $load_term;?></span></td>
									
								</tr>
								<tr>
									<td width="8%"><span style="font-size:7px;">Name</span></td>
									<td width="54%"><span style="font-size:7px;">: <?php echo $name; ?></span></td>
									<td width="8%"><span style="font-size:7px;">AY</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $load_ay; ?></span></td>
								</tr>
								
							</tbody>
				</table>



<br>
					
				<table id="table" width="100%">
					<tbody>
				  
				  	<tr>
				  		<th class="top"  align="left" style="font-size:7px;">Subject Code</th>
				  		<th class="top"   align="left" style="font-size:7px;">Descriptive Title</th>
				  		<th  class="top"  align="left" style="font-size:7px;">Units(lec)</th>
				  		<th class="top"  align="left" style="font-size:7px;">Units(lab)</th>
				  		<th  class="top" align="left" style="font-size:7px;">Schedule</th>
				  		<th  class="top" align="left" style="font-size:7px;">Bulding/Room</th>
				  		
				  	</tr>	
				 

				  <?php

					 
						$mydb->setQuery("SELECT DISTINCT `tbl_instructor_load`.`offered_subject_id`, `tbl_offerred_subject`.`offerred_subject_id` , `tbl_offerred_subject`.`offerred_subject_id` , `tbl_subject`.`subject_code` , `tbl_subject`.`description_title` , `tbl_offerred_subject`.`section` , `tbl_subject`.`units_lec` , `tbl_subject`.`units_lab` , `tbl_subject`.`requisites_subject_id` , `tbl_offerred_subject`.`slots` , `tbl_room`.`building_name_and_room_number` , `tbl_instructor_load`.`starttime` , `tbl_instructor_load`.`starttime_extension` , `tbl_instructor_load`.`endtime` , `tbl_instructor_load`.`endtime_extension`, `tbl_course`.`course_code`
										FROM tbl_offerred_subject, tbl_subject, tbl_instructor_load, tbl_room, tbl_course
										WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
										
										AND `tbl_instructor_load`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
										AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
										AND `tbl_offerred_subject`.`course_id` = `tbl_course`.`course_id`
										AND `tbl_instructor_load`.`AY` = '$load_ay'
										AND `tbl_instructor_load`.`term` = '$load_term'
										AND `tbl_instructor_load`.`instructor_id` = '$load_instructor'");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {

							$y = " ";

							$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
										FROM `tbl_instructor_load`
										WHERE `offered_subject_id` = '$result->offerred_subject_id'
										GROUP BY `offered_subject_id`
										";
								$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information");
								$row_sche = mysql_fetch_row($sche_2);
								$days_ni = $row_sche['0'];


					  		echo '<tr>';

					  		echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->offered_subject_id. '"/>'.$y. $result->subject_code .'</a></td>';
					  		echo '<td width="30%">'. $result->description_title.'</td>';
					  		echo '<td>'. $result->course_code.'</td>';
					  		
					  		echo '<td>'. $result->building_name_and_room_number.'</td>';
					  		echo '<td>'.$days_ni.$y.$result->starttime.$result->starttime_extension.'-'.$result->endtime.$result->endtime_extension.'</td>';
							
					  		echo '</tr>';
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
									and `tbl_enrollment_records`.`term` = '$load_term'
									and `tbl_offerred_subject`.`semester` = '$load_term'
									and `tbl_offerred_subject`.`AY` = '$load_ay'
									and `tbl_enrollment_records`.`AY` = '$load_ay'
									and `tbl_enrollment_records`.`student_id` = '$load_instructor'
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
									<td width="15%"><span style="font-size:8px;">Printed by:</span></td>
									<td width="40%"><span style="font-size:8px;">: <?php echo $_SESSION['name']; ?></span></td>
									<td width="25%"  align="right"><span style="font-size:8px;">Total Units</span></td>
									<td width="20%"><span style="font-size:8px;">:<strong> <?php echo $sum; ?></strong></span></td>
								</tr>
								<tr>
									<td width="15%"><span style="font-size:8px;">Date Printed</span></td>
									<td width="40%"><span style="font-size:8px;">:  <?php echo $dt->format('d-M-Y'); ?></span></td>
									
								</tr>
								
							</tbody>
</table>





					
				
			</div>

            </div><!--/span-->
            
        </div><!--End or row-->
</div>
