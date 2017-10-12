<?php require_once("includes/initialize.php");?>
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
  <?php
  //login confirmation
  confirm_logged_in();

  ?>
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

          <a class="navbar-brand" href="index.php">A Computerized Student Information System for IC - Administrator Module</a>
        </div>

        <div class="collapse navbar-collapse"><span class="pull-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li  class="active" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entry<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="studFilter.php">Student</a></li>
                  <li><a href="subjectFilter.php">Subject</a></li>
                  <li><a href="courseFilter.php">Course</a></li>
                  <li><a href="facultyFilter.php">Faculty</a></li>
                  <li><a href="filter_room.php">Rooms</a></li>
                  <li><a href="ay_filter.php">AY</a></li>
                 
                </ul>  

            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enrolment<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="evaluation.php">Evaluation</a></li>
                             
                </ul>  

            </li>
           
          
                      
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Reports</a></li>
                <li><a href="newuser.php">Manage User</a></li>
                <li><a href="#">Others</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>  
            </li>
      

          </ul>
             <div class="navbar-collapse collapse">
    
      </div><!--/.navbar-collapse -->
        </span></div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    </div>
</body>