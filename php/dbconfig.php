<?php 
// Root User: 	adminxlj6wQ8
// Root Password: LnfWdmaHA_Qd

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sideliner';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn) {
	die(mysql_error());
} else {
	mysql_select_db($dbname);
}

function getDateNow() {
	$usersTimezone = 'Asia/Manila';
	$date = new DateTime('now', new DateTimeZone($usersTimezone));
	$dateposted = $date->format('Y-m-d H:i:s');
	return $dateposted;
}








?>

