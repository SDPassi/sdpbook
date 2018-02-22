<?php

session_start();

include "conn.php";

if (isset($_SESSION['login_user'])) {
;

$sql1 = "SELECT password FROM member WHERE email = '$_SESSION[login_user]'";

$result = mysqli_query ($con,$sql1);

$row = mysqli_fetch_array ($result);

}
if (isset($_POST['opsw'],$_POST['psw'])){
if (password_verify($_POST['opsw'],$row['password'])) { 
$npassword = password_hash($_POST['psw'],PASSWORD_DEFAULT);
$sql = 
"UPDATE member SET password = '$npassword' WHERE email = '$_SESSION[login_user]'";
$a = mysqli_query($con,$sql);

echo'<script text="text/javascript">
alert("New password updated!");
window.location.replace ("index.php");
</script>';

}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PROFILE : TPM Bookstore</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- self add query-->
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
						<?php if (isset($_SESSION['login_user'])): ?>
						
						<li class="dropdown"><a href="#"><?php echo($_SESSION['login_user']); ?></a>
						<div class="dropdown-content">
							<a href="order.php">My Purchase</a>
							<a href="logout.php">Logout</a>
						
						</div>
						
						</li>

					<?php else: ?>
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>
					<?php endif; ?>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
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
					<a href="index.html"><img src="images/bookicon.png" style="width:10%;height:10%" alt="">TPM Bookstore</a>	
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					   <li class="active grid"><a class="color8" href="index.php" style="color:black;">Home</a></li>	
				      <li><a class="color1" href="activity.php">Activity</a></li>
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
<div class="contact">
			
			<div class="container">
				<h1>Change Password</h1>
				<form method="post">
			<div class="col-md-6 register-top-grid"style="margin-left:270px;">
					 <div>
						<span>Password</span>
						<input name="opsw"  id="oldpassword" type="password" value="" min="4" required="required" >
					 </div>
					 
					 <div>
						<span>New Password</span>
						<input name="psw"  id="pass1" onchange="checkEqualPassword(this, document.getElementById('pass2'));" type="password" min="4" required="required" >
					 </div>
					 
					<div>
						<span>Confirm Password</span>
						<input name="cpsw"  id="pass2" onchange="checkEqualPassword(document.getElementById('pass1'), this);" type="password" min="4" required="required">
					</div>
										 
					 <div class="send">
						<input type="submit" value="Update" style="float:right;">
						<input type="reset" value="Reset" style="float:left;">		 
					</div>	
		 
			 </div>
				</form>
				
				<div class="clearfix"> </div>
			
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
			