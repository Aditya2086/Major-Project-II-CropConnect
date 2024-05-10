<!DOCTYPE HTML>
<html lang="en">

<body class="subpage">
<!-- Header -->
            <header id="header" class="alt">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.jpg" type = "" height = "40px" width = "40px"></a>
                </div>
                <a href="#menu"></a>
                <span><font color = "white"><b>MENU</b></font></span>
            </header>


	<?php

		if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
		{
			$loginProfile = "My Profile: ". $_SESSION['Username'];
			$link = "profileView.php";
		}
		else
		{
			$loginProfile = "Login";
			$link = "Login.php";
		}
	?>
	
<!-- Nav -->
           <nav id="menu">
                <ul class="links">
                    <li><a href="<?php echo $link; ?>"><?php echo $loginProfile; ?></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
</body>

	
</html>