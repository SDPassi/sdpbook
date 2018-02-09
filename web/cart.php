<?php

session_start();

include "conn.php";

if (isset($_POST['delete'])) {
unset($_SESSION['cart'][$_POST['delete']]);
header("Refresh: 0");
}




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
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
												<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

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
					   <li class="grid"><a class="color3" href="index.php">Home</a></li>	
				      <li><a class="color1" href="activity.php">Activity</a></li>
				    <li class="grid"><a class="color2" href="order.php">Order</a></li>
					<li><a class="color4" href="products.php">Product</a> 	
			    </li>		
				<li><a class="color6" href="profile.php">Profile</a></li>
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
			 <h1>My Cart</h1>
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
						</ul>
						<br>
					<form action="" method="post">
						<input type="hidden" name="delete" value="'.$row['product_id'].'">
						<input type="submit" name="submit" value="Delete" style="width:80px;">
					</form>
					

						
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
		  <div class="col-md-3 cart-total" style="width:100%;">
		  
		  <br>
						 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">RM <?php echo $total; ?></span>
				 <span>Discount</span>
				 <span class="total1"><form action="/action_page.php">
				 
 					<select name="cars">
 						<option value="NONE">NONE</option>
    					<option value="RM 20">150 points (RM 20)</option>
   				 		<option value="RM 30">250 points (RM 30)</option>
   				 		<option value="Rm 50">400 points (RM 50)</option>
   				 		<option value="RM 100">550 points (RM 100)</option>
  					</select>
<br><br>
				</form></span>
		   <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>RM <?php echo $total; ?></h4></li>
				 <a class="cpns" href="#" style="float:right;">Apply Coupons</a>	
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 
			 <div class="total-item" style="margin-top:50px;">
				 
				 <a class="order" href="checkout.php">Check Out</a>
			</div>
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
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
		
</body>

</html>
			