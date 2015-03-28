<?php 
session_start();
include_once('../dbconfig.php');
	
	$sql = "SELECT * FROM notification WHERE notifno = '" . $_GET['notifno']. "'";
	$results = mysql_query($sql,$conn);
	if(mysql_num_rows($results) > 0) {
		echo json_encode(mysql_fetch_object($results));	
	}



?>