<?php 

include ('db.php');

include ('adminMenu.php');



$sql = "SELECT * FROM fproduct";

//execute the query

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CropConnect - Products</title>
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
	</head>
	
<body>

	<div class="container">
		<h2 style="font: 30px 'Akaya Telivigala', cursive">Products</h2>
<table class="table">
	<thead>
		<tr style="font: 20px 'Akaya Telivigala', cursive;font-weight: 900">
		<th> Seller ID</th>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Product Category</th>
		<th>Description</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['fid']; ?></td>
					<td><?php echo $row['pid']; ?></td>
					<td><?php echo $row['product']; ?></td>
					<td><?php echo $row['pcat']; ?></td>
					<td><?php echo $row['pinfo']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td><a class="btn btn-danger" href="deleteProduct.php?pid=<?php echo $row['pid']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>	
	
</body>
</html>
	