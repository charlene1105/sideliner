<?php  
include_once('../dbconfig.php');
extract($_GET);
$sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
$result = mysql_query($sql,$conn);
$results = mysql_fetch_object($result);
if(mysql_num_rows($result) > 0 && $results->status == 'registered') {
	echo json_encode(mysql_fetch_assoc($result));
	session_start();
	$_SESSION['user'] = $username;
} elseif(mysql_num_rows($result) > 0 && $results->status == 'banned'){
	echo 2;
} else {
	echo 0;
}
?>