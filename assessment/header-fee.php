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

          <a class="navbar-brand" href="index.php">A Computerized Student Information System fo IC - Assessor's Module</a>
        </div>

        <div class="collapse navbar-collapse"><span class="pull-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="filter_assess_student.php">Assess Student</a></li>
                  <li><a href="filter_update_payment.php">Update Payment</a></li>
                  
                 
                </ul>  

            </li>
             <li  class="active" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fee<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                  <li><a href="filter_miscelleneous.php">Miscelleneous Fee</a></li>
                  <li><a href="filter_mandatory.php">Other Mandatory Fee</a></li>
                  <li><a href="filter_tuition.php">Tuition Fee</a></li>
                  <li><a href="filter_scholarship.php">Scholarship</a></li>          
                </ul>  

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li><a href="listofclass.php">List of class</a></li>
                 <!--  <li><a href="#.php">New Enrolment</a></li> -->
                             
                </ul>  

            </li>
            <!---
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grade<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#.php">New Enrolment</a></li>
                             
                </ul>  

            </li>-->
            <!--
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#.php">New Enrolment</a></li>
                    <!-- <li><a href="scheduleSubFilter.php">New Schedule</a></li>         
                </ul>  

            </li>
            -->
                      
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="logout.php">Logout</a></li>
              </ul>  
            </li>
      

          </ul>
             <div class="navbar-collapse collapse">
    
      </div><!--/.navbar-collapse -->
        </div><!-- /.nav-collapse -->
      </div><!-- /.container --></span>
    </div><!-- /.navbar -->

    </div>
</body>