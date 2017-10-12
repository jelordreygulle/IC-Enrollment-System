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

          <a class="navbar-brand" href="index.php">A Computerized Student Information System fo IC - Registrar Module</a>
        </div>

        <div class="collapse navbar-collapse"><span class="pull-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Entry<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="filter_grades.php">Student Grades</a></li>
                  
                 
                </ul>  

            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-print"></span> Print<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><a href="filter_cor.php">COR</a></li>
                  <li><a href="filter_exam_permit.php">Exam Permit</a></li>
                  <li><a href="filter_grade_cards.php">Grade Cards</a></li>

                             
                </ul>  

            </li>


             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-file"></span> Reports<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="try.php?course=All%20Student&term=&ay=">Export Student Info. to excel</a></li>
                   <li><a href="filter_faculty.php">Instructor Class</a></li>
                  <li><a href="offered_subjects.php">Class List</a></li>
                 
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