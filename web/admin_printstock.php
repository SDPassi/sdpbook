<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>STOCK: A&C Online Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->

	
<!--content-->
<div class="container">
		<div class="account">
		<h1>Stock</h1>
		<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>ID </th>
			<th>Product </th>
			<th>Quantity </th>
			<th>Price</th>
		</tr>	
		<?php
				 
 				$result = mysqli_query($con,"SELECT * FROM inventory");
 				while($order = mysqli_fetch_array($result)){
	?>


		
		</thead>		
		<tbody>
			<form action="" method="post">
			<tr>
			<td id="productid"><?php echo $order['product_id'] ?></td>
			<td id="productname"><?php echo $order['product_name'] ?></td>
			<td id="productquantity"><?php echo $order['product_quantity']?> </td>
			<td id="productprice"><?php echo $order['product_price']?> </td>
			</tr>
			</form>	
					
		<?php }?> 

		</tbody>
		
		
		
		</table>
				
		</div>
		</div>
		
		
	<div class="clearfix"> </div>
	

<!--//content-->
<script>window.print();</script>
</body>
</html>
			