<?php
require_once("includes/initialize.php");
include 'header-entry.php';
$term = $_GET['term'];
$acad_year =  $_GET['year'];
$stu_id =  $_GET['stu_id'];
?>
 
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
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Student Enrollment Details </h3>
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
				<form class="form-horizontal span4" action="delete_studentSubjects.php?studentId=<?php echo $_GET['stu_id']; ?>" method="POST">					    
				  <table class="table table-hover">
					<caption><h3 align="left"><?php echo $acad_year; ?> - <?php echo $term; ?> List of Subjects</h3><hr/></caption>
					 <thead>
					  	<tr id="table">

					  		<th width="15%"  class="bottom">Subject Code</th>
					  		<th width="40%"  class="bottom">Descriptive Title</th>
					 		<th width="25%"  class="bottom">Prerequisite</th>
					 		<th width="15%"  class="bottom">Unit(lab)</th>
					 		<th width="15%"  class="bottom">Unit(lec)</th>
					 		
					  		
		
					  	</tr>	   
					  </thead>
					  <tbody>
					  	<?php
				 			

						  		
						  		$mydb->setQuery("SELECT `tbl_subject`.`subject_code`, `tbl_subject`.`description_title`, `tbl_subject`.`requisites_subject_id`, `tbl_subject`.`units_lab`, `tbl_subject`.`units_lec`, `tbl_enrolled_subject`.`enrolled_id`, `tbl_enrolled_subject`.`offered_subject_id`, `tbl_enrolled_subject`.`erollment_records_id`, `tbl_enrollment_records`.`enrollment_record_id`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`assessment_id`, `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_offerred_subject`.`offerred_subject_id`, `tbl_offerred_subject`.`subject_id`, `tbl_offerred_subject`.`semester`, `tbl_offerred_subject`.`AY`, `tbl_subject`.`subject_id`, `tbl_enrollment_records`.`student_id`

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
					  			$cur = $mydb->loadResultlist();
								foreach ($cur as $result) {
									
							  		echo '<tr>';

							  		
							  		echo '<td width="30%">'. $result->subject_code.'</td>';
							  		echo '<td>'. $result->description_title.'</td>';
							  		echo '<td>'. $result->requisites_subject_id.'</td>';
							  		echo '<td>'. $result->units_lab.'</td>';
							  		echo '<td>'. $result->units_lec.'</td>';
							  		
							  		
							  						
							  		echo '</tr>';}
						  	 
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
					  	<tr><td class="bottom"  colspan="7"></td></tr>
					  	<tr><td  colspan="6" align="Right"><Strong>Total</Strong></td><td align="center" ><strong><?php echo $result->UN + $result->UN2 ; ?></strong></td></tr>
						<tr><td  colspan="7"></td></tr>
					  <!-- 	<tr><td colspan="2">Date Printed:  <? //print(Date("l F d, Y")); ?> .</td><td colspan="2">Advised and signed by:</td><td ></td></tr>  -->
					  </tfoot>	
					</table>
						<div class="btn-group">
						<a href="listofstudent.php" class="btn btn-default">  Back</a>
						
			 				<a href = "assignstudentsubjects.php?id=<?php echo $stu_id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Assign Subject</a>
					  		<button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					</form>
						</body>
						</html>		
					  </div>
					</div>
									
				</form>
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



