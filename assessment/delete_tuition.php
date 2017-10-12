<?php

	require_once("includes/initialize.php");
	//include 'header.php';

	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$tui = new tuition();
		$tui->delete($id[$i]);
	}
	message("Tuition fee particular(s) is successfully deleted!","info");
	redirect('./listoftuitionfee.php?tuid=&tucode=&tudes=');
	
?>
