<?php

session_start();

include "conn.php";

if (isset($_POST["email"], $_POST["psw"])){

	$myusername = mysqli_real_escape_string ($con,$_POST["email"]);	
	
	$mypassword = mysqli_real_escape_string ($con,$_POST["psw"]);	

	
	$sql = "SELECT admin_email,admin_password FROM admin WHERE admin_email = '$myusername'AND admin_password =$mypassword";
	
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	
	mysqli_store_result($con);
	
	$count = mysqli_num_rows($result);
	
if($count ==1) { 
	$_SESSION['login_user'] = $myusername;
		
	header("location: admin_index.php");
}
else {
	$error="Invalid username or password !";

}

}


?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login: A&C Onllne Shop</title>
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
						<li ><a href="admin_login.php"  ><?php echo($_SESSION['login_user']); ?></a></li>
					<?php else: ?>
						<li ><a href="admin_login.php"  >Admin Login</a></li>
					<?php endif; ?>
					</ul>
					
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="admin_index.php" style="color:black;text-decoration:none"><img src="images/cdlogo.png" style="width:10%;height:10%" alt="" >Admin</a>	
				</div>
		  <div class=" h_menu4">
			<ul class="memenu skyblue">
				<li class="active grid"><a class="color8" href="admin_index.php">Main</a></li>
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
		<h1>Admin Login</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top" style="margin-left:200px;">
		<center>
		<h4 style="color:red;"><?php if (isset($error)) echo $error; ?></h4>
		</center>
			<form method="post">
				
			<div > 	
				<span>Email Address</span>
				<input name="email" type="email"  required="required" > 
			</div>
			
			<div> 
				<span >Password</span>
				<input name="psw" type="password" min="4" required="required" >
			</div>	
						
			<span>
			
			<input type="submit" value="Login" style="margin-left:585px;"> </span>
		
			</form>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

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
			