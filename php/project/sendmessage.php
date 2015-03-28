<?php  
include_once('../dbconfig.php');
session_start();
extract($_POST);
$msg = mysql_real_escape_string($message);
$prjctno = mysql_real_escape_string($prjctno);
$bidder = mysql_real_escape_string($username);
$datenow = getDateNow();

$sql = "INSERT INTO `notification`(`client`, `bidder`, `msg`, `datercvd`, `prjctno`, `viewed`) 
		VALUES ('". $_SESSION['user']. "','$bidder','$msg','$datenow','$prjctno','false')";
$sendmessage = mysql_query($sql,$conn);
if(mysql_affected_rows() > 0) {
	echo mysql_affected_rows();
} else {
	echo mysql_error();
}
?>