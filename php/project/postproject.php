<?php  
include_once('../dbconfig.php');
session_start();
extract($_POST);
$title = mysql_real_escape_string($title);
$skills = mysql_real_escape_string($skills);
$prjctdesc = mysql_real_escape_string($prjctdesc);
$category = mysql_real_escape_string($category);
$minbudget = mysql_real_escape_string($minbudget);
$maxbudget = mysql_real_escape_string($maxbudget);
$deadlinedate = $year . '-' . $month . '-' . $day;
$sql = "SELECT userno from Users where username = '" . $_SESSION['user'] . "'";
$userno = mysql_fetch_assoc(mysql_query($sql,$conn));
$userno = $userno['userno'];
$datenow = getDateNow();

$sql = "INSERT INTO Projects(dateposted,deadlinedate,title,skills,prjctdesc,category,minbudget,maxbudget,userno) 
		VALUES('$datenow','$deadlinedate','$title','$skills','$prjctdesc','$category','$minbudget','$maxbudget','$userno')";
$postproject = mysql_query($sql,$conn);
if(mysql_affected_rows() > 0) {
	echo mysql_affected_rows();
} else {
	echo mysql_error();
}
?>