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
						<p>STUDENT GRADE CARD</p></center>
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
									<td width="8%"><span style="font-size:7px;">Name</span></td>
									<td width="54%"><span style="font-size:7px;">: <?php echo $names; ?></span></td>
									<td width="8%"><span style="font-size:7px;">ID #</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $get_student_id; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:7px;">Course</span></td>
									<td width="54%"><span style="font-size:7px;">: <?php echo $course; echo ', '; echo $course_ay; ?></span></td>
									<td width="8%"><span style="font-size:7px;">AY</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $get_ay; ?></span></td>
								</tr>
								<tr>
									<td width="8%"><span style="font-size:7px;">Scholarship</span></td>
									<td width="54%"><span style="font-size:7px;">:</span></td>
									<td width="8%"><span style="font-size:7px;">Term</span></td>
									<td width="30%"><span style="font-size:7px;">: <?php echo $get_term;?></span></td>
								</tr>
							</tbody>
				</table>




					
				<table class="tftable">
					 <thead>


					  	<tr>

					  		<th width="15%"  class="bottom">Subject Code</th>
					  		<th width="35%"  class="bottom">Descriptive Title</th>
					 		
					 		<th width="10%"  class="bottom">Unit(lab)</th>
					 		<th width="10%"  class="bottom">Unit(lec)</th>
					 		<th width="15%"  class="bottom">Final Grade</th>
					 		<th width="15%"  class="bottom">Remarks</th>
					 		
					  		
		
					  	</tr>	   
					  </thead>
					  <tbody>
					  	<?php
				 			

						  		
						  		$mydb->setQuery("SELECT `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`,  `tbl_grades`.*, `tbl_enrolled_subject`.*

															FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_grades

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
															AND `tbl_grades`.`enrolled_id` = `tbl_enrolled_subject`.`enrolled_id`


													");
					  			$cur = $mydb->loadResultlist();
								foreach ($cur as $result) {
									
							  		echo '<tr>';

							  		
							  		echo '<td>'. $result->subject_code.'</td>';
							  		echo '<td>'. $result->description_title.'</td>';
							  		
							  		echo '<td>'. $result->units_lab.'</td>';
							  		echo '<td>'. $result->units_lec.'</td>';
							  		echo '<td>'. $result->final_grade.'</td>';
							  		echo '<td>'. $result->remarks.'</td>';

							  		
							  						
							  		echo '</tr>';}
						  	 
					  	?>
					  </tbody>
					  <tfoot>
				  	
				  	<tr><td class="bottom"  colspan="7"></td></tr>
				  	
				  
				  </tfoot>
					
					</table>

			

				


<br>

<?php


$tz = 'Asia/Manila';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$dt->format('d-M-Y');



?>
	
<table id="table" width="100%">
							<tbody>
								<tr>
									<td width="15%"><span style="font-size:8px;">Printed by:</span></td>
									<td width="85%"><span style="font-size:8px;">: <?php echo $_SESSION['name']; ?></span></td>
								</tr>
								<tr>
									<td width="15%"><span style="font-size:8px;">Date Printed</span></td>
									<td width="85%"><span style="font-size:8px;">:  <?php echo $dt->format('d-M-Y'); ?></span></td>
									
								</tr>
								
							</tbody>
</table>





					
				
			</div>

            </div><!--/span-->
            
        </div><!--End or row-->
</div>
