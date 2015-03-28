<?php  
include_once('../dbconfig.php');
extract($_POST);

$fname    = mysql_real_escape_string($fname);
$lname    = mysql_real_escape_string($lname);
$email    = mysql_real_escape_string($email);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$month   = mysql_real_escape_string($month);
$day     = mysql_real_escape_string($day);
$year    = mysql_real_escape_string($year);
$bday      = $year . '-' . $month . '-' . $day;
$sql = "INSERT INTO Users(fname,lname,email,username,password,bday,type,status) 
		VALUES('$fname','$lname','$email','$username','$password','$bday','user','registered')";
$result = mysql_query($sql,$conn);
if(mysql_affected_rows() > 0) {
	echo mysql_affected_rows();
	session_start();
	$_SESSION['user'] = $username;
} else {
	echo mysql_error();
}
?>