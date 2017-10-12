<?php
require_once("includes/initialize.php");
include 'header-entry.php';

?>

<style type="text/css">
						.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
						.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
						.tftable tr {background-color:#ffffff;}
						.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
						.tftable tr:hover {background-color:#ffff99;}
</style>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="well">
			    <form action="delete_subject.php" Method="POST">  					
				<table class="tftable">
					<caption><h3 align="left">List of Rooms</h3></caption>
				  <thead>
				  	<tr>
				  		<th width="25%" >Room ID</th>
				  		<th width="45%" >Building/Room</th>
				  		<th width="5%" >Capacity</th>
				  		
				  		
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				
						
					$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;	
					$per_page = 5;
					$countEmp = new RoomPagination();
					$total_count = $countEmp->count_allrecords();					
					$pagination = new RoomPagination($current_page, $per_page, $total_count);
				  	  @$roomid =  $_GET['roomid'];
				  	  @$building =  $_GET['building'];
				  	  
				  	  
				  	  if ($roomid == '' AND $building==''){ 
					  		$mydb->setQuery("SELECT  *
												FROM  `tbl_room`
					  		 					LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();
					  	}else{
					  		$mydb->setQuery("SELECT  *
											FROM  `tbl_room`
										WHERE `room_id`='{$roomid}'
										or `building_name_and_room_number` like '{$building}' 
										");
					  		loadresult();

					  	}

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';

						  		echo '<td width="15%"><a href="edit_room.php?id='.$result->room_id.'">' . $result->room_id.'</a></td>';
						  		echo '<td width="30%">'. $result->building_name_and_room_number.'</td>';
						  		
						  		echo '<td width="30%">'. $result->capacity.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td colspan="7"><?php	echo '<ul class="pager" align="center">';

					if ($pagination->total_pages() > 1){

						echo 'Page ' .$current_page .' of '. $pagination->total_pages();

						if ($current_page == 1 ){
							echo ' <li class="disabled"><a href=listofroom.php?page='.$pagination->First_page().'>First </a> </li>';
						
						}else{
							echo ' <li ><a href=listofroom.php?page='.$pagination->First_page().'>First </a> </li>';

						}
						
						if  ($current_page >= 1 ){
							
							echo ' <li> <a href=listofroom.php?page='.($current_page - 1).'>Previous </a> </li>';

						}else{
							echo ' <li class="disabled"> <a href=listofroom.php?page='.($current_page - 1).'>Previous </a> </li>';
						}
						
						if ($current_page <  $pagination->total_pages()){
						
							echo ' <li><a href=listofroom.php?page='.($current_page + 1) .'>Next</a></li> ';
											
						}else{

							echo ' <li class="disabled"><a href=listofroom.php?page='.($current_page + 1) .'>Next</a></li> ';
						}
						
					
							
						if ($current_page ==  $pagination->total_pages() ){
													
							echo ' <li class="disabled"><a href=listofroom.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}else{
							echo ' <li><a href=listofroom.php?page='.$pagination->total_pages().'>Last </a> </li>';
						}
							
					}
					
					?></td></tr>
				  </tfoot>	
				</table><br>
				<div class="btn-group">
				  <a href="newroom.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <a href="filter_room.php" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> Search</a>
				
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

<?php include("footer.php") ?>



