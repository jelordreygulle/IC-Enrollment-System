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

          <a class="navbar-brand" href="index.php">A Computerized Student Information System fo IC - Dept. Chairman Module</a>
        </div>

        <div class="collapse navbar-collapse"><span class="pull-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="active" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Entry<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="./studentfilter.php"><span class="glyphicon glyphicon-user"></span> Student</a></li>
                  <li><a href="subjectFilter.php"><span class="glyphicon glyphicon-file"></span> Subject</a></li>
                  <li><a href="filter_course.php"><span class="glyphicon glyphicon-th"></span> Course</a></li>
                  <li><a href="filter_faculty.php"><span class="glyphicon glyphicon-briefcase"></span> Faculty</a></li>
                  <li><a href="room_filter.php"><span class="glyphicon glyphicon-list"></span> Rooms</a></li>
                 
                </ul>  

            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pencil"></span> Enrolment<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><a href="offerred_subject.php"><span class="glyphicon glyphicon-edit"></span> Manage Offered Subjects</a></li>
                  <li><a href="evaluation.php"><span class="glyphicon glyphicon-saved"></span> Evaluation</a></li>
                             
                </ul>  

            </li>
            
           
                      
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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