<?php

session_start();

include "conn.php";

if (isset($_POST["email"], $_POST["psw"])){

	$myusername = mysqli_real_escape_string ($con,$_POST["email"]);	
	
	$sql = "SELECT email,password FROM member WHERE email = '$myusername'";
	
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	
	$npassword = password_verify($_POST['psw'],$row['password']);
	
	mysqli_store_result($con);
	
	$count = mysqli_num_rows($result);
	
if ($npassword) { 
	$_SESSION['login_user'] = $myusername;
		
	header("location: .");
}
else {
	$error="Invalid username or password !";

}

}


?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN: TPM Bookstore</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form action="" method="post">
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<?php if (isset($_SESSION['login_user'])): ?>
						<li ><a href="login.php"  ><?php echo($_SESSION['login_user']); ?></a></li>
					<?php else: ?>
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>
					<?php endif; ?>
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
<div class="container">
		<div class="account">
		<h1>LOGIN TO YOUR ACCOUNT</h1>
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
						
			<span><a href="#" data-toggle="modal" data-target="#myModal">New? Register an account.</a><br>
			<a href="admin_login.php">Admin login?Click here.</a><br>
			<input type="submit" value="Login" style="margin-left:585px;"> </span>
		
			</form>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
          			<span>Name</span>
          			<input type="text" id="name" class="form-control">	
          </div>
          <div class="form-group">
          			<span>Phone</span>
          			<input type="tel" id="phone" class="form-control">	
          </div>

          <div class="form-group">
          			<span>Email</span>	
          			<input type="email" id="email" class="form-control">
					
          </div>
          <div class="form-group">
          			<span>Password</span>
          			<input type="password" id="password" class="form-control">	
          </div>
		  <div class="form-group">
          			<span>Address</span>
          			<input type="text" id="address" class="form-control">	
          </div>
          
        </div>
        <div class="modal-footer">
                <button id="reg" type="button" class="btn btn-default pull-left">Register</button>
          		<button type="button" class="btn btn-default pull-right"  data-dismiss="modal">Close</button>
        </div>
			<input type="hidden" id="memberid" class="form-control">	`	
      </div>
      
    </div>
  </div>
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
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
<script>
$('document').ready(function()
	{	
			//now create event to get data from fields and update in database 
			$('#reg').click(function(){
			var memberid = $('#memberid').val();	
          	var name  = $('#name').val(); 
         	var phone =  $('#phone').val();
         	var email =  $('#email').val();
         	var password =  $('#password').val();
          	var address =   $('#address').val();

			$.ajax({
					url: 'process.php',
					type: 'post',
					data: {name : name,phone : phone,email : email,password : password,address : address,id : id,},
					
					success: function(response){
							alert(response);
							$('#name').val('');
							$('#phone').val('');
							$('#email').val('');
							$('#password').val('');
							$('#address').val('');
					}
		});
	});
});    	


</script>
</html>
			