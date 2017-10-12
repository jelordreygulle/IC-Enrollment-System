
<?php 
require_once("includes/initialize.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>CSIS for Initao College</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!-- Custom styles for this template -->
<link href="offcanvas.css" rel="stylesheet">

</head>
<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">A Computerized Student Information System fo IC - Dept. Chairman Module</a>
        </div>

       
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    </div>
<?php
 if (logged_in()) {

	?>
	   <script type="text/javascript">
	            window.location = "home.php";
	    </script>
    <?php



}
include("banner.php") ?>



<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $h_upass = trim($_POST['pass']);
    
    //$h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $h_upass == '') {
			?>    <script type="text/javascript">
                alert("Username, Password, Academic Year and Term cannot be Empty.Please Check!");
                </script>
            <?php
        
    } 

    else {
			//it creates a new objects of member
	        $user = new officer();
	        $position =  'Enrollment Officer';
			//make use of the static function, and we passed to parameters
			$cur = $user::Authenticateofficer($uname, $h_upass);
			//then it check if the function return to true
			if($cur == true){
				?>   <script type="text/javascript">
						//then it will be redirected to home.php

						window.location = "index.php";
					</script>
				<?php
			
			
			} else {
				?>    <script type="text/javascript">
	                alert("Username or Password Not Registered in Enroollment Officer Module! Please Contact Your administrator.");
	                window.location = "index.php";
	                </script>
	       	 <?php
	        }
        
    }
} 

else {
    
    $email = "";
    $upass = "";
    
}

?>




<div class="container">
		
		<div class="col-xs-12 col-sm-9">
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
		<?php include("sidebar.php") ?>
		</div>
	<!--/row-->
	
	<hr>
	<?php include("footer.php") ?>