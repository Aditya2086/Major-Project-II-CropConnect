<?php

include ('db.php');
if (isset($_GET['pid'])) {
	$product_id = $_GET['pid'];

	// write delete query
	$sql = "DELETE FROM `fproduct` WHERE `pid`='$product_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	header('Location: productView.php');
}

?>