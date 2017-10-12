<?php

	require_once("includes/initialize.php");
	//include 'header.php';

	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$mis = new miscelleneous();
		$mis->delete($id[$i]);
	}
	message("miscelleneous fee particular(s) is successfully deleted!","info");
	redirect('./listofmiscelleneousfee.php?mfid=&mfcode=&mfdes=');
	
?>
