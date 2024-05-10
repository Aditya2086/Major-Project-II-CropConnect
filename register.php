<?php 

include ('adminMenu.php');
include ('db.php');


// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hash = $_POST['hash'];
		
		$password = password_hash($password, PASSWORD_DEFAULT);
		$hash = password_hash($hash, PASSWORD_DEFAULT);


		//write sql query

		$sql = "INSERT INTO `admin`(`name`, `username`, `password`, `hash`) VALUES ('$name', '$username', '$password', '$hash')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:";
		}

		$conn->close();
		header('Location: viewFarmer.php');
	}


?>
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CROPCONNECT</title>
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
	width:60%;
	margin-left:20%;
	font-size:20px;
	padding:30px;
	border:1px solid orange;
}
input {
	height:2em;
	width:70%;
	border:1px solid orange;
	margin: 10px 30px;
}
.btn {
	font-size:16px;
	width:50%;
	margin-left:10%;
	background:#104911;
	color:#fff;
	border:1px solid orange;
	border-radius:8px;
	cursor:pointer;
}
.form {
	display:grid;
	grid-template-columns:1fr 1fr;
}
		</style>
	</head>	
	<body>
<div class="container-form">	
	<div class="form">
<div class="form-1">
<h2 style="margin-top:30px; color:#104911; text-align:center; font: 30px 'Akaya Telivigala', cursive"> ADMIN SIGNUP</h2>
<form action="" method="POST" style="margin-top:10px">
  <fieldset>
    Full Name<br>
    <input type="text" name="name">
    <br>
    Username<br>
    <input type="text" name="username">
    <br>
    Password<br>
    <input type="password" name="password">
    <br>
	Retype Password<br>
    <input type="password" name="hash">
    <br>
    <input type="submit" name="submit" value="Submit" class="btn" style="background:#104911">
  </fieldset>
</form>
</div>

<div class="form-2">
<h2 style="margin-top:30px; color:#104911; text-align:center; font: 30px 'Akaya Telivigala', cursive"> ADMIN LOGIN</h2>
<form action="" method="POST" style="margin-top:10px">
  <fieldset>
    Username<br>
    <input type="text" name="username">
    <br>
    Password<br>
    <input type="password" name="password">
    <br>
    <input type="submit" name="submit" value="Submit" class="btn" style="background:#104911">
  </fieldset>
</form>
</div>
</div>
</div>
<div>
</body>
</html>