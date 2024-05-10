<?php
include ('db.php');

    session_start();

    $user = dataFilter($_POST['uname']);
    $pass = $_POST['pass'];
	
	$sql = "SELECT * FROM admin WHERE username='$user'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0)
    {
        $_SESSION['message'] = "Invalid User Credentials!";
        header("location: productView.php");
    }

    else
    {
        $User = $result->fetch_assoc();

        if (password_verify($_POST['hash'], $User['password']))
        {
            $_SESSION['id'] = $User['id'];
            $_SESSION['Hash'] = $User['hash'];
            $_SESSION['Password'] = $User['password'];
            $_SESSION['Name'] = $User['name'];
            $_SESSION['Username'] = $User['username'];
            $_SESSION['logged_in'] = true;

            //echo $_SESSION['Email']."  ".$_SESSION['Name'];

            header("location: viewFarmer.php");
        }
        else
        {
            //echo mysqli_error($conn);
            $_SESSION['message'] = "Invalid User Credentials!";
            header("location: Login/error.php");
        }
    }
	
	    function dataFilter($data)
    {
    	$data = trim($data);
     	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
      	return $data;
    }

?>