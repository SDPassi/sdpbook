<?php
session_start();
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
<title>HOME: Technology Park Malaysia Bookstore</title>
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
						<li ><a href="profile.php"  ><?php echo($_SESSION['login_user']); ?><a href="logout.php">(LOGOUT)</a></li>
						
					<?php else: ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					<?php endif; ?>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
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
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
				      <li><a class="color1" href="activity.php">Activity</a></li>
				    <li class="grid"><a class="color2" href="order.php">Order</a></li>
					<li><a class="color4" href="products.php">Product</a> 	
			    </li>		
				<li><a class="color6" href="contact.php">Profile</a></li>
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
									<a href="single.html">Learn More</a>
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
									<a href="single.html">Learn More</a>
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
									<a href="single.html">Learn More</a>
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
		<h1>OUR PRODUCTS</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/16.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Basic Constal Engineering</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="single.html">Popular</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/17.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>C Programming to beginners</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">Top Sales</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/18.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Software Development Techniques</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">New Arrival</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/19.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>The effective engineer</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">Must Get</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/20.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Journey to the West</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">Top Rate</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/21.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>History is all you left me</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">Recommended</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<!----->
	
	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/23.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/24.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/25.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/26.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	</div>
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
			