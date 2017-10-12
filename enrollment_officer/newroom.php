<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
if (isset($_POST['saveroom'])){

	if ($_POST['building'] == "" OR $_POST['capacity'] == ""  ) {
		message("All field is required!","error");
		check_message();
	}else{
		

			$room = new Room();
			$building   	= $_POST['building'];
			$capacity	 	= $_POST['capacity'];
			
	
			$room->building_name_and_room_number= $building;
			$room->capacity						= $capacity;
			


			 $istrue = $room->create(); 
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
			 	redirect('listofroom.php');
			 }
	}		 
	 

		
	
}elseif (isset($_POST['saveandnewroom'])) {
	if ($_POST['building'] == "" OR $_POST['capacity'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		
			$room = new Room();
			$building   	= $_POST['building'];
			$capacity	 	= $_POST['capacity'];
			
	
			$room->building_name_and_room_number= $building;
			$room->capacity						= $capacity;
			
		

			 $istrue = $room->create();
			 if ($istrue == 1){
			 	
			 	message("New Subject created successfully!","success");
		
			 }
}
}

?>		
		
		 
		        <form class="form-horizontal well span4" action="#.php" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-plus-sign">  </span>  New Room</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Building/Room</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="building" name="building" placeholder=
													  "e.g NESB Building Rm. 103" type="text" value="">
				              </div>
				            </div>
				          </div>

				         <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Capacity</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="capacity" name="capacity" placeholder=
													  "" type="number" value="">
				              </div>
				            </div>
				          </div>

				          




				  

						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-default" name="saveroom" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
				               <button class="btn btn-default" name="saveandnewroom" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>



