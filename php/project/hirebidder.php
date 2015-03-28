<?php  

include_once('../dbconfig.php');


	// move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads" . $_FILES["image"]["name"]);
	// $img = "uploads/" . $_FILES["image"]["name"];
	// $location = mysql_real_escape_string($location);
	// $sql = "INSERT INTO products(prod_name, category, availability, [condition], brand, stocks, location, price) 
	// 		VALUES('$prod_name','$ category','$availability','$condition','$brand','$stocks','$location','$price')";

	$sql = "UPDATE `Projects` SET `status`='Working in progress' WHERE prjctno = '". $_POST['prjctno']. "'";
	$result = mysql_query($sql,$conn);
	if(mysql_affected_rows() > 0) {
		echo mysql_affected_rows();
	} else {
		echo mysql_error();
	}

?>