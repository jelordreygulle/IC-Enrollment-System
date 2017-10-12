<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';

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
<style type="text/css">
body { 
background-image: url(); 
background-repeat: no-repeat; 
height: 100%; 
width: 100%; 
background-position: bottom; 
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
</style>

<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_POST['search'])){
				if ($_POST['txtsearch']==""){
					message("ID Number is required!","error");
					check_message();

				}else{

					/*$Schoolyr = new Schoolyr();
					$NumberofResult = $Schoolyr->findsy($_POST['txtsearch']);
					if ($NumberofResult == 0){
						message("This Student is advice to go back from step 1!","error");
						check_message();

					}*/

						//$sy = $Schoolyr->single_sy($_POST['txtsearch']);
						
					

					$student = new Student();
					$cur = $student->single_student($_POST['txtsearch']);
					$course = new Course();
					$studcourse = $course->single_course($cur->course_id);


					



					

					
				}
			}

  ?>
     <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"> Student ID Number:</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
    <form class="navbar-form navbar-left" action="Student_advicesubject.php" method="POST">
      <div class="form-group">
        <input type="text" name="txtsearch" class="form-control" placeholder="Search">
      </div>
      <button type="submit" name="search"class="btn btn-default">  <span class="glyphicon glyphicon-search"></span></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php
       $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 


      echo date_toText($created); ?></a></li>
      <li class="dropdown">
       
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
		  <form class="form-horizontal span4" action="#.php" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Advising of Subjects</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">
			         	   <div class="col-12 col-sm-12 col-lg-12">     
			            		          
			           
				           <table align="center">
				         	<thead>
							  	<tr id="table">
							  		<th width="15%" >ID No.</th>
							  		<th width="25%" >Name</th>
							  		<th width="30%" >Course</th>
							  		
							 		<th width="15%" >Academic Year</th>
							 		<th width="15%">Semester</th>
							 		
							  		
				
							  	</tr>	
						    </thead> 
						     <tbody>
						     	<tr>
						     		<td><?php echo (isset($cur)) ? $cur->student_id : 'ID' ;?></td>
						     		<td><?php echo (isset($cur)) ? $cur->lname.', '.$cur->fname.' '.$cur->mname : 'Fullname' ;?></td>
						     		<?php /*
						     		$course = $cur->course_id;

						     		$gg = "SELECT *
											FROM `tbl_course`
											WHERE `course_id` ='$course'";
						     		$ll = mysql_query($gg) or die ("Could not execute query for course!.");
							                          
							        $rowl = mysql_fetch_row($ll);
							                                    
							        $course_des = $rowl[1];*/

						     		?>
						     		<td><?php echo (isset($studcourse)) ? $studcourse->course_code : 'course' ;?></td>
						     		<td><?php echo $ayy2 ;?></td>
						     		<td><?php echo $tt ;?></td>
						     	</tr>
						      </tbody>
						       <tfoot>
				  	
							  	<tr><td   colspan="7"></td></tr>
							  	<tr><td  colspan="6" align="Right"></td><td align="center" ></td></tr>
							  </tfoot>	   
					    	<table>
					
				           </table>
			            			             
			            </div>
				          
			            </div><!--/span-->
			        <div class="rows">

