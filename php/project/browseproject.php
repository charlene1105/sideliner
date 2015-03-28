<?php  
include_once('../dbconfig.php');

$sql = "SELECT p.prjctno,DATE_FORMAT(p.dateposted,'%b %d %Y %h:%i %p') as dateposted
		,DATE_FORMAT(p.deadlinedate,'%b %d, %Y') as deadlinedate,p.title,p.skills,p.prjctdesc,
		p.category,p.minbudget,p.maxbudget,u.username FROM Projects p, Users u WHERE u.userno = p.userno AND  p.status != 'Working in progress'
		ORDER BY p.dateposted DESC";
$projects = mysql_query($sql,$conn);
while ($row = mysql_fetch_object($projects)) {
	echo '<tr class="projectRow" id="' . $row->prjctno .'">' .
		 '<td>' . $row->title . '</td>' .
		 '<td>' . '<span data-livestamp="' . $row->dateposted .'"></span>' . '</td>' .
		 '<td>' . $row->deadlinedate . '</td>' .
		 '<td>' . $row->skills . '</td>' .
		 '<td>' . '₱' . $row->minbudget . ' - ₱'.  $row->maxbudget . '</td>' .
		 '</tr>';
}
?>