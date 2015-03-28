<?php 
session_start();
include_once('../dbconfig.php');
if($_SESSION['user'] != '') {
	$sql = "SELECT userno,contactno,fname,mname,lname,DATE_FORMAT(bday,'%b %e, %Y') as bday, address, zipcode, email, 
			username, status, skills FROM Users WHERE Username = '" . $_SESSION['user'] . "'";
	$results = mysql_query($sql,$conn);
	echo json_encode(mysql_fetch_assoc($results));	
}

?>