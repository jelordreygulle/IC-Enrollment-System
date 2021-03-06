<?php
require_once("includes/initialize.php");
include 'header-entry.php';
$load_instructor = $_GET['instructorId'];
$load_term = $_GET['term'];
$load_ay = $_GET['ay'];

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

  	 if (isset($_GET['instructorId'])){			
			$instructor = new Instructor();
			$cur = $instructor->single_instructor($_GET['instructorId']);

			$load_status = $cur->employment_status;			
		}
	  ?>
 
<form class="form-horizontal span4" action="delete_instructor_load.php?instructorId=<?php echo $load_instructor; ?>&term=?<?php echo $load_term; ?>&ay=?<?php echo $load_ay; ?>" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Instructor Subjects </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >	   
     	 <div class="container">

     	  <div class="well" > 

    	<form class="form-horizontal span4" action="" method="POST">
    		<table align="center" >			 
         	<thead>
			  	<tr id="table" >
			  		<th width="10%" class="bottom">ID #</th>
			  		<th width="15%" class="bottom">Full Name</th>
			  		<th width="15%" class="bottom">Position</th>
			  		<th width="40%" class="bottom">Specialization</th>
			 		<th width="20%" class="bottom">Employment Status</th>

			 			
			  		
			  	</tr>	
		    </thead> 
		    <tbody>
		     	<tr>
		     		<td><?php echo (isset($cur)) ? $cur->instructor_id : 'ID' ;?></td>
		     		<td><?php echo (isset($cur)) ? $cur->name  : 'NAME' ;?></td>
		     		<td><?php echo (isset($cur)) ? $cur->position : 'POSTION' ;?></td>
		     		<td><?php echo (isset($cur)) ? $cur->specialization : 'SPECIALIZATION' ;?></td>
		     		<td><?php echo (isset($cur)) ? $cur->employment_status : 'EMPLOYMENT STATUS' ;?></td>
		     	</tr>
		    </tbody>
		    <tfoot>
			  	<tr><td   colspan="6"></td></tr>
			  	<tr><td  colspan="5" align="Right"></td><td align="center" ></td></tr>
			</tfoot>	   
			  
			</table>
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
<div class="rows">		  
	<div class="panel-body">
	 <html>		  
	  	<body>
	  		</br>
	  	
		<div class="container">
				<?php
		check_message();
			
		?>
		<div class="well">
		<form class="form-horizontal span4" action="delete_instructor_load.php?instructorId=<?php echo $load_instructor; ?>&term=<?php echo $load_term; ?>&ay=<?php echo $load_ay; ?>" method="POST">
		    <table class="tftable">
				<caption><h3 align="left">Subjects for <?php echo $_GET['ay']; ?> - <?php echo $_GET['term']; ?></h3></caption>
				  <thead>
				  	<tr>
				  		<tr>
				  		<th width="15%" class="bottom">Subject Code</th>
				  		
				  		<th  width="25%" class="bottom">Descriptive Title</th>
				 		<th  width="25%" class="bottom">Course</th>
				 		<th  width="15%" class="bottom">Bulding/Room</th>
				 		<th  width="15%" class="bottom">Schedule</th>
				 			 		 
				  	</tr>	   
				  </thead>
				  <tbody>
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

					  		echo '<td width="15%">'. $result->subject_code .'</td>';
					  		echo '<td width="30%">'. $result->description_title.'</td>';
					  		echo '<td>'. $result->course_code.'</td>';
					  		
					  		echo '<td>'. $result->building_name_and_room_number.'</td>';
					  		echo '<td>'.$days_ni.$y.$result->starttime.$result->starttime_extension.'-'.$result->endtime.$result->endtime_extension.'</td>';
							
					  		echo '</tr>';
				  		}
					  	 
				  	?>
				  </tbody>
	  			
			</table><br>			
				<div class="btn-group">
				<?php
					if($load_status == 'Retired' or $load_status == 'Resign' ){

					
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

									$num_ni = mysql_num_rows($resa);
						echo '<a href="/Initao_College/enrollment_officer/listofloads.php?instructorId='.$load_instructor.'"  class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>';

						if($num_ni == 1){

						
							   echo '<a href="preview_instructor_loads.php?instructorId='.$load_instructor.'&term='.$_GET['term'].'&ay='.$_GET['ay'].'" class="btn btn-warning"><span class="glyphicon glyphicon-print"></span>  Print</a>';
							   
							  


						}

						else if($num_ni > 1){


							   echo '<a href="preview_instructor_loads.php?instructorId='.$load_instructor.'&term='.$_GET['term'].'&ay='.$_GET['ay'].'" disabled class="btn btn-warning"><span class="glyphicon glyphicon-plus-sign"></span>  Assign Subjects</a>';
							   
							  


						}
						else{


							
							   echo '<a href="preview_instructor_loads.php?instructorId='.$load_instructor.'&term='.$_GET['term'].'&ay='.$_GET['ay'].'" disabled class="btn btn-warning"><span class="glyphicon glyphicon-plus-sign"></span>  Assign Subjects</a>';
							   
							




						}

					


					}

				?>
			
				</div>
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
      </div>
    </div><!--End or row-->					
</form>				  
</div>
</div>
<?php include("footer.php") ?>



