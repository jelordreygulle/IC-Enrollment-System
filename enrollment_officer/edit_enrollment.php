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
															
$enrolled_id = $_GET['recordID'];


$sql65 = "SELECT * FROM `tbl_enrollment_records` 
		  WHERE `enrollment_record_id` = '$enrolled_id' ";
$result265 = mysql_query($sql65) or die ("Could not execute query2.");
$row65 = mysql_fetch_row($result265);
$student_id2=$row65[1];
$Term=$row65[3];
$Acad=$row65[4];
$Status=$row65[5];



$sql653 = "SELECT `tbl_course`.`course_id` , `tbl_course`.`course_code` , `tbl_course`.`Major` , `tbl_course`.`AY` , `tbl_student`. *
					FROM tbl_course, tbl_student
					WHERE `tbl_course`.`course_id` = `tbl_student`.`course_id`
					AND `tbl_student`.`student_id` ='$student_id2' ";
$result2653 = mysql_query($sql653) or die ("Could not execute query2.");
$row653 = mysql_fetch_row($result2653);
$course_code=$row653[1];
$course_major=$row653[2];
$course_id=$row653[0];

?>


<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($student_id2)){
		 
					$student = new Student();
					$cur = $student->single_student($student_id2);
				
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

			      	if($ay != $ayy2 and $Semester != $term_session ){

			      		
				      		?>    <script type="text/javascript">
			                        alert("Error! The Term and Accademic Year you inputted does not match to the current Term and Academic you login. Please check!");
			                      </script>
			                <?php
				      		redirect('enrollment.php?studentId='.$stud_id);	


			      	}
			      	else{

			      		$sql78 = "INSERT INTO `tbl_enrollment_records`(`student_id`, `assessment_id`, `term`, `AY`, `status`) 
			      				VALUES ('$stud_id',null,'$Semester','$ay','$Status')";
			     		$result278 = mysql_query($sql78) or die ("Could not execute query2.");			     			     
					    message('The student is successfully enrolled!', "success");
						redirect('studentrecords.php?studentId='.$stud_id);



			      	}

			      }
			      
			




			}
			  ?>
 
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student</h3>
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
				              "Status">Status : </label>

				              <div class="col-md-7">
				                 <select required class="form-control input-sm" name="Status" id="Status">
				                 	<option value = ""><?php echo $Status; ?></option>
									<option value="New Student">New Student</option>
									<option value="Continuing">Continuing</option>	
									<option value="Trasferee">Trasferee</option>	
								</select>
				              </div>
				            </div>
				          </div>

			          
			           
				           
			         
			             
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "ay">Academic Year :</label>

				              <div class="col-md-7">
				                <select required class="form-control input-sm" name="ay" id="ay">
									<option value = ""><?php echo $Acad; ?></option>
									<?php
							                                 
							                                   
							                                    $c = ' - ';
							                                      $s=' / ';
							                                    

							                                    $query ="SELECT *
							                                              FROM `tbl_ay`";
							                                    $res = mysql_query($query) or die ("Could not execute query2.");
							                          
							                                    while ($row2 = mysql_fetch_row($res)) 
							                                    {
							                                      $ayid = $row2[0];
							                                      $ayy = $row2[1];
							                                     
							                                      
							                                    


							                                      
							                                      echo '<option  value="'.$ayy.'">'.$ayy.' </option>';

							                                     
							                                    }

							                                    ?>
								
								</select>	
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-5 control-label" for=
				              "Semester">Term : </label>

				              <div class="col-md-7">
				                 <select required class="form-control input-sm" name="Semester" id="Semester">
									<option value = ""><?php echo $Term; ?></option>
									<option value="First Semester">First Semester</option>
									<option value="Second Second">Second Semester</option>	
									<option value="Summer">Summer</option>	
								</select>
				              </div>
				            </div>
				          </div><br>
				          <div class="form-group" id="idno">
				            <div class="col-md-12">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group"> 
							          <a href="studentrecords.php?studentId=<?php echo $student_id2; ?>&course=<?php echo $course_id; ?>" name="back" class="btn btn-default"></span>Back</a>
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



