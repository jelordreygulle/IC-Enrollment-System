            <div class="col-12 col-sm-12 col-lg-12">
            

					<div class="panel panel-primary">
					  
					  <div class="panel-body">
					  	<html>
					  
					  	<body>
					    <form class="form-horizontal span4" action="#.php" method="POST">
					    <caption><h3 align="center">Bachelor of Science in Hotel and Restaurant</h3></caption>






						<table class="tftable" border="2">
						<tr>
									
									<th width="10%"> Grade</th>
									<th width="10%"> Subj. Code</th>
									<th width="40%"> Descriptive Title</th>
									<th width="5%"> Unit(Lec)</th>
									<th width="5%"> Unit(Lab)</th>
									<th width="15%"> Pre-requisite</th>
									<th width="15%"> Status</th>
									
						</tr>
					
						<tr>
						  	<td colspan="7"><center><strong>First Year, First Semester</strong></center></td>
						
						</tr>

					
						<tr>
							<?php
								$eng1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 15";
								$eng_1 = mysql_query($eng1);
								$eng1_row = mysql_fetch_row($eng_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 16";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 17";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 18";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 19";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 20";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 21";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 22";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 23";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						
						<tr>
						  	<td colspan="7"><center><strong>First Year, Second Semester</strong></center></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 24";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 25";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 26";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 27";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 28";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 29";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 31";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 32";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 33";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
						  	<td colspan="7"><center><strong>Second Year, First Semester</strong></center></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 34";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

					<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 35";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

					<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 36";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

					<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 37";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 38";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 39";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 40";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 41";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 42";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
						  	<td colspan="7"><center><strong>Second Year, Second Semester</strong></center></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 43";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 44";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>

						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 45";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 46";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 47";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 48";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 49";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 50";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 51";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
						</tr>
						  	
				<tr>
						  	<td colspan="7"><center><strong>Third Year, First Semester</strong></center></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 52";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 53";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 54";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 55";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 56";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 57";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 30";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 58";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
						  	<td colspan="7"><center><strong>Third Year, Second Semester</strong></center></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 59";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 60";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 61";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 62";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 63";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 64";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 65";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>




				<tr>
						  	<td colspan="7"><center><strong>Fourth Year, First Semester</strong></center></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 66";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 67";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 68";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 69";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 70";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>
				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 71";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>

				<tr>
						  	<td colspan="7"><center><strong>Fourth Year, Second Semester</strong></center></td>
						
				</tr>

				<tr>
							<?php
								$fil1 = "SELECT  `subject_id`, `subject_code`, `description_title`, `units_lec`, `units_lab`, `requisites_subject_id` 
										FROM `tbl_subject` WHERE `subject_id` = 72";
								$fil_1 = mysql_query($fil1);
								$eng1_row = mysql_fetch_row($fil_1);

							?>
						  	<td></td>
						  	<td><?php echo $eng1_row[1]; ?></td>
						  	<td><?php echo $eng1_row[2]; ?></td>
						  	<td><center><?php echo $eng1_row[3]; ?></center></td>
						  	<td><center><?php echo $eng1_row[4]; ?></center></td>
						  	<td><center><?php echo $eng1_row[5]; ?></center></td>
						  	<td></td>
						
				</tr>



				</table>
				
							
						<div class="btn-group">
						 <!-- <a href="preview_adviceslip.php?txtsearch=<?php //echo $_POST['txtsearch']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Preview</a>-->
					<!--	  <button type="button" class="btn btn-default" name="print"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>-->
						</form>
						
			
			<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><!--<input type=button name=print value="Print" onClick="window.print()" visible="false">--></form>');
			}
			</script>

            </div><!--/span-->
            
        </div><!--End or row-->
          


			        </div><!--End or row-->
				          