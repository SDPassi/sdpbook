<?php

session_start();

include "conn.php";

if(isset($_POST['book_id'],$_POST['quantity'])){

		if(!isset($_SESSION['cart'] )){
		$_SESSION['cart']=array();
		}
		$_SESSION['cart'][$_POST['book_id']] = $_POST['quantity'];

}

?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>HOME: A&C Online Shop</title>
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
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">A&C Online Shop</a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  	<li class="active grid"><a class="color2" href="index.php" style="color:black;">Home</a></li>	
					   	<li><a class="color4" href="products.php">Product</a></li>	
					<?php if (isset($_SESSION['login_user'])): ?>
				      	<li><a class="color1" href="activity.php">Activity</a></li>
					  	<li><a class="color6" href="profile.php">My Account</a></li>
					<?php else: ?>
					 	<li><a class="color1" style="display: none" href="activity.php">Activity</a></li>
					 	<li><a class="color6" style="display: none" href="profile.php">My Account</a></li>
					<?php endif; ?> 	
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	<div class="banner" style = "background-color:black;">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>Books are the knowledge source from the ansions </h3>
								<p>Diverse of books have been kept safely from 2000 years ago by human ancester as books are the equipment that ancestor records their experience and used to share to the new generation.</p>
									<a href="single.php">Learn More</a>
						</div>
						
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/13.jpg" alt="">
						</div>
						</div>
		
				</li>
				<li>
					
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>There are many variations of books that all human</h3>
								<p>Consists of medication books for medic, education books such as geogoly, history, physics and programming books that helps programmer to improve themselves.</p>
									<a href="single.php">Learn More</a>
						</div>
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/27.jpg" alt="">
						</div>
						</div>
						
						
					
				</li>
				<li>
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>Knowledge is important to human and the new generation world</h3>
								<p>Humans will gain more knowledge from the books and this will improve the quality of this new generation of IT.</p>
									<a href="single.php">Learn More</a>
						</div>	
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/28.jpg" alt="">
						</div>
						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>New Arrival</h1>
		<div class="grid-in">
	
		<?php
$sql = "SELECT * FROM inventory";
$row = mysqli_query($con, $sql);
for ($i = 0;$productshow = mysqli_fetch_array($row);$i++) {
	
	echo'<div class = "prod" style="width:30%;border:1px solid black;float:left;margin-left:30px;margin-bottom:100px;">
		 	<center>

				<a href="details.php?book_id='.$productshow['product_id'].'"><img src = images/'.$productshow['product_image'].'.jpg></a>
					<p style="padding-bottom:10px;padding-top:10px;">'.$productshow['product_name'].'</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>RM'.$productshow['product_price'].'</p></a>
					<br>
		
				<form action = "products.php" method = "post" style="margin-bottom:20px;">
					<input type="hidden" name="book_id" value="'.$productshow['product_id'].'">
					<input style = "width:25px;" name = "quantity" type = "hidden" value = "1"/>
					<input type = "submit" value = "Add To Cart" style = width:185px;>
				</form>
			</center>
		</div>';
	
}

?>

						
		<div class="clearfix"> </div>
		</div>
		
		
			

								
		
	</div>
		</div>
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
		</div>
</body>
</html>
			