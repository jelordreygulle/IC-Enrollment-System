<?php
require_once("includes/initialize.php");
include 'header.php';
$student_id=$_GET['id'];
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
<div class="container">
 	
		<div class="rows">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-6">
		  <form class="form-horizontal span4" action="" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Query Options</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="subjcode">
				            <div class="col-md-10">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Subject Code:</label>

				              <div class="col-md-8">
				            
				                 <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
												  "Subject Code" type="text" value="">
				              </div>

				            </div>
				          </div>
				  			<div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">Course:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="course" id="course">
				                 	<option value="">Select Course</option>
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {				                  		 
				                  		echo '<option value="'. $course->course_id.'">'.$course->course_code .'</option>';
				                  	}

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>
				         
				         

						<div class="form-group" id="subjcode">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
									    <button type="Reset" name="search" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
									    				  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
		  </div>
		   
		</div>		
			
</div><!--End of container-->
			

<div class="container" width="100%">

	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="p_studentsubjects.php?id=<?php echo $_GET['id']; ?>" Method="POST"> 

			    <style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
				</style>
 					
				<table class="tftable" border="1">
					<caption><h3 align="left">List of Offered Subject</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="8%">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject Code</th>
				  		<th width="10%">Descriptive Title</th>
				  		<th width="5%">Section</th>
				  		<th width="5%">Unit(lec)</th>
				  		<th width="5%">Unit(lab)</th>
				  		<th width="15%">Pre-requisite</th>
				  		<th width="5%">Slot</th>
				  		<th width="8%">Avai. Slot</th>
				  		<th width="20%">Schedule</th>
				  		<th width="20%">Building/Room</th>
				 		
				 		<th width="15%">Status</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$studentId=$_GET['id'];

				
					//this is the current page per number ($current_page)	
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
									
					//record per Page($per_page)	
					$per_page = 10;
										
					//total count record ($total_count)
					$countEmp = new SubjPagination_offerred();
					$total_count = $countEmp->count_allrecords2();
					
					$pagination = new SubjPagination_offerred($current_page, $per_page, $total_count);
				  	  @$subjcode =  $_POST['subjcode'];
				  	  @$course 	 =  $_POST['course'];
				  	  
				  	  If (isset($_POST['search'])){
				  	  	
				  	  	if ($subjcode == ''  AND $course==''  ){ 

				  	  		$mydb->setQuery("SELECT distinct `tbl_offerred_subject`. * , `tbl_subject`. *, `tbl_room`. *
											FROM tbl_offerred_subject, tbl_subject, tbl_room
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
											AND `tbl_offerred_subject`.`AY` = '$ayy2'");
							loadresult();
					  		
					  	}

					  	else if($subjcode != ''  AND $course==''  ){

					  		

							$mydb->setQuery("SELECT DISTINCT `tbl_offerred_subject`. * , `tbl_subject`. * , `tbl_course`. *, `tbl_room`. *
							FROM tbl_offerred_subject, tbl_subject, tbl_course, tbl_room
							WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id` and `tbl_room`.'room_id' = 'tbl_offerred_subject'.'room_id'
							AND `tbl_offerred_subject`.`course_id` = `tbl_course`.`course_id`
							AND `tbl_subject`.`subject_code` LIKE '%$subjcode%'
							AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
							AND `tbl_offerred_subject`.`semester` = '$tt'
							AND `tbl_offerred_subject`.`AY` = '$ayy2'");
							loadresult();


					  	}

					  	else if($subjcode == ''  AND $course !=''  ){

					  		$mydb->setQuery("SELECT DISTINCT `tbl_offerred_subject`. * , `tbl_subject`. * , `tbl_course`. *, `tbl_room`. *
							FROM tbl_offerred_subject, tbl_subject, tbl_course, tbl_room
							WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id` 
							and `tbl_room`.`room_id` = `tbl_offerred_subject`.`room_id`
							AND `tbl_offerred_subject`.`course_id` = `tbl_course`.`course_id`
							AND `tbl_course`.`course_id` = '$course'
							AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
							AND `tbl_offerred_subject`.`semester` = '$tt'
							AND `tbl_offerred_subject`.`AY` = '$ayy2'");
							loadresult();


					  	}

					  	else{
					  		$mydb->setQuery("SELECT distinct `tbl_offerred_subject`. * , `tbl_subject`. *, `tbl_room`. *
											FROM tbl_offerred_subject, tbl_subject, tbl_room
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
											
											AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`AY` = '$ayy2'");
							loadresult();
					  				  	
					  	}
					  }else{
					  $mydb->setQuery("SELECT distinct `tbl_offerred_subject`. * , `tbl_subject`. *, `tbl_room`. *
											FROM tbl_offerred_subject, tbl_subject, tbl_room
											WHERE `tbl_offerred_subject`.`subject_id` = `tbl_subject`.`subject_id`
											AND `tbl_offerred_subject`.`semester` = '$tt'
											AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
											AND `tbl_offerred_subject`.`AY` = '$ayy2'
											LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
							loadresult();

							


					  		
					  }

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {



							
						  		echo '<tr>';
						  		$select='';

						  		$student_id2=$_GET['id'];
						  		$ayyq = $_SESSION['accademic'];
								$queryaq ="SELECT  `ay_id` ,  `ay` 
											FROM  `tbl_ay` 
											WHERE  `ay_id` =  '$ayyq'
											LIMIT 0 , 30";
								$resaq = mysql_query($queryaq) or die ("Could not execute query 1.");
								$row2aq = mysql_fetch_row($resaq);
								$ayidaq = $row2aq[0];
								$ayy2aq = $row2aq[1];

									                                    
								$ttt = $_SESSION['term'];

						  		$ofs = $result->offerred_subject_id;
						  		$qq = "SELECT count( `tbl_enrolled_subject`.`offered_subject_id` ) AS records, `tbl_enrolled_subject`. * , `tbl_enrollment_records`. * , `tbl_offerred_subject`. *, `tbl_room`. *
										FROM tbl_enrolled_subject, tbl_enrollment_records, tbl_offerred_subject, tbl_room
										WHERE `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
										AND `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
										AND `tbl_enrollment_records`.`AY` = `tbl_offerred_subject`.`AY`
										AND `tbl_enrollment_records`.`term` = `tbl_offerred_subject`.`semester`
										AND `tbl_enrollment_records`.`AY` = '$ayy2aq'
										AND `tbl_enrollment_records`.`term` = '$ttt'
										AND `tbl_offerred_subject`.`AY` = '$ayy2aq'
										AND `tbl_offerred_subject`.`semester` = '$ttt'
										AND `tbl_enrolled_subject`.`offered_subject_id` ='$ofs'";
						  		$qqq = mysql_query($qq) or die ("Could not execute query 2.");                    
							    $qqqq = mysql_fetch_row($qqq);
							    $ava = $result->slots - $qqqq[0];

							    
							    $qqs = "SELECT `tbl_enrolled_subject`.`offered_subject_id` , `tbl_offerred_subject`. * , `tbl_enrolled_subject`. *, `tbl_room`. *
										FROM tbl_enrolled_subject, tbl_offerred_subject, tbl_enrollment_records, tbl_room
										WHERE `tbl_enrolled_subject`.`offered_subject_id` = `tbl_offerred_subject`.`offerred_subject_id`
										AND `tbl_offerred_subject`.`room_id` = `tbl_room`.`room_id`
										AND `tbl_offerred_subject`.`semester` = '$ttt'
										AND `tbl_offerred_subject`.`AY` = '$ayy2aq'
										AND `tbl_enrolled_subject`.`offered_subject_id` = '$ofs'
										AND `tbl_enrolled_subject`.`erollment_records_id` = `tbl_enrollment_records`.`enrollment_record_id`
										AND `tbl_enrollment_records`.`student_id` ='$student_id2'
										AND `tbl_enrolled_subject`.`offered_subject_id` = '$ofs'";
						  		$qqqs = mysql_query($qqs) or die ("Could not execute query 3.");                    
							    $num22 = mysql_num_rows($qqqs);

							    if($num22 >=1){
							    	echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
						  			' . $result->subject_code.'</td>';
							    }
							    else{
							    	echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->offerred_subject_id. '"/>
						  				 ' . $result->subject_code.'</td>';
							    }
						  		
						  		echo '<td width="30%">'. $result->description_title.'</td>';
						  		echo '<td>'. $result->section.'</td>';
						  		echo '<td>'. $result->units_lec.'</td>';
						  		echo '<td>'. $result->units_lab.'</td>';
						  		echo '<td>'. $result->requisites_subject_id.'</td>';
						  		echo '<td>'. $result->slots.'</td>';
						  		echo '<td>'. $ava.'</td>';
						  		echo '<td>'. $result->schedule.'</td>';
						  		echo '<td>'. $result->building_name_and_room_number.'</td>';

						  		
								

							    if($num22 >=1){
							    	echo '<td>'.'Already Added'.'</td>';
							    	
								
							    }
							    else{
							    	echo '<td>'.'None'.'</td>';

							    }

						  		
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7"><?php	echo '<ul class="pager" align="center">';
 
					if ($pagination->total_pages() > 1){

						echo 'Page ' .$current_page .' of '. $pagination->total_pages();

						if ($current_page == 1 ){
							echo ' <li class="disabled"><a href=?studentId='.$studentId.'&page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=?studentId='.$studentId.'&page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=?studentId='.$studentId.'&page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=?studentId='.$studentId.'&page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=?studentId='.$studentId.'&page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=?studentId='.$studentId.'&page='.($current_page + 1) .'>Next</a></li> ';
						}
						
					
							
						if ($current_page ==  $pagination->total_pages() ){
													
							echo ' <li class="disabled"><a href=?studentId='.$studentId.'&page='.$pagination->total_pages().'>Last </a> </li>';
						}else{
							echo ' <li><a href=?studentId='.$studentId.'&page='.$pagination->total_pages().'>Last </a> </li>';
						}
							
					}
					 
					?></td></tr>
				  </tfoot>	
				</table>
				<div class="btn-group">
				  <a href="studentsubjects.php?studentId=<?php echo (isset($studentId)) ? $studentId : 'ID' ;?>" class="btn btn-default"><span class="glyphicon glyphicon-back"></span>Back</a>
				  <button type="submit" class="btn btn-default" name="Add"><span class="glyphicon glyphicon-plus-sign"></span>Assign Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



