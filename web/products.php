<?php
session_start();

include "conn.php";

if (isset($_POST['login_user'])) {
$sql1 = "SELECT ID FROM member WHERE email = '".$_SESSION['login_user']."'";
$result1 = mysqli_query ($con,$sql1);
$row = mysqli_fetch_array ($result1);
}

if (isset($_POST['quantity'])) {

$sql = "INSERT INTO cart(product_id, user_id,product_quantity) 


VALUES

('$_POST[product_id]', '$row[user_id]','$_POST[quantity]')";


if (mysqli_query ($con,$sql)) 


	echo '<script text="text/javascript">
	alert("1 record added!")
	windows.location.replace ("product.php");
	</script>';




}
if(isset($_POST['book_id'],$_POST['quantity'])){

		if(!isset($_SESSION['cart'] )){
		$_SESSION['cart']=array();
		}
		$_SESSION['cart'][$_POST['book_id']] = $_POST['quantity'];

}



?>





<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
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
		<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
</div>
		
<div class="container">
	<div class="head-top">
		<div class="logo">
			<a href="index.html"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">TPM Bookstore</a>
		</div>
<<<<<<< HEAD
		
		<div class=" h_menu4">
=======
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">TPM Bookstore</a>
				</div>
		  <div class=" h_menu4">
>>>>>>> 32a3475e343ffbe3ccf546e6b47948a07a866625
				<ul class="memenu skyblue">
					   <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
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
<!---->
		<div class="product">
			<div class="container">
														
				

				

<div class="product" style="width:100%; margin:auto; overflow:auto;">
	<div class="productflow" style="display:block;">
<?php
$sql = "SELECT * FROM inventory";
$row = mysqli_query($con, $sql);
for ($i = 0;$productshow = mysqli_fetch_array($row);$i++) {
	
	echo'<div class = "prod" style="width:30%;border:1px solid black;float:right;margin-left:5px;margin-bottom:100px;">
		 	<center>
				<img src = images/'.$productshow['product_image'].'.jpg>
					<p>'.$productshow['product_name'].'</p>
					<p>'.$productshow['product_description'].'</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>RM'.$productshow['product_price'].'</p></a>
					<br>
		
				<form method = "post" style="margin-bottom:20px;">
					<input type="hidden" name="book_id" value="'.$productshow['product_id'].'">
					<input style = "width:25px;" name = "quantity" type = "hidden" value = "1"/>
					<input type = "submit" value = "Add To Cart" style = width:185px;>
				</form>
			</center>
		</div>';
	
}

?>
		
</div>
			

				<div class="col-md-9 product1">
				<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
														
						<div class="clearfix"> </div>
				</div>
				</div>
				</div>
				
		<div class="clearfix"> </div>
			<nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
			</nav>
		</div>
		
		</div>
			
				<!---->

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
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
			