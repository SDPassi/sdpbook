<?php
include("conn.php");

if (isset($_POST['First_Name'],$_POST['Phone_Number'],$_POST['Email_Address'],$_POST['Password'],$_POST['Confirm_Password'],$_POST['Address'])) { 


$sql = "INSERT INTO member(name, phone, email, password, address)

VALUES

('$_POST[First_Name]', '$_POST[Phone_Number]','$_POST[Email_Address]','$_POST[Password]','$_POST[Confirm_Password]','$_POST[Address]')";


if (!mysqli_query($con,$sql))
{
mysqli_close($con);
die ('Error:'.mysqli_error($con));
}
echo'<script text="text/javascript">
alert("You have successfully registered!")
window.location.replace ("login.php");
</script>';
}
?>


<!DOCTYPE html>
<html>
<head>
<title>REGISTER: TPM Bookstore</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript">
	function checkEqualPassword(input1, input2) {
    if (input1.value !== input2.value) {
        input2.setCustomValidity('Passwords does not match.');
    } else {
        // input is valid -- reset the error message
        input2.setCustomValidity('');
    }
}
</script>

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
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>
						<li>
</li>

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
					   <li class="active grid"><a class="color8" href="index.html">Home</a></li>	
				     <li><a class="color1" href="activity.html">Activity</a></li>
					<li><a class="color4" href="products.html">Product</a> 	
			    </li>					
				<li><a class="color6" href="contact.html">Profile</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class=" container">
<div class=" register" >
	<h1>Register an account</h1>
		  	  <form> 
				 <div class="col-md-6 register-top-grid"style="margin-left:270px;">
					<h3>Personal infomation</h3>
					 <div>
						<span>First Name</span>
						<input name="name" type="text" required="required"> 
					 </div>
					 <div>
						<span>Phone Number</span>
						<input name="num" type="tel" required="required"> 
					 </div>
					 <div>
						 <span>Email Address</span>
						 <input name="email" type="email" required="required"> 
					 </div>
					 <div>
								<span>Password</span>
								<input name="psw"  id="pass1" onchange="checkEqualPassword(this, document.getElementById('pass2'));" type="password" min="4" required="required" >
							 </div>
							 <div>
								<span>Confirm Password</span>
								<input name="psw"  id="pass2" onchange="checkEqualPassword(document.getElementById('pass1'), this);" type="password" min="4" required="required">
							 </div>
					<div>
						<span>Address</span>
						<input name="address" type="text" required="required"> 
					 </div>
		 
					 <input type="submit" value="Register">
					 <input type="reset" value="Reset" style="float:right;">		 
					 </div>							 
							
							
					<div class="clearfix"> </div>
				</form>
			</div>
</div>
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
			