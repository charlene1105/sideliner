<?php  

include_once('../dbconfig.php');
	// move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads" . $_FILES["image"]["name"]);
	// $img = "uploads/" . $_FILES["image"]["name"];
	// $location = mysql_real_escape_string($location);
	// $sql = "INSERT INTO products(prod_name, category, availability, [condition], brand, stocks, location, price) 
	// 		VALUES('$prod_name','$ category','$availability','$condition','$brand','$stocks','$location','$price')";

	$sql = "UPDATE `notification` SET `viewed`='true' WHERE notifno = '". $_GET['notifno']. "'";
	$result = mysql_query($sql,$conn);
	if(mysql_affected_rows() > 0) {
		echo mysql_affected_rows();
	} else {
		echo mysql_error();
	}

?>