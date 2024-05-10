<?php 

include ('db.php');

include ('adminMenu.php');


// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$fname = $_POST['fname'];
		$user_id = $_POST['user_id'];
		$fusername = $_POST['fusername'];
		$femail = $_POST['femail'];
		$fpassword = $_POST['fpassword'];
		$fmobile = $_POST['fmobile'];
		$faddress = $_POST['faddress'];

		// write the update query
		$sql = "UPDATE `farmer` SET `name`='$name',`fusername`='$fusername',`email`='$email',`password`='$password',`mobile`='$mobile', `address`='$address' WHERE `fid`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['fid'])) {
	$user_id = $_GET['fid'];

	// write SQL to get user data
	$sql = "SELECT * FROM `farmer` WHERE `fid`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$fname = $row['fname'];
			$fusername = $row['fusername'];
			$femail = $row['femail'];
			$fpassword  = $row['fpassword'];
			$fmobile = $row['fmobile'];
			$faddress = $_POST['faddress'];
			$fid = $row['fid'];
		}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agri-Bizz : Users</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
	</head>
	
<body style="background:blue">

<div class="frm" style="background:red">
<h2>User Update Form</h2>
		<form action="" method="post" style="background:red">
		  <fieldset>
		    <legend>Personal information:</legend>
		    First name:<br>
		    <input type="text" name="name" value="<?php echo $fname; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $fid; ?>">
		    <br>
		    Last name:<br>
		    <input type="text" name="username" value="<?php echo $fusername; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $femail; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="password" value="<?php echo $fpassword; ?>">
		    <br>
		    Address:<br>
		      <input type="text" name="addr" value="<?php echo $faddress; ?>"><br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>
<div>	
</body>
</html>

<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>
	