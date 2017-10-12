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
															
$sid = $_GET['studentId'];


$sql65 = "SELECT `tbl_course`.`course_id` , `tbl_course`.`course_code` , `tbl_course`.`Major` , `tbl_course`.`AY` , `tbl_student`. *
					FROM tbl_course, tbl_student
					WHERE `tbl_course`.`course_id` = `tbl_student`.`course_id`
					AND `tbl_student`.`student_id` ='$sid' ";
$result265 = mysql_query($sql65) or die ("Could not execute query for course details");
$row65 = mysql_fetch_row($result265);
$course_id=$row65[0];
$course_code=$row65[1];
$course_major=$row65[2];

?>


<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			if (isset($_POST['savestep1'])){





							                                    

							                              


 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				
				 $ay 	 = $_POST['ay'];
				 $Semester = $_POST['Semester'];
				 $Status = $_POST['Status'];
				 $stud_id = $_GET['studentId'];

				

               
                        

				  $sql22 = "SELECT * 
				  			FROM `tbl_enrollment_records` 
				  			WHERE `AY` = '$ay' and `term`='$Semester' and `student_id` = '$stud_id'";
			      $result22 = mysql_query($sql22) or die ("Could not execute query2.");
			      $num22 = mysql_num_rows($result22);
			     

			      if($num22 >=1){


					      	?>    <script type="text/javascript">
		                            alert("Theres an error Enrolling the Student because the Term or the Accademic Year of the student is already exist!!.");
		                          </script>
		                    <?php
			
							redirect('enrollment.php?studentId='.$stud_id);	

			      }
			      else{



			      	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
								FROM  `tbl_ay` 
								WHERE  `ay_status` =  'Active'
								LIMIT 0 , 30";
					$resa = mysql_query($querya) or die ("Could not execute query2.");
					$row2a = mysql_fetch_row($resa);
					$ayy2 = $row2a[1];
					$tt = $row2a[2];
																				
					$sid = $_GET['studentId'];

					$sql65 = "SELECT `tbl_course`.`course_id` , `tbl_course`.`course_code` , `tbl_course`.`Major` , `tbl_course`.`AY` , `tbl_student`. *
					FROM tbl_course, tbl_student
					WHERE `tbl_course`.`course_id` = `tbl_student`.`course_id`
					AND `tbl_student`.`student_id` ='$sid' ";
					$result265 = mysql_query($sql65) or die ("Could not execute query for course details");
					$row65 = mysql_fetch_row($result265);
					$course_id=$row65[0];
					$course_code=$row65[1];
					$course_major=$row65[2];

			      


			      		


				      		$sql78 = "INSERT INTO `tbl_enrollment_records`(`student_id`, `assessment_id`, `term`, `AY`, `status`,  `date_enrolled`) 
				      				VALUES ('$stud_id',null,'$Semester','$ay','$Status', CURRENT_TIMESTAMP)";
				     		$result278 = mysql_query($sql78) or die ("Could not execute query for enrolling the student.");			     			     
						    
						
							redirect('saveassessment.php?studentId='.$sid.'&term='.$tt.'&ay='.$ayy2.'&status='.$Status.'&course='.$course_id);

					


			      	

			      }
			      
			




			}
			  ?>
 
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student<div class="pull-right">Current Term & AY: <font color="black"><?php echo $tt; ?>, <?php echo $ayy2; ?></font></div></h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">
			            <div class="col-12 col-sm-12 col-lg-12">
			             <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Semester">ID Number: </label>
				              <div class="col-md-7">
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->student_id : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Semester">Name: </label>
				              <div class="col-md-7">
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->lname.', '.$cur->fname : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>

				            <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Semester">Course: </label>
				              <div class="col-md-7">
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo $course_code; echo ' - '; echo $course_major; ?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      	

			              

			          
			           
				           
			         
			             
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "ay">Academic Year :</label>

				              <div class="col-md-7">
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" name="ay" id="ay" type="text" value="<?php echo $ayy2; ?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Semester">Term : </label>

				              <div class="col-md-7">
				                 <input class="form-control input-sm" readonly placeholder=
									  "ID Number" name="Semester" id="Semester" type="text" value="<?php echo $tt; ?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Status">Status : </label>

				              <div class="col-md-7">
				                 <select class="form-control input-sm" name="Status" id="Status">
				                 	<option></option>
									<option value="New">New Student</option>
									<option value="Continuing">Continuing</option>	
									<option value="Trasferee">Trasferee</option>	
								</select>
				              </div>
				            </div>
				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-12">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group"> 
							          <a href="studentrecords.php?studentId=<?php echo $sid; ?>&course=<?php echo $course_id; ?>" name="back" class="btn btn-default"></span>Back</a>
									    <button type="submit" name="savestep1" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									  <a href="listofstudent.php" name="back" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></span> Change Course</a>
									  
									  
									</div>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			           

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>

<?php include("footer.php") ?>



