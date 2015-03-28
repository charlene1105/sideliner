<?php  
include_once('../dbconfig.php');
$prjctno = $_GET['prjctno'];
$sql = "SELECT p.prjctno,DATE_FORMAT(p.dateposted,'%b %d %Y %h:%i %p') as dateposted
		,DATE_FORMAT(p.deadlinedate,'%b %d, %Y') as deadlinedate,p.title,p.skills,p.prjctdesc,
		p.category,p.minbudget,p.maxbudget,u.username FROM Projects p, Users u WHERE u.userno = p.userno AND p.prjctno = '$prjctno'
		ORDER BY p.dateposted";
$project = mysql_query($sql,$conn);
echo json_encode(mysql_fetch_object($project));

?>