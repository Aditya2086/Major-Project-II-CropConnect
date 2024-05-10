<?php

include ('db.php');
if (isset($_GET['bid'])) {
	$buyer_id = $_GET['bid'];

	// write delete query
	$sql = "DELETE FROM `buyer` WHERE `bid`='$buyer_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	header('Location: viewBuyers.php');
}

?>