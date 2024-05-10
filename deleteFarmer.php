<?php

include ('db.php');
if (isset($_GET['fid'])) {
	$farmer_id = $_GET['fid'];

	// write delete query
	$sql = "DELETE FROM `farmer` WHERE `fid`='$farmer_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	header('Location: viewFarmer.php');
}

?>
