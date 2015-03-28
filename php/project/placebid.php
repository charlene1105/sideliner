<?php 
include_once('../dbconfig.php');
session_start();
extract($_POST);
$bidprice = mysql_real_escape_string($bidprice);
$estworkday = mysql_real_escape_string($estworkday);
$sql = "SELECT userno from Users where username = '" . $_SESSION['user'] . "'";
$userno = mysql_fetch_assoc(mysql_query($sql,$conn));
$userno = $userno['userno'];
$datenow = getDateNow();

$sql = "INSERT INTO Bids(biddate,bidprice,estworkday,userno,prjctno) 
		VALUES('$datenow','$bidprice','$estworkday','$userno','$prjctno')";

$placebid = mysql_query($sql,$conn);
if(mysql_affected_rows() > 0) {
	echo mysql_affected_rows();
} else {
	echo mysql_error();
}


?>