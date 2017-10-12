<?php

	require_once("includes/initialize.php");
	//include 'header.php';

	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$man = new mandatory();
		$man->delete($id[$i]);
	}
	message("mandatory fee particular(s) is successfully deleted!","info");
	redirect('./listofmandatoryfee.php?mafid=&mafcode=&mafdes=');
	
?>
