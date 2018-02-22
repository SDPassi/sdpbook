<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>STOCK: TPM Bookstore</title>
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
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form action="search.php" method="get">
						<input type="text" value="" name="search1" >
						<input type="submit" value="Go" name="go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<?php if (isset($_SESSION['login_user'])): ?>
						<li ><a href="admin_profile.php"  ><?php echo($_SESSION['login_user']); ?><a href="logout.php">(LOGOUT)</a></li>
						
					<?php else: ?>
						<li ><a href="login.php"  >Login</a></li>
						
					<?php endif; ?>

					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							</div>
							</h3>
						</a>
					

					</div>

						<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="admin_index.php"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">Admin</a>	
				</div>
		  <div class=" h_menu4">
			<ul class="memenu skyblue">
				<li class="active grid"><a class="color2" href="admin_index.php" style="color:black;">Main</a></li>
				<li><a class="color4" href="admin_stock.php">Stock</a></li>	
				<li><a class="color1" href="admin_order.php">Order</a></li>
				<li class="grid"><a class="color2" href="admin_report.php">Report</a></li>
				<li><a class="color6" href="admin_profile.php">Profile</a></li>
			</ul> 
		  </div>
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
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
		<div class="container">
		<div class="activity-button">
							<form action="admin_editstock.php">
							
							<input  type="submit" value="Edit" style="float:right;margin-left:10px;background:#EF5F21;width:auto;font-size: 1.1em;
							padding: 0.4em 0.8em;text-align: center;color: #fff;border: none;outline: none;-webkit-appearance: none;">
							
							</form>	
							
							<form action="admin_printstock.php">
							
							<input  type="submit" value="Print" style="float:right;margin-left:10px;background:#EF5F21;width:auto;font-size: 1.1em;
							padding: 0.4em 0.8em;text-align: center;color: #fff;border: none;outline: none;-webkit-appearance: none;">
							
							</form>		 
		</div>					
		</div>	
		</div>
		</div>
		
		
	<div class="clearfix"> </div>
	

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
			<h4>ADMIN</h4>
				<ul class="nav-bottom">
						<li><a href="admin_index.php">Home</a></li>
						<li><a href="admin_stock.php">Stock</a></li>
						<li><a href="admin_order.php">Order</a></li>
						<li><a href="admin_.php">Report</a></li>
						<li><a href="admin_profile.php">Profile</a></li>	
					</ul>	
					
			</div>		
								<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
			