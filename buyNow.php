<?php
	session_start();
	require 'db.php';
    $pid = $_GET['pid'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $addr = $_POST['addr'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];

        $sql = "INSERT INTO transaction (bid, pid, name, city, mobile, email, pincode, addr)
                VALUES ('$bid', '$pid', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/success.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>CROPCONNECT - Transaction</title>
	<meta lang="eng">
    <meta charset="UTF-8">
        <title>CROPCONNECT</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>

    <?php
        require 'menu.php';
    ?>


    <section id="main" class="wrapper" style="background:beige" >
        <div class="container">
        <center>
                <h2 style="font-size:35px; font-family: 'Akaya Telivigala', cursive; color:#022708">Transaction Details</h2>
        </center>
        <section id="two" class="wrapper style2 align-center">
        <div class="container">
            <center>
                <form method="post" action="buyNow.php?pid=<?= $pid; ?>" style="border: 2px solid green; padding: 15px;">
                    <center>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Full Name" required/>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="city" id="city" value="" placeholder="Location" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>

                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="4u 12u$(xsmall)">
                            <input type="text" name="quantity" id="quantity" value="" placeholder=" Quantity eg 1 Kg, 2Kg... or 1, 2, 3.." required/>
                        </div>
                        <div class="8u 12u$(xsmall)">
                            <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
                        </div>
                    </div>
                    <br />
                    <p>
                        <input type="submit" value="Confirm Order" style="font-family:'Akaya Telivigala', cursive; color:#fff; background:#022708"/>
                    </p>
                </center>
            </form>
        </fieldset>
