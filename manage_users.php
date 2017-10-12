<?php
require_once("includes/initialize.php");
include 'header-enrollment.php';


	$querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
				FROM  `tbl_ay` 
				WHERE  `ay_status` =  'Active'
				LIMIT 0 , 30";
	$resa = mysql_query($querya) or die ("Could not execute query2.");
	$row2a = mysql_fetch_row($resa);
	$ayy2 = $row2a[1];
	$tt = $row2a[2];



							                                    

$session_course = $_SESSION['course'];

?>

<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
</style>




<div class="container">
 	
		<div class="rows">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-6">
		  <form class="form-horizontal span4" action="" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Select Query Option to view Other user.</h3>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="course">
				            <div class="col-md-10">
				             <label class="col-md-4 control-label" for=
				                "course">User Type:</label>

				                <div class="col-md-8">
				                 <select class="form-control input-sm" name="user" id="user">
				                 	<option value="">Administrator</option>
				                 	<option value="">Department Chairman</option>
				                 	<option value="">Assessor</option>
				                 	<option value="">Registrar</option>
				                  	
										
									</select>	
				                </div>

				            </div>

				          </div>
				         
				         
				         
				         

						<div class="form-group" id="subjcode">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
									     <a href="offerred_subject.php" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</a>
									    				  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
		  </div>
		   
		</div>		
			
</div>









<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_subject.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">System Users</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="10%" >User ID</th>
				  		<th width="20%" >Name</th>
				  		<th width="5%" >Username</th>
				  		<th width="5%" >User Level</th>
				  		<th width="5%" >Status</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		
				  	  
				  	 
					  		
						@$users 	 =  $_POST['user'];
				  	  
				  	  If (isset($_POST['search'])){
				  	  	
				  	  	if ($users == 'Administrator'){

				  	  		$mydb->setQuery("SELECT * FROM `tbl_useraccounts` WHERE `user_type` = 'Administrator' ");
						  	loadresult();



				  	  	}

				  	  	else if($users == 'Assessor'){
				  	  		$mydb->setQuery("SELECT * FROM `tbl_assessor`");
						  	loadresult();

				  	  	}

				  	  	else if($users == 'Regisgtrar'){
				  	  		$mydb->setQuery("SELECT * FROM `tbl_useraccounts` WHERE `user_type` = 'Regisgtrar'");
						  	loadresult();

				  	  	}
				  	  	else if($users == 'Department Chairman'){
				  	  	$mydb->setQuery("SELECT * FROM `tbl_officer_incharge`");
						  	loadresult();

				  	  }
				  	  
				  	  
				  	  }
				  	


					 

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
								

						  		
					}
				}
			?>

				  
				  
				 		</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



