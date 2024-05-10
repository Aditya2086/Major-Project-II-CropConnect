<?php 
include "db.php";
include ('adminMenu.php');

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];

		// write the update query
		$sql = "UPDATE `farmer` SET `name`='$name',`username`='$username',`email`='$email',`password`='$password',`mobile`='$mobile', `address`='$address' WHERE `fid`='$user_id'";

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
			$faddress = $row['faddress'];
			$fid = $row['fid'];
		}

	?>
	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agri-Bizz</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<style>
		body {
			background:beige;
		}
		
		form {
			width:50%;
			margin-left:25%;
			padding:5px 100px;
			border:1px solid orange;
		}
		h2 {
			text-align:center;
		}
		.input {
			width:70%;
			background:#104711;
			margin-left:20%;
		}
		@media access and (max-width: 500px){
			form {
				width:100%;
				padding:0px;
			}
		}
		</style>
	</head>
	<body>
		<h2 style="font: 30px 'Akaya Telivigala', cursive">Farmer Update Form</h2>
		<form action="" method="post" >
		  <fieldset>
		    First name:<br>
		    <input type="text" name="name" value="<?php echo $fname; ?>" >
		    <input type="hidden" name="user_id" value="<?php echo $fid; ?>" >
		    <br>
		    Last name:<br>
		    <input type="text" name="username" value="<?php echo $fusername; ?>" >
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $femail; ?>" >
		    <br>
		    Password:<br>
		    <input type="password" name="password" value="<?php echo $fpassword; ?>" >
		    <br>
			Phone:<br>
		    <input type="phone" name="mobile" value="<?php echo $fmobile; ?>" >
		    <br><br>
		    Address:<br>
		      <input type="text" name="address" value="<?php echo $faddress; ?>" class="input"><br>
		    <input type="submit" value="Update" name="update" class="input" style="background:#104711;"><br>
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to viewFarmer.php page
		header('Location: viewFarmer.php');
	}

}
?>