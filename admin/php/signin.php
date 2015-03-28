<?php  
include_once('dbconfig.php');
extract($_GET);
$sql = "SELECT * FROM Admin WHERE username = '$username' AND password = '$password'";
$result = mysql_query($sql,$conn);
if(mysql_num_rows($result) > 0) {
	echo json_encode(mysql_fetch_assoc($result));
	session_start();
	$_SESSION['admin'] = $username;
} else {
	echo 0;
}
?>