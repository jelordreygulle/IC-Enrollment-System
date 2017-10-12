<?php
require_once("includes/initialize.php");
include 'header-entry.php';
?>
<div class="container">
<?php
	$roomid = $_GET['id'];
	$singleroom = new Room();
	$object = $singleroom->single_room($roomid);
if (isset($_POST['savecourse'])){
	

	if ($_POST['building'] == "" OR $_POST['capacity'] == "" ) {
		message("All field is required!","error");
		check_message();
	}else{
		

			$room = new Room();
			$building		= $_POST['building'];
			$capacity   	= $_POST['capacity'];
			
		

			$room->building_name_and_room_number	= $building;
			$room->capacity		 					= $capacity;
			
 			$room->update($roomid);
			message($building. " has updated successfully!", "info");
			redirect('listofroom.php');
			 
			
		}	 

		
	}

?>		
		
		 
		        <form class="form-horizontal well span4" action="edit_room.php?id=<?php echo $object->room_id;?>" method="POST">

					<fieldset>
						<legend><span  class="glyphicon glyphicon-edit">  </span>  Edit Room</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode">Building/Room</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="building" name="building" placeholder=
													  "e.g. NESB Building Rm. 103" type="text" value="<?php echo $object->building_name_and_room_number;?>">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc">Capacity</label>

				              <div class="col-md-8">
				                 <input required class="form-control input-sm" id="capacity" name="capacity" placeholder=
													  "" type="number" value="<?php echo $object->capacity;?>">
				              </div>
				            </div>
				          </div>

				         

				          
				     
						
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
				                <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
				              </div>
				            </div>
				          </div>

							
					</fieldset>	

									
				</form>
				</div><!--End of container-->
			

<?php include("footer.php") ?>

