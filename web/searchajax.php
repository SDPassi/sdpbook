<?php
session_start();

include("conn.php");

if (isset($_SESSION['login_user'])) {
$sql1 = "SELECT ID FROM member WHERE email = '$_SESSION[login_user]'";
$result1 = mysqli_query ($con,$sql1);
$row = mysqli_fetch_array ($result1);
}

if(isset($_POST['book_id'],$_POST['quantity'])){

		if(!isset($_SESSION['cart'] )){
		$_SESSION['cart']=array();
		}
		if(isset($_SESSION['cart'][$_POST['book_id']])){
			$_SESSION['cart'][$_POST['book_id']] += $_POST['quantity'];
					}
		else{
		$_SESSION['cart'][$_POST['book_id']] = $_POST['quantity'];
		}
				
		echo '<script text="text/javascript">
	alert("1 item added to cart!")
	</script>';
}         
?>

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
							<a href="cart.php" style="padding-right:15px;"><img src="images/cart.png" alt=""/></a></h3>
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
		<a href="index.php" style="color:black;text-decoration:none;"><img src="images/cdlogo.png" style="width:10%;height:10%" alt="">A&C Online Shop</a>

				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					   <li class="active grid"><a class="color2" href="index.php" style="color:black;">Home</a></li>	
					   <li><a class="color4" href="products.php">Product</a></li>	
				<li><a class="color6" href="profile.php">My Account</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<!---->
<div class="container" style="margin-bottom:20px;">
<h2 style="color:black;padding:28px;text-align:left">Search Result</h2>
 
<?php
if(isset($_POST['proceed'])){ 
         
        $album =($_POST['search']);
        $result = mysqli_query($con,"SELECT * FROM inventory WHERE (product_name LIKE '%".$search."%') OR (product_description LIKE '%".$search."%')");
        while($show = mysqli_fetch_array($result))
        {
        	     ?>
        	     <a onclick='insert("<?php echo $show['product_name'];?>")'>
        	     <?php echo $show['product_name'];?>
        	     </a>   
        
        }     
                if($search_result = mysqli_fetch_array ($show))
                {
                           echo '<div class="container" style="width:;float:left;">
   								<a href=details.php?book_id="products/'.$search_result['product_id'].'">
								<img src="images/'.$search_result['product_image'].'.jpg"/;></a>
   								 <div class="" style="width:70%;float:right;padding-top:20px;">
		  								<h3>'.$search_result['product_name'].'</h3>   <br>
	      								<h4>RM '.$search_result['product_price'].'</h4><br>
	      								'.$search_result['product_description'].' 
	      								<br>
	          							<br>
	          							<br>
				<form method = "post" style="margin-bottom:20px;">
					<input type="hidden" name="book_id" value="'.$search_result['product_id'].'">
					<input style = "width:25px;" name = "quantity" type = "hidden" value = "1"/>
					<input type = "submit" value = "Add To Cart" style = width:185px;>
				</form>
							</div>
	
							</div>';
                            }
             
        
        else{ 
            echo '<div class="container" style="width:;float:left;">No results
            </div>';
        }
         
    }
   
?>



 
</div>
<!---->

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Product</a></li>
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
		<p >© 2018 A&C Online Shop </p>
		</div>
		</div>
</body>
</html>
			