<?php 
session_start();
include_once('../dbconfig.php');
	
	$sql = "SELECT * FROM notification WHERE bidder = '" . $_SESSION['user'] . "' AND viewed = 'false'";
	$results = mysql_query($sql,$conn);
	if(mysql_num_rows($results) > 0) {
		echo mysql_num_rows($results);
	} else {
		echo 0;
	}
		



?>