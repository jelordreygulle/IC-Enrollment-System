<div class="row row-offcanvas row-offcanvas-right">
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="panel panel-success">
					
					  <div class="panel-heading">List of Room Schedules</div>
					   <div class="panel-body">	
						   <form  method="POST" action="index.php">
								<div class="col-xs-12 col-sm-12">

					            	<div class="form-group">
					            		<div class="row" >
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="text" placeholder="Username" class="form-control" name="uname">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="password" placeholder="Password" class="form-control" name="pass">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			
					            				<select  class="form-control input" name="ay" id="ay" required>
													<option value="">Academic Year</option>
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
							                                     
							                                      
							                                    


							                                      
							                                      echo '<option  value="'.$ayid.'">'.$ayy.' </option>';

							                                     
							                                    }

							                                    ?>
								

												</select>	


						              		</div>
						            	</div>
						            </div>


						             <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			
					            				<select  class="form-control" name="terms" id="terms" required>
					            					<option value="">Term</option>
													<option value="First Semester">First Semester</option>
													<option value="Second Semester">Second Semester</option>
													<option value="Summer">Summer</option>
															
												</select>	


						              		</div>
						            	</div>
						            </div>




						            
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						           				 <button type="submit" class="btn btn-success" align="right"name="btnlogin">Sign in <span class="glyphicon glyphicon-log-in"></span></button>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
						</div>
				</div>
	</div>
	<!--/.well --> 
</div>
<!--/span-->