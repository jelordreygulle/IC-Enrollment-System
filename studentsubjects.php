<?php
require_once("includes/initialize.php");
include 'header-entry.php';
$term = $_GET['term'];
$acad_year =  $_GET['year'];
$stu_id =  $_GET['stu_id'];
$course_id =  $_GET['course'];



$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
				FROM  `tbl_ay` 
				WHERE  `ay_status` =  'Active'
				and `ay` = '$acad_year'
				and `term` = '$term'
				";
	$resa = mysql_query($querya) or die ("Could not execute query2.");
	$row2a = mysql_num_rows($resa);


?>
<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>
 
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['stu_id'])){
				if ($_GET['stu_id']==""){
					message("ID Number is required!","error");
					check_message();
					
				}
			}

  ?>
  <?php
     $student = new Student();
	 $cur = $student->single_student($_GET['stu_id']);

	 ?>
		  <!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Student Enrollment Details <div class="pull-right">Term & AY: <font color="black"><?php echo $term; ?>, <?php echo $acad_year; ?></font></div></h3>
					  </div>
					  <div class="panel-body">
					   <div class="row">      	  		            		          
			           <div class="container">
				 		<div class="well">
					    <form class="form-horizontal span4" action="#.php" method="POST">
				           <table align="center"> 
				           	<thead>
							  	<tr id="table">
							  		<th width="15%"  class="bottom">ID Number</th>
							  		<th width="25%"  class="bottom">Name</th>
							  		
							  		<th width="60%" class="bottom">Course</th>
							 		
							 		
							  		
				
							  	</tr>	
						    </thead> 

						    <?php
						    $mydb->setQuery("SELECT DISTINCT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name',  `tbl_course`.`course_code` ,  `tbl_student`.`course_id` ,  `tbl_course`.`course_id`, `tbl_course`.`AY` 
												FROM tbl_student, tbl_course
												WHERE (`tbl_student`.`course_id` =  `tbl_course`.`course_id`
												AND (`tbl_student`.`student_id` =  '$stu_id'
												AND `tbl_student`.`course_id` = '$course_id'
												)

												)
												

							");
							loadresult();


						    ?>
						     <tbody>
						     	<?php
						     	function loadresult(){
						  			global $mydb;
							  		$cur = $mydb->loadResultList();
									foreach ($cur as $student) {
							  		echo '<tr>';

							  		echo '<td>
							  				<a href="./edit_studentinfo.php?id='.$student->student_id.'">' . $student->student_id.'</a></td>';
							  		echo '<td>'. $student->Name.'</td>';
							  		echo '<td>'. $student->course_code.', '.$student->AY.'</td>';
							  		
							  		echo '</tr>';
							  		}

						  		} 
						  		?>
						      </tbody>
						       <tfoot>
				  	
							  	<tr><td   colspan="7"></td></tr>
							  	<tr><td  colspan="6" align="Right"></td><td align="center" ></td></tr>
							  </tfoot>     
					     </table>
					     </form>
					    </div>	
					   </div>				            	              
			          </div>				          
			         </div><!--/span-->
			    <!--  </form> -->
			    <div class="rows">					  
				<div class="panel-body">
				<html>					  
				<body>
				<div class="container">
					<?php
					check_message();
						
					?>
				 <div class="well">
				<form class="form-horizontal span4" action="delete_enrolled_subject.php?term=<?php echo $term; ?>&year=<?php echo $acad_year; ?>&stu_id=<?php echo $stu_id; ?>&course=<?php echo $course_id; ?>" method="POST">					    
				  <table class="tftable">
					<caption><h3 align="left"><?php echo $acad_year; ?> - <?php echo $term; ?> List of Subjects</h3><hr/></caption>
					 <thead>
					  	<tr id="table">

					  		<th width="13%"  class="bottom">Subject Code</th>
					  		<th width="15%"  class="bottom">Descriptive Title</th>
					 		<th width="10%"  class="bottom">Prerequisite</th>
					 		<th width="7%"  class="bottom">Unit(lab)</th>
					 		<th width="7%"  class="bottom">Unit(lec)</th>
					 		<th width="5%"  class="bottom">Section</th>
					 		<th width="14%"  class="bottom">Instructor</th>
					 		<th width="14%"  class="bottom">Class Sched.</th>
					 		<th width="15%"  class="bottom">Bulding/Room</th>
					 		
					  		
		
					  	</tr>	   
					  </thead>
					  <tbody>
					  	<?php
				 			

						  		
						  		$mydb->setQuery("SELECT DISTINCT `tbl_instructor_load`.`offered_subject_id`, `tbl_offerred_subject`.`offerred_subject_id` , `tbl_subject`.`subject_code` , `tbl_subject`.`description_title` , `tbl_offerred_subject`.`section` , `tbl_subject`.`units_lec` , `tbl_subject`.`units_lab` , `tbl_subject`.`requisites_subject_id` , `tbl_offerred_subject`.`slots` , `tbl_room`.`building_name_and_room_number`, `tbl_room`.`room_id` , `tbl_instructor_load`.`starttime` , `tbl_instructor_load`.`starttime_extension` , `tbl_instructor_load`.`endtime` , `tbl_instructor_load`.`endtime_extension`, `tbl_instructor`.`name`, `tbl_enrolled_subject`.`enrolled_id`

													FROM tbl_offerred_subject, tbl_subject, tbl_instructor_load, tbl_room, tbl_enrollment_records, tbl_enrolled_subject, tbl_instructor

													WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
													AND `tbl_instructor`.`instructor_id`=`tbl_instructor_load`.`instructor_id`
													AND `tbl_instructor_load`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
													AND `tbl_instructor_load`.`room_id` = `tbl_room`.`room_id`
													AND `tbl_instructor_load`.`AY` = '$acad_year'
													AND `tbl_instructor_load`.`term` = '$term'
													AND `tbl_enrolled_subject`.`offered_subject_id` =  `tbl_instructor_load`.`offered_subject_id`
													AND `tbl_enrolled_subject`.`offered_subject_id` =   `tbl_offerred_subject`.`offerred_subject_id`
													
													and `tbl_enrollment_records`.`enrollment_record_id` = `tbl_enrolled_subject`.`erollment_records_id`
													and `tbl_enrollment_records`.`student_id` = '$stu_id'
													and `tbl_enrollment_records`.`term` = '$term'
													and `tbl_offerred_subject`.`semester` = '$term'
													and `tbl_offerred_subject`.`AY` = '$acad_year'
													and `tbl_enrollment_records`.`AY` = '$acad_year'

													");
					  			$cur = $mydb->loadResultlist();
								foreach ($cur as $result) {
									$space = '  ';
									$term = $_GET['term'];
									$acad_year =  $_GET['year'];

									$mmk_1 = "SELECT `day` FROM `tbl_instructor_load` WHERE `offered_subject_id` = '$result->offered_subject_id' ";
									$mmk1 = mysql_query($mmk_1);
									$mmk = mysql_num_rows($mmk1);

									for($i=0; $i<$mmk; $i++){
							  		
							  		$row_mmk = mysql_fetch_row($mmk1);
							  		$day2 = $row_mmk[0];
							  		$new_fell =0;

							  		$sql22 = "SELECT `tbl_instructor_load`.`offered_subject_id`, `tbl_instructor_load`.`day`
												FROM `tbl_instructor_load`, `tbl_enrolled_subject`, `tbl_enrollment_records`
												WHERE `tbl_instructor_load`.`day` = `tbl_instructor_load`.`day`
												AND (
												(
												`tbl_instructor_load`.`starttime`
												BETWEEN `tbl_instructor_load`.`starttime`
												AND `tbl_instructor_load`.`endtime`
												)
												OR (
												`tbl_instructor_load`.`endtime`
												BETWEEN `tbl_instructor_load`.`starttime`
												AND `tbl_instructor_load`.`endtime`
												)
												)
												
												AND `tbl_instructor_load`.`offered_subject_id` =`tbl_enrolled_subject`.`offered_subject_id`
												AND `tbl_enrolled_subject`.`erollment_records_id` =`tbl_enrollment_records`.`enrollment_record_id`
												AND `tbl_instructor_load`.`term` = '$term'
												AND `tbl_instructor_load`.`AY` = '$acad_year'
												AND `tbl_instructor_load`.`starttime_extension` = `tbl_instructor_load`.`starttime_extension`
												AND `tbl_instructor_load`.`endtime_extension` = `tbl_instructor_load`.`starttime_extension`
												";
								    $fell = mysql_query($sql22) or die ("Could not execute query2.");
								    $fell_row = mysql_fetch_row($fell);
								    $fell_count = $fell_row[0];
								    $fell_count2 = $fell_row[1];
								    


								    

								    if($fell_count>0){}

								    	
								    else{
								    		

								    
								    


								    }

									}


						echo '<tr>';

							  		
							  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->enrolled_id. '"/>'.$space. $result->subject_code.'</td>';
							  		echo '<td>'. $result->description_title.'</td>';
							  		echo '<td>'. $result->requisites_subject_id.'</td>';
							  		echo '<td>'. $result->units_lab.'</td>';
							  		echo '<td>'. $result->units_lec.'</td>';
							  		echo '<td>'. $result->section.'</td>';
							  		echo '<td>'. $result->name.'</td>';

							  		$sche = "SELECT GROUP_CONCAT( `day` SEPARATOR '' ) AS schedule
										FROM `tbl_instructor_load`
										WHERE `offered_subject_id` = '$result->offerred_subject_id'
										GROUP BY `offered_subject_id`
										";
								$sche_2 = mysql_query($sche) or die ("cannot execute query in getting the subjects information");
								$row_sche = mysql_fetch_row($sche_2);
								$days_ni = $row_sche['0'];
							  		
							  		echo '<td>'.$days_ni.' '. $result->starttime.$result->starttime_extension.'-'.$result->endtime.$result->endtime_extension.'</td>';
							  		echo '<td>'. $result->building_name_and_room_number.'</td>';
							  		
							  		
							  						
							  		echo '</tr>';

							  		}
						  	 
					  	?>
					  </tbody>
					  <tfoot>
					  		<?php

 

					  	// $cid = (isset($studcourse)) ? $studcourse->COURSE_ID : 0;
						$mydb->setQuery("SELECT SUM(`tbl_subject`.`units_lab`) as UN, SUM(`tbl_subject`.`units_lec`) as UN2,
												`tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`

													FROM tbl_subject, tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject

													where `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
													and `tbl_enrollment_records`.`term` = '$term'
													and `tbl_offerred_subject`.`semester` = '$term'
													and `tbl_offerred_subject`.`AY` = '$acad_year'
													and `tbl_enrollment_records`.`AY` = '$acad_year'
													and `tbl_enrollment_records`.`student_id` = '$stu_id'
													and  `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
													and  `tbl_offerred_subject`.`subject_id` =  `tbl_subject`.`subject_id` 
													and `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
													and `tbl_offerred_subject`.`AY` = `tbl_enrollment_records`.`AY`

												");
						  		$result = $mydb->loadSingleResult();	 

					  	?>
					  	<tr><td class="bottom"  colspan="9"></td></tr>
					  	<tr><td  colspan="8" align="Right"><Strong>Total Units</Strong></td><td align="center" ><strong><?php echo $result->UN + $result->UN2 ; ?></strong></td></tr>
						<tr><td  colspan="9"></td></tr>
					  <!-- 	<tr><td colspan="2">Date Printed:  <? //print(Date("l F d, Y")); ?> .</td><td colspan="2">Advised and signed by:</td><td ></td></tr>  -->
					  </tfoot>	
					</table><BR>
						<div class="btn-group">
						<a href="studentrecords.php?studentId=<?php echo $stu_id; ?>&course=<?php echo $course_id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
						
						
			 				


							<?php
						

							
									echo '<a href="preview_pef.php?studentId='.$stu_id.'&term='.$term.'&ay='.$acad_year.'" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print PEF</a>';

									echo '<a href = "assignstudentsubjects.php?id='.$stu_id.'&course='.$course_id.'&term='.$term.'&ay='.$acad_year.'" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Assign Subject</a>';
						  			echo '<button type="submit" class="btn btn-danger" name="delete"  data-toggle="modal" data-target="#delete_mandatory"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>

							  		<div class="modal fade" id="delete_mandatory" role="dialog">
									    <div class="modal-dialog">
									    
									      
									      <div class="modal-content">
									        <div class="alert alert-danger">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Warning Message</h4>
									        </div>
									        <div class="modal-body" >
									          <p>Are you sure you want to delete the selected subjects?.</p>
									        </div>
									        <div class="modal-footer">
									          <button name="delete" class="btn btn-success"><i class="icon-check icon-large"></i> Yes</button>
									          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>';

								




							?>
					</form>







				





						</body>
						</html>		
					  </div>
					</div>
									
		

			 <SCRIPT LANGUAGE="JavaScript"> 
			
		 </script>

            </div><!--/span-->
            
        </div><!--End or row-->
          
</div>

			        </div><!--End or row-->
									
				</form>
				  
		  </div>

		</div>

		   
            
			

<?php include("footer.php") ?>