<br>
		 
            <div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	<html>
					  
					  	<body>
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="left">Adviced Subjects for <?php echo $tt, ', ', $ayy2;?></h3></caption>

					    <style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
						</style>

						<table class="tftable" border="1">
						<tr>
									
									<th width="20%"> Subj. Code</th>
									<th width="40%"> Descriptive Title</th>
									<th width="10%"> Unit(Lec)</th>
									<th width="10%"> Unit(Lab)</th>
									<th width="20%"> Pre-requisite</th>
									
								</tr>
						<?php
						$student = (isset($cur)) ? $cur->student_id : 'ID' ;
						$stud_course = (isset($studcourse)) ? $studcourse->course_id : 'courseD' ;
						
							$qq="SELECT distinct f.`subject_code`
								FROM `tbl_grades` a, `tbl_enrolled_subject` b, `tbl_enrollment_records` c, `tbl_student` d, `tbl_offerred_subject` e, `tbl_subject` f, `tbl_course` g
								WHERE a.`enrolled_id` = b.`enrolled_id` 
								AND b.`offered_subject_id` = e.`offerred_subject_id` 
								AND b.`erollment_records_id` = c.`enrollment_record_id` 
								AND c.`student_id` = d.`student_id` 
								AND e.`subject_id` = f.`subject_id` 
								AND d.`course_id` = g.`course_id` 
								AND c.`student_id` ='$student'
								AND g.`course_id` ='$stud_course'
								AND a.`remarks` = 'Passed'
								";

							$qqq = mysql_query($qq) or die ("Could not execute query for course, grades and student Enrollment Details!.");
							                          
							while($rowl = mysql_fetch_row($qqq)){

							$requisites = $rowl[0];




							$ss = 	"SELECT distinct (f.`subject_id`) , f.`subject_code` , f.`description_title` , f.`units_lec` , f.`units_lab` , f.`requisites_subject_id`
								FROM `tbl_grades` a, `tbl_enrolled_subject` b, `tbl_enrollment_records` c, `tbl_student` d, `tbl_offerred_subject` e, `tbl_subject` f, `tbl_course` g
								WHERE a.`enrolled_id` = b.`enrolled_id`
								AND b.`offered_subject_id` = e.`offerred_subject_id`
								AND b.`erollment_records_id` = c.`enrollment_record_id`
								AND c.`student_id` = d.`student_id`
								AND e.`subject_id` = f.`subject_id`
								AND d.`course_id` = g.`course_id`
								AND c.`student_id` ='$student'
								AND g.`course_id` ='$stud_course'
								AND f.`requisites_subject_id` = '$requisites'
								and e.`semester` = '$tt'
								and e.`AY` = '$ayy2'
								";

							$sss = mysql_query($ss) or die ("Could not execute query for getting the Available subject for the Student!.");
							                          
							while($rows = mysql_fetch_row($sss)){?>

								<tr>
									<td><?php echo $rows[1]; ?></td>
									<td><?php echo $rows[2]; ?></td>
									<td><?php echo $rows[3]; ?></td>
									<td><?php echo $rows[4]; ?></td>
									<td><?php echo $rows[5]; ?></td>
							</tr>
					    
					

							<?php


							}

						}




                          
							$rowcount=mysql_num_rows($qqq);

							if($rowcount > 0){




								$ssw = 	"SELECT distinct (f.`subject_id`) , f.`subject_code` , f.`description_title` , f.`units_lec` , f.`units_lab` , f.`requisites_subject_id`
								FROM `tbl_grades` a, `tbl_enrolled_subject` b, `tbl_enrollment_records` c, `tbl_student` d, `tbl_offerred_subject` e, `tbl_subject` f, `tbl_course` g
								WHERE a.`enrolled_id` = b.`enrolled_id`
								AND b.`offered_subject_id` = e.`offerred_subject_id`
								AND b.`erollment_records_id` = c.`enrollment_record_id`
								AND c.`student_id` = d.`student_id`
								AND e.`subject_id` = f.`subject_id`
								AND d.`course_id` = g.`course_id`
								AND c.`student_id` ='$student'
								AND g.`course_id` ='$stud_course'
								AND f.`requisites_subject_id` = 'None'
								
								and e.`semester` = '$tt'
								and e.`AY` = '$ayy2'
								";

							$sssw = mysql_query($ssw) or die ("Could not execute query for getting the Available subject fof the Student!.");
							                          
							while($rowsw = mysql_fetch_row($sssw)){?>

							<tr>
									<td><?php echo $rowsw[1]; ?></td>
									<td><?php echo $rowsw[2]; ?></td>
									<td><?php echo $rowsw[3]; ?></td>
									<td><?php echo $rowsw[4]; ?></td>
									<td><?php echo $rowsw[5]; ?></td>
							</tr>
					    
					

							<?php


							}

					


							}



						else{



							$sswn = 	"SELECT distinct f.`subject_id` , f.`subject_code` , f.`description_title` , f.`units_lec` , f.`units_lab` , f.`requisites_subject_id`
								FROM `tbl_offerred_subject` e, `tbl_subject` f, `tbl_course` g
								WHERE 
								
								e.`subject_id` = f.`subject_id`
								AND e.`course_id` = g.`course_id`
							
								AND f.`requisites_subject_id` = 'None'
								AND g.`course_id` = '$stud_course'
								and e.`semester` = '$tt'
								and e.`AY` = '$ayy2'
								";

							$ssswn = mysql_query($sswn) or die ("Could not execute query for getting the Available subject (No Requisites) for the Student!.");
							                          
							while($rowswn = mysql_fetch_row($ssswn)){?>

							<tr>
									<td><?php echo $rowswn[1]; ?></td>
									<td><?php echo $rowswn[2]; ?></td>
									<td><?php echo $rowswn[3]; ?></td>
									<td><?php echo $rowswn[4]; ?></td>
									<td><?php echo $rowswn[5]; ?></td>
							</tr>
					    
					

							<?php


							}





						}



							?>
				</table>
				
							
						<div class="btn-group">
						  <a href="preview_adviceslip.php?txtsearch=<?php //echo $_POST['txtsearch']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Preview</a>
					<!--	  <button type="button" class="btn btn-default" name="print"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>-->
						</form>
						</body>
						</html>		
					  </div>
					</div>
									
				</form>
			<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			}
			</script>

            </div><!--/span-->
            
        </div><!--End or row-->
          


			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>

		   
            
			

<?php include("footer.php") ?>



