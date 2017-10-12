
<?php
require_once("includes/initialize.php");
 include("header.php");

  include("banner.php") ?>
<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $h_upass = trim($_POST['pass']);
    
   // $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $h_upass == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new Officer();
		//make use of the static function, and we passed to parameters
		$res = $user::Authenticateofficer($uname, $h_upass, $accademic, $sem);
		//then it check if the function return to true
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>

<div class="container">

	<div class="col-xs-12 col-sm-8">
		<div class="rows">
			<div class="well">
				<fieldset>
						<legend><h4 class="text-center">The College Mission</h4></legend>
							<p>Initao College will develop responsible, self-motivated skill-oriented 
								citizenry through quality instruction extension and research.</p>
					</fieldset>	
					<fieldset>
						<legend><h4 class="text-center">The College Vision</h4></legend>
							<p>To be an instruction of higher learning capable of producing professionals 
								who are equipped with learning competitive with others instruction locally 
								and globally.takeholders are actively engaged and share responsibilty for developing 
								for life-long learners.</p>
					</fieldset>	
					<fieldset>
						<legend><h4 class="text-center">The College Philosophy</h4></legend>
							<p>Initao College is hinged on moral integrity and truth as it fosters for academic 
								excellence and quality education, providing students with adequate trainings on recent 
								trends and practices in their disciplines.</p> 
					</fieldset>	
				
			</div>
		</div>
	</div>
	<!--/span--> 
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="sidebar-nav">
				<div class="panel panel-success">

					<?php
							                                 	
							                                    $querya ="SELECT  `ay_id` ,  `ay` , `term`, `ay_status`
																			FROM  `tbl_ay` 
																			WHERE  `ay_status` =  'ACTIVE'
																			LIMIT 0 , 30";
							                                    $resa = mysql_query($querya) or die ("Could not execute query2.");
							                                    $my_resa = mysql_num_rows($resa);
							                          
							                                    $row2a = mysql_fetch_row($resa);
							                                    
							                                      $ay = $row2a[1];
							                                      $term = $row2a[2];

							                                    

							                                    ?>
					
					<?php
					$curso = $_SESSION['course'];
							                                 	
						$que ="SELECT `Major`, `course_abb` FROM `tbl_course` WHERE `course_id` = '$curso' ";
						$re = mysql_query($que) or die ("Could not execute query2.");
						$ro= mysql_fetch_row($re);
						$major = $ro[0];
						$abb = $ro[1];
						

							                                    

							                                    ?>
				
			  		<div class="panel-heading">Login Information</div>
					   <div class="panel-body">	
							<div class="col-xs-12 col-sm-13">
							 <span class="glyphicon glyphicon-user"> </span> <label><?Php echo $_SESSION['fullname'];?></label><br/>
							 <span class="glyphicon glyphicon-cog"> </span> <label><?Php echo $_SESSION['postion']; ?></label><br/>
							 <span class="glyphicon glyphicon-comment"> </span> <label><?Php echo $abb, ' - ', $major; ?></label><br/>

							 <?php

							 if($my_resa == 1){
							 	echo '<strong><font color="red">Current AY & Term:</font></strong><br>';
							 	echo '<span class="glyphicon glyphicon-th"> </span> <label>'.$term.'</label><br/>';
							 	echo '<span class="glyphicon glyphicon-calendar"> </span> <label>'.$ay.'</label><br/>';
							 }

							 else if($my_resa > 1){

							 	echo '<strong><font color="red">Current AY & Term:</font></strong><br>';
							 	echo '<font color="green">**There is conflict with the other active <br> AY & Term. Please Contact your Administrator.</font><br><br>';

							 }
							 else{

							 	echo '<strong><font color="red">Current AY & Term:</font></strong><br>';
							 	echo '<font color="green">**AY and Term is already expired.</font><br><br>';

							 }




							 ?>
							
							  <a href="logout.php" class="btn btn-danger">Logout <span class="glyphicon glyphicon-log-out"></span></a>
							</div>					            					            		
						</div>
					          
				</div>
			</div>
		</div>
	</div>
<!--/.well --> 
</div><!--container-->
	
	
	<hr>
	<?php include("footer.php") ?>
