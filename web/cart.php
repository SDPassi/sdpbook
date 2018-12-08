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
<title>CART: A&C Online Shop</title>
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
							</h3>
						</a>

										</div>
			</div>	
		</div>
		</div>
<!--navbar-->		
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/cdlogo.png" style="width:10%;height:10%" alt="">A&C Online Shop</a>
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					  <li class="active grid"><a class="color2" href="index.php" style="color:black;">Home</a></li>	
					   <li><a class="color4" href="products.php">Product</a></li>	
				      <?php if (isset($_SESSION['login_user'])): ?>
					  	<li><a class="color6" href="profile.php">My Account</a></li>
					<?php else: ?>
					 	<li><a class="color6" style="display: none" href="profile.php">My Account</a></li>
					<?php endif; ?> 	

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
							 <img  src="images/'.$row['product_image'].'.jpg" class="img-responsive" alt="" style="float: left; width:200px;">
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
		  <form method="post" action="checkout.php">
		  <div class="col-md-3 cart-total" style="width:100%;">
		  
		  <br>
		  
						 <div class="price-details">
						 
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">RM <?php echo $total; ?></span>
				 
				 <span>Discount</span>
				 
				 <span class="total1">

				  	<select name="cars" onchange="document.getElementById('total').innerHTML = parseFloat(document.getElementById('total-original').innerHTML) - this.value;">
 						<option value="0">NONE</option>
    					<option value="10" <?php if($total<100){echo "disabled";}else{} ?>>100 points (RM 10)</option>		
   				 		<option value="20" <?php if($total<200){echo "disabled";}else{} ?>>200 points (RM 20)</option>
   				 		<option value="30" <?php if($total<300){echo "disabled";}else{} ?>>300 points (RM 30)</option>
   				 		<option value="40" <?php if($total<400){echo "disabled";}else{} ?>>400 points (RM 40)</option>
 	  				</select>
  					 
<br><br>
				</span>
		   <div class="clearfix"></div>				 
			 </div>	
			 
			 <ul class="total_price">
			   <li class="last_price" ><h4>RM <span id="total"><?php echo $total; ?></span></h4></li>
			   <div id="total-original" style="display:none"><?php echo $total;?></div>	
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 
			 <div class="total-item" style="margin-top:50px;">
				 
			<input type="submit" name="submit" value="Check Out" style="width:100%;">
			 
			</div>
			</div>
			</form>
			
		
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
						<li><a href="products.php">Products</a></li>
					<?php if (isset($_SESSION['login_user'])): ?>
						<li><a href="order.php">Order</a></li>
						<li><a href="profile.php">My Account</a></li>	
					<?php else: ?>
						<li style="display: none"><a href="order.php">Order</a></li>
						<li style="display: none"><a href="profile.php">My Account</a></li>	
					<?php endif; ?>
					</ul>	
					
			</div>		
								<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2018 A&C Online Shop</p>
		</div>
		</div>
		
</body>

</html>
			