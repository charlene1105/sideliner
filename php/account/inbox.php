<?php 
session_start();
include_once('../dbconfig.php');
	
	$sql = "SELECT client,bidder, msg,notifno, viewed, DATE_FORMAT(datercvd,'%b %e, %Y %h:%i:%s %p') as datercvd FROM notification WHERE bidder = '" . $_SESSION['user'] . "' ORDER BY datercvd DESC";
	$results = mysql_query($sql,$conn);
	if(mysql_num_rows($results) > 0) {
		echo "<div class='col-md-8 col-md-offset-2'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>Sender</th>
					<th>Message</th>
					<th>Date Received</th>
				</tr>
			</thead>
			<tbody>";
		while($row = mysql_fetch_object($results))
		{

			if($row->viewed == 'true')
			{
				echo "<tr class='rowMsg' id='" . $row->notifno. "'>
					<td class='client' id='" . $row->notifno. "'>$row->client</td>
					<td class='msg' id='" . $row->notifno. "'>$row->msg</td>
					<td>$row->datercvd</td>
				</tr>";	
			} 
			else 
			{
				echo "
						<tr class='rowMsg' id='" . $row->notifno. "'>
							<td id='client'><b>$row->client</b></td>
							<td id='msg'><b>$row->msg</b></td>
							<td><b>$row->datercvd</b></td>
						</tr>
					";
			}
			

		}

			echo "		</tbody>
				</table>
			</div>
			";
	} else {
		echo '<div class="col-md-8 col-md-offset-2">
				<h3 class="text-center">No Messages</h3>
			  </div>';
	}
		



?>