<?php

session_start();

include "conn.php";

if (isset($_POST['delete'])) {
unset($_SESSION['cart'][$_POST['delete']]);
header("Refresh: 0");
}


if (isset($_POST['post'], $_POST['id'])) {

$sql2 = "INSERT INTO orders(member_id, total_price) VALUES ('$_POST[id]', '$_POST[post]')";
$sql3 = "INSERT INTO orders_details(order_id, product_id, product_quantity) VALUES ('$_SESSION[order_id]', $_SESSION[product_id]',$_SESSION[product_quantity]')";

$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_quety($con, $sql3);
}
$success = "Your order have been confirmed!";


?>
<!DOCTYPE html>
<html>
<head>
<title>CART: TPM Bookstore</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
						<li class="dropdown"><a href="#"><?php echo($_SESSION['login_user']); ?></a>
						<div class="dropdown-content">
							<a href="order.php">My Purchase</a>
							<a href="logout.php">Logout</a>
						
						</div>
						
						</li>
						
					<?php else: ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					<?php endif; ?>

					</ul>
					<div class="cart box_1">
						<a href="cart.php">
						<h3><div class="total">
							</div>
							<a href="cart.php" style="padding-right:15px;"><img src="images/cart.png" alt=""/></a>
							<a href="javascript:;" class="simpleCart_empty" style="color:white;">(Empty Cart)</a></h3>
						</a>
												
					</div>
			</div>	
		</div>
		</div>
<!--navbar-->		
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">TPM Bookstore</a>
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					   <li class="active grid"><a class="color2" href="index.php" style="color:black;">Home</a></li>	
					   <li><a class="color4" href="products.php">Product</a></li>	
				      <li><a class="color1" href="activity.php">Activity</a></li>
				<li><a class="color6" href="profile.php">My Account</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

<!--content-->	
<div class="cart">
<div class="container">
	<div class="check">	 
			 <h1>Order Summary</h1>
		 <div class="col-md-9 cart-items" style="background-color:white;">
			
			 <div class="cart-header">
				
				 <div class="cart-sec simpleCart_shelfItem">
<?php
if(isset($_SESSION['cart'])){
$total = 0;
foreach($_SESSION['cart'] as $book_id => $carts){
$sql = "SELECT * FROM inventory WHERE product_id = $book_id";


$result1 = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result1)) {

$subtotal = $carts * $row['product_price'] ;
$total += $subtotal;
				
				echo '<div class="cart-item cyc" style="width: 100%; border-bottom: groove;margin-top:40px;margin-bottom:30px;">
							 <img style="float: left; width:200px;" src="images/'.$row['product_image'].'.jpg" class="img-responsive" alt="" >
					   <div style="float: left;padding-left:100px;padding-bottom:100px;" class="cart-item-info">
						<h3>'.$row['product_name'].'<span>RM '.$subtotal.'</span></h3>
						<ul class="qty">
							<li><p>Qty : '.$carts.'</p></li>
							<br>
							<br>
							<li><p style="color:green;">CONFIRMED</p></li>
						</ul>
						<br>
		        </div>	
			 </div> ';		
	}
		
}
}

?>
</div>
</div>
</div>
</div>



				<br>	
				
<?php
if (isset($_SESSION['login_user'])) {
$sql1 = "SELECT * FROM member WHERE email = '$_SESSION[login_user]'";

$result2 = mysqli_query($con, $sql1);

$row1 = mysqli_fetch_array($result2);
}

?> 
		  <div class="col-md-3 cart-total" style="width:100%;">
		  
						 <div class="price-details">
						
		   <div class="clearfix"></div>				 
			 </div>	
			 <br>
			 <div class="price-details">
			  <h2>Price Details</h2>
			  <br>
			 	<span class="last_price">
			 	<span><h3 style="font-size:large;">TOTAL: RM <?php $total1 = $total -$_POST['cars'];echo $total1; ?></h3></span>
			 	<br>
			 	<br>
			 	<span><h3 style="color:green;font-size:large;">DELIVERY: FREE</h3></span>

			 	</span>	
			 <div class="clearfix"> </div>
			 </div>
			
			 
			 <div class="clearfix"></div>
						 
			<form method="post" action="insertdata.php">
			 <div class="total-item" style="margin-top:50px;">
			 	<input type="hidden" name="post" value="<?php echo $total1; ?>"/>
				<input type="hidden" name="cars" value="<?php echo $_POST['cars']?>" />				 
				<div class="order">
				 <input type="hidden" name="submit">
				 <input type="submit" name="submit" value="Review &amp; Pay" style="width:100%;background: #EF5F21;padding: 0.4em 1em;color: #fff; font-size: 1.2em;transition:0.5s all;display:block;border: none;outline: none;"></div>
			</div>
			</form>

			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


<!--//footer-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="index.php">Home</a></li>
						<li><a href="activity.php">Activity</a></li>
						<li><a href="order.php">Order</a></li>
						<li><a href="products.php">Product</a></li>
						<li><a href="profile.php">Profile</a></li>	
					</ul>	
					
			</div>		
								<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2018 TPM Bookstore </p>
		</div>
		</div>
		
</body>

</html>
			