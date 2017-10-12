<?php
header('Content-type: application/excel');
$filename = 'filename.xls';
header('Content-Disposition: attachment; filename='.$filename);

$data = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';


require_once("includes/initialize.php");



?>
<head>
    <!--[if gte mso 9]>
    <xml>
        <x:ExcelWorkbook>
            <x:ExcelWorksheets>
                <x:ExcelWorksheet>
                    <x:Name>Sheet 1</x:Name>
                    <x:WorksheetOptions>
                        <x:Print>
                            <x:ValidPrinterInfo/>
                        </x:Print>
                    </x:WorksheetOptions>
                </x:ExcelWorksheet>
            </x:ExcelWorksheets>
        </x:ExcelWorkbook>
    </xml>
    <![endif]-->
</head>
<style>
  
body { 
    font: 62.5%/1.3 normal Helvetica, sans-serif;
}
  p {
    font-size: 1.6em;
  } 
  h1 {
    font-size: 1.9em; 
  }
table {
    border-collapse: collapse;
    width: 100%;
}
  p, h1 {
    margin: 2em 0; 
  }
td, th { 
   text-align: center; 
   border: 1px solid #ddd; 
   padding:.5em 5px;
    font-size: 1.2em;
}
  th { 
    background-color:#f4f4f4;
    font-weight: normal;
  } 
caption {
    margin: 0; 
    font-weight: bold; 
    font-size: 1.3em; 
    background: #eee;
    padding: 10px;
    border: 1px solid #ddd; 
 }

  
  /* queries */
@media screen and (max-width: 520px){
   
  html:not(.emp-sales) .emp-sales th, 
  html:not(.emp-sales) .emp-sales td {
    font-size: 0;
    padding: 0;
    content: "";
    height: 7px;
  }
  html:not(.emp-sales) table {
    position: relative; 
    overflow: hidden;
  }
  html:not(.emp-sales) table:before {
    content: "Table: Tap to View";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.6);
    color: #fff;
    font-weight: bold;
    font-size: 1.6em;
    text-align: center;
    vertical-align: middle;
    z-index: 100;
    font-family: Helvetica, sans-serif;
 
  }
 html.emp-sales table:before {
    content: "";
    display: block;
    background: #333;
    padding: 10px;
  }
  
  html.emp-sales table:before{
    content: "Back";
    position: absolute;
    top: 0;
    left: 15px;
    padding: .5em 1em;
    margin: 10px 0;
    font-weight: bold;
    color: #fff;
    background: #000;
    border: 1px solid #fff;
  }
   /* around here we could use the HTML class to hide all other content on the page aside from the table */
  html.emp-sales p, html.emp-sales h1 {
    display: none; 
  }
 
 }
</style>

<body>
   <table class="emp-sales">
    <center><h2>Initao College<h2></center>
<center><h3>Office of the Registrar</h3></center>
<center><h3><p>Student Profile</p></h3></center>



    
    
    <thead>
      <tr>
        
        <th scope="col">Student Name</th>
        <th scope="col">Course</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Birth Place</th>
        <th scope="col">Age</th>
        <th scope="col">Sex</th>
        <th scope="col">Status</th>
        <th scope="col">Home Address</th>
        <th scope="col">Religion</th>
		<th scope="col">Father's Name</th>
    <th scope="col">Father's Occupation</th>
		<th scope="col">Mother's Name</th>
    <th scope="col">Mother's Occupation</th>
		<th scope="col">Contact Number</th>
    <th scope="col">Registration Dater</th>

      </tr>
    </thead>
    <tbody>
      
      <?php 

        
              global $mydb;
             $course  =  $_GET['course'];
             $ay      =  $_GET['ay'];
             $term    =  $_GET['term'];

              if ($course == 'All Student' AND $ay =='' AND $term == ''){
                
                $mydb->setQuery("SELECT CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name', `tbl_course`.*, `tbl_student`.*
                                  FROM tbl_course, tbl_student
                                  where `tbl_course`.`course_id` = `tbl_student`.`course_id`

                                  ");
                loadresult();

              }

            
              

            

              else{
              

                $mydb->setQuery("SELECT CONCAT(  `tbl_student`.`lname` ,  ' ',  `tbl_student`.`fname` ,  ' ', `tbl_student`.`mname` ) AS  'Name', `tbl_course`.*, `tbl_enrollment_records`.*, `tbl_student`.*
                                FROM tbl_course, tbl_enrollment_records, tbl_student
                                where `tbl_course`.`course_id` = `tbl_student`.`course_id`
                                and `tbl_enrollment_records`.`student_id` = `tbl_student`.`student_id`
                                and `tbl_enrollment_records`.`term` = '$term'
                                and `tbl_enrollment_records`.`AY` = '$ay'
                                and `tbl_course`.`course_id` = '$course'

                                  ");
                loadresult();
              
              }

              
              
            
              function loadresult(){
                global $mydb;
                $cur = $mydb->loadResultList();
              foreach ($cur as $student) {
                echo '<tr>';

                echo '<td>'. $student->Name.'</td>';
                echo '<td>'. $student->course_abb.'-'. $student->Major.', '. $student->AY.'</td>';
                echo '<td>'. $student->birthdate.'</td>';
                echo '<td>'. $student->birth_place.'</td>';
                echo '<td>'. $student->age.'</td>';
                echo '<td>'. $student->gender.'</td>';
                echo '<td>'. $student->status.'</td>';
                echo '<td>'. $student->address.'</td>';
                echo '<td>'. $student->religion.'</td>';
                echo '<td>'. $student->father_name.'</td>';
                echo '<td>'. $student->father_occupation.'</td>';
                echo '<td>'. $student->mother_name.'</td>';
                echo '<td>'. $student->mother_occupation.'</td>';
                echo '<td>'. $student->contact_number.'</td>';
                echo '<td>'. $student->registration_date.'</td>';
                
                
                echo '</tr>';
                }

              } 
            
            ?>
    </tbody>
  </table>
</body></html>';

<?php echo $data; 

//redirect('./filter_print_student_info.php');

?>