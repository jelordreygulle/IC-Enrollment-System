<?php
require_once("includes/initialize.php");
include 'header-preview.php';

$get_instructor_id		 = $_GET['instructorID'];
$off_id 			 = $_GET['offered_subject'];

$vvv = "SELECT `AY`, `semester` FROM `tbl_offerred_subject` WHERE `offerred_subject_id` = $off_id";
$vvv_query = mysql_query($vvv) or die ("Cannot execute query for getting the AY and Term of the subject.");
$vvv_row = mysql_fetch_row($vvv_query);

$ayy2 = $vvv_row[0];
$tt = $vvv_row[1];

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
						<p>LIST OF STUDENT</p></center>
						</div>

						<?php
						$fac = "SELECT `name` FROM `tbl_instructor` WHERE `instructor_id`= '$get_instructor_id'";
										$facu = mysql_query($fac) or die ("the query for getting the name of the instructor is unsuccessful. Please contact you administrator");
										$row_fac = mysql_fetch_row($facu);
										$facu_name = $row_fac[0];

						?><br>

						<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="8%"><span style="font-size:7px;">Name</span></td>
									<td width="54%"><span style="font-size:7px;">: <?php echo $facu_name; ?></span></td>
									<td width="8%"><span style="font-size:7px;">Term</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $tt;?></span></td>
									
								</tr>
								<tr>
									<td width="8%"><span style="font-size:7px;">ID #</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $get_instructor_id; ?></span></td>
									<td width="8%"><span style="font-size:7px;">AY</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $ayy2; ?></span></td>
								</tr>
							
							</tbody>
				</table>




					
				<table id="table" width="100%">
					<tbody>
				  
				  	<tr>
				  		<th class="top"  align="left" style="font-size:7px;">Roll #</th>
				  		<th class="top"   align="left" style="font-size:7px;">Student ID</th>
				  		<th  class="top"  align="left" style="font-size:7px;">Name</th>
				  		<th class="top"  align="left" style="font-size:7px;">Course</th>
				  		
				  		
				  	</tr>	
				 

				  <?php

				  $mydb->setQuery("SELECT  `tbl_course`.`course_code` ,  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ',  `tbl_student`.`mname` ) AS  'Name'
												FROM tbl_course, tbl_student, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject
												WHERE  `tbl_course`.`course_id` =  `tbl_offerred_subject`.`course_id` 
												AND  `tbl_course`.`course_id` =  `tbl_student`.`course_id` 
												AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
												AND  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
												AND  `tbl_enrollment_records`.`student_id` =  `tbl_student`.`student_id` 
												AND  `tbl_offerred_subject`.`offerred_subject_id` = '$off_id'
				  	  					");
				  	  	loadresult1();			

				  	function loadresult1(){
				  			$i = 1;
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $result) {
							

					  		echo '<tr>';

					  		echo '<td width="5%" style="font-size:7px;">'.$i.'</a></td>';
					  								  		
					  		echo '<td width="15%" style="font-size:7px;">'.$result->student_id.'</td>';
					  		echo '<td width="25%" style="font-size:7px;">'.$result->Name.'</td>';
					  		echo '<td width="55%" style="font-size:7px;">'.$result->course_code.'</td>';

					  		
					  		echo '</tr>';

					  		$i++;




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


$lo = "SELECT  `tbl_course`.`course_code` ,  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ',  `tbl_student`.`mname` ) AS  'Name'
												FROM tbl_course, tbl_student, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject
												WHERE  `tbl_course`.`course_id` =  `tbl_offerred_subject`.`course_id` 
												AND  `tbl_course`.`course_id` =  `tbl_student`.`course_id` 
												AND  `tbl_enrolled_subject`.`erollment_records_id` =  `tbl_enrollment_records`.`enrollment_record_id` 
												AND  `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_offerred_subject`.`offerred_subject_id` 
												AND  `tbl_enrollment_records`.`student_id` =  `tbl_student`.`student_id` 
												AND  `tbl_offerred_subject`.`offerred_subject_id` = '$off_id'";
$lo_q = mysql_query($lo);
$num_mine = mysql_num_rows($lo_q);

?>
	
<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="15%"><span style="font-size:8px;">Printed by:</span></td>
									<td width="40%"><span style="font-size:8px;">: <?php echo $_SESSION['name']; ?></span></td>
									<td width="25%"  align="right"><span style="font-size:8px;">Total Number of Students</span></td>
									<td width="20%"><span style="font-size:8px;">:<strong><font color="red"> <?php echo $num_mine; ?></font></strong></span></td>
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
