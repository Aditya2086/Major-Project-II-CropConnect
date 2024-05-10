<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1>CROPCONNECT</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> MyCart</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"></span> Digital-Market</a></li>
						<li><a href="blogview.php"><span class="glyphicon glyphicon-edit"></span> Blog</a></li>
						<li><a href="Login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
