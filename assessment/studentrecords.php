<?php
require_once("includes/initialize.php");
include 'header-entry.php';
$idno = $_GET['studentId'];
?>
 
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
				if ($_GET['studentId']==""){
					message("ID Number is required!","error");
					check_message();
					
				}
			}

  ?>
  <?php
     $student = new Student();
	 $cur = $student->single_student($_GET['studentId']);

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
						    $mydb->setQuery("SELECT DISTINCT  `tbl_student`.`student_id` , CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name',  `tbl_course`.`course_code` ,  `tbl_student`.`course_id` ,  `tbl_course`.`course_id` 
												FROM tbl_student, tbl_course
												WHERE (`tbl_student`.`course_id` =  `tbl_course`.`course_id`
												AND (`tbl_student`.`student_id` =  '$idno'
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
							  		echo '<td>'. $student->course_code.'</td>';
							  		
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
				<form class="form-horizontal span4" action="delete_studentSubjects.php?studentId=<?php echo $_GET['studentId']; ?>" method="POST">					    
				  <table class="table table-hover">
					<caption><h3 align="left">Enrollment Records</h3><hr/></caption>
					  <thead>
					  	<tr id="table">

					  		<th width="25%"  class="bottom">Term</th>
					  		<th width="20%"  class="bottom">Academic Year</th>
					 		<th width="30%"  class="bottom">Details</th>
					 		<th width="25%"  class="bottom">Options</th>
					 		
					  		
		
					  	</tr>	   
					  </thead>
					  <tbody>
					  	<?php
				 			$cid = (isset($studcourse)) ? $studcourse->COURSE_ID : 0;
						  		$mydb->setQuery("SELECT  distinct `tbl_enrollment_records`.`term`, `tbl_enrollment_records`.`AY`, `tbl_enrollment_records`.`student_id`, `tbl_enrollment_records`.`enrollment_record_id`
													FROM tbl_enrollment_records
													where `tbl_enrollment_records`.`student_id` =  '$idno'");
						
					  			$cur = $mydb->loadResultlist();
								foreach ($cur as $result) {
							  		echo '<tr>';

							  		
							  		echo '<td width="30%">'. $result->term.'</td>';
							  		echo '<td>'. $result->AY.'</td>';
							  		echo '<td>
							  				<a href="./studentsubjects.php?term='.$result->term.'&year='.$result->AY.'&stu_id='.$idno.'">' . ' Enrolled Subjects ' .'</a></td>';

							  		echo '<td>
							  				<a href="./edit_enrollment.php?recordID='.$result->enrollment_record_id.'">' . ' Edit ' .'</a></td>';
							  						
							  		echo '</tr>';
						  		}
						  	 
					  	?>
					  </tbody>
					  
					</table>
						<div class="btn-group">
					<a href = "assignstudentsubjects.php?studentId=<?php // echo (isset($_GET['studentId'])) ? $_GET['studentId'] : 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>  Back</a>
					 
			 			<a href = "enrollment.php?studentId=<?php echo $idno ; ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>  Enroll</a>
					  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
					</form>
						</body>
						</html>		
					  </div>
					</div>
									
				</form>
			 <SCRIPT LANGUAGE="JavaScript"> 
			// if (window.print) {
			// document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			// }
		 </script>

            </div><!--/span-->
            
        </div><!--End or row-->
          
</div>

			        </div><!--End or row-->
									
				</form>
				  
		  </div>

		</div>

		   
            
			

<?php include("footer.php") ?>



