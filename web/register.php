<?php

session_start();

include("conn.php");

 if (isset($_POST['name'],$_POST['num'],$_POST['email'],$_POST['psw'],$_POST['address'])) { 
$npassword = password_hash($_POST['psw'],PASSWORD_DEFAULT);

$check = mysqli_query($con, "SELECT email,name FROM member WHERE email = '".$_POST['email']."' and name ='". $_POST['name']."'");
$checkrows = mysqli_num_rows($check);

if ($checkrows > 0){
echo '<script text="text/javascript">
alert("Member exists!")
</script>';
}

else{
$sql = "INSERT INTO member(name, phone, email, password, address) VALUES ('$_POST[name]', '$_POST[num]','$_POST[email]','$npassword','$_POST[address]')";

$result = mysqli_query($con,$sql);

mysqli_close($con);

echo'<script text="text/javascript">
alert("You have successfully registered!")
window.location.replace ("login.php");
</script>';
}

}


?>


<!DOCTYPE html>
<html>
<head>
<title>REGISTER: A&C Online Shop</title>
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
<script src="../jquery.min.js"></script>
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
						<li><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>
						<li>
</li>

					</ul>
					<div class="cart box_1">
						<a href="cart.php">
						<h3> <div class="total">
							</div>
							<img src="images/cart.png" alt=""/></h3>
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
				<a href="index.php"><img src="images/cdlogo.png" style="width:10%;height:10%" alt="">A&C Online Shop</a>
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php" style="color:black;">Home</a></li>
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

	
<!--content-->
<div class=" container">
<div class=" register" >
	<h1>CREATE AN ACCOUNT</h1>
		  	  <form action="" method="post"> 
				 <div class="col-md-6 register-top-grid"style="margin-left:270px;">
					<h3>Personal information</h3>
					 <div>
						<span>Name</span>
							<input id="name" name="name" type="text" required="required"> 
					 </div>
					 <div>
						<span>Phone Number</span>
							<input id="phone" name="num" type="tel" required="required"> 
					 </div>
					 <div>
						 <span>Email Address</span>
						 	<input id="email" placeholder="Email" name="email" type="email" required="required"> 
							<span id="msg"></span>
					 </div>
					 <div>
						<span>Password</span>
							<input id="password" name="psw"  onchange="checkEqualPassword(this, document.getElementById('pass2'));" type="password" min="4" required="required" >
					</div>
					<div>
						<span>Confirm Password</span>
							<input name="cpsw" id="pass2" onchange="checkEqualPassword(document.getElementById('password'), this);" type="password" min="4" required="required">
					</div> 
					<div>
						<span>Address</span>
						<input id="address" name="address" type="text" required="required"> 
					 </div>
		 
					 <input type="submit" id="reg" value="Register">
					 <input type="reset" value="Reset" style="float:right;">		 
					 </div>							 
					 <div id="error_msg"></div>
							
							
					<div class="clearfix"> </div>
				</form>
			</div>
</div>

<?php 
mysqli_close($con); 
?>

<!--//content-->
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
		<p >© 2018 A&C Online Shop</p>
		</div>
		</div>
</body>



</html>
			