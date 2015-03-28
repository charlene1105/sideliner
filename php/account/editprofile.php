<?php  
extract($_POST);
include_once('../dbconfig.php');

	$contactno   = mysql_real_escape_string("+639" . $contactno);
	$email = mysql_real_escape_string($email);
	$address = mysql_real_escape_string($address);
	$zipcode = mysql_real_escape_string($zipcode);
	$skills = mysql_real_escape_string($skills);

	// move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads" . $_FILES["image"]["name"]);
	// $img = "uploads/" . $_FILES["image"]["name"];
	// $location = mysql_real_escape_string($location);
	// $sql = "INSERT INTO products(prod_name, category, availability, [condition], brand, stocks, location, price) 
	// 		VALUES('$prod_name','$ category','$availability','$condition','$brand','$stocks','$location','$price')";

	$sql = "UPDATE `Users` SET `contactno`='$contactno',`email`='$email',`address`='$address',`zipcode`='$zipcode',`skills`='$skills' WHERE userno = '". $_GET['userno']. "'";
	$result = mysql_query($sql,$conn);
	if(mysql_affected_rows() > 0) {
		echo mysql_affected_rows();
	} else {
		echo mysql_error();
	}

?>