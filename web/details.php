<?php
session_start();

include "conn.php";

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
	alert("Items added to cart!")
	</script>';
}

if (isset($_POST['submit1'])){
$sqlr = "INSERT INTO feedback(product_id,member_id,comment,rating) VALUES ('$_POST[productid]','$_POST[id]','$_POST[comment]','$_POST[ratings]')";

$result23 = mysqli_query($con,$sqlr);

}


?>
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Signle :: w3layouts</title>
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
 

<script src="js/main.js"></script>
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
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>
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
			<a href="index.php" style="color:black;text-decoration:none;"><img src="images/cdlogo.png" style="width:10%;height:10%" alt="">A&C Online Shop</a>
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					   <li class="active grid"><a class="color2" href="index.php">Home</a></li>	
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
<!---->
		<div class="product">
			<div class="container">
								<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
		
<div class="col-md-9 product-price1">

	
		<div class="col-md-5 single-top">	
			</div>

					</div>	
					<div class="descrip">
						<div class="single-para ">
						
						
<script>
	function atc(i) {
		if (parseInt(document.getElementById("quantity").value) + i > 0) {
			document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + i;
		}
	}

</script>
				
						
<?php
$sql = "SELECT * FROM inventory WHERE product_id = '$_GET[book_id]'";
$row = mysqli_query($con, $sql);
$productshow = mysqli_fetch_array($row);
	
	echo'		<div class="details-item" style="width: 100%;float:left;">
					<div class="details-item-1">
					
					<img  src="images/'.$productshow['product_image'].'.jpg" class="img-responsive" alt="" style="float: left; width:300px;padding-right:50px;">
					<br>
						<h5 style="border:none;padding-left:50px;font-size:18px;color:black;">'.$productshow['product_name'].'</h5>
						<br>
						<h4 style="border:none;padding-left:50px;font-size:14px;">Price : RM '.$productshow['product_price'].'</h4>
						</div>	
						
						<br>
						<br>
						<br>
						<br>
						<br>
						<div class="details-atc" style="margin-bottom:100px;">
				<form action="" method="post" style="float:left;">
					<input onclick = "atc(-1)" type = "button" value = "-" style="width:25px;padding-right:20px;padding-left:13px;">
					
					<input style="width:50px;padding-left:18px;padding-top:8px;padding-bottom:5px;" id = "quantity" name = "quantity" type = "text" value = "1" >
					
					<input onclick = "atc(1)" type = "button" value = "+" style="width:25px;padding-right:23px;padding-left:13px;">
					
					<input type="hidden" name="book_id" value="'.$productshow['product_id'].'">
					
					<input type = "submit" value = "Add To Cart" style = width:180px;>
				</form>					
					</div>
					<div class="details-description">
					<p style="font-size:14px;width:100%;"><h5>Description</h5> <br>'.$productshow['product_description'].'</p>
					</div>
				<br>
			 	</div>		
			 </div>';
	?>				
<!--<?php
$sqlp = "SELECT * FROM member WHERE email = '$_SESSION[login_user]'";
$result22 = mysqli_query($con,$sqlp);
$row10 = mysqli_fetch_array($result22);
?>-->
				<!---->
<!-- <form method="post" >

					<div class="cd-tabs">
			<!--<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Comments</a></li>
					<li><a data-content="television" href="#0" class="selected ">Reviews</a></li>
					
					
				</ul> 
			</nav> 
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
		<textarea style="width:100%;padding:55px;" name="comment"></textarea>
		<div class="memrate">	
		</div>
		<br>
					<input type="hidden" name="id" value="<?php echo $row10['ID']; ?>">
					<input type="hidden" name="productid" value="<?php echo $_GET['book_id']; ?>">
					<select class="star-footer" name="ratings">
						<option value="1">1 (Most Worst)</option>
						<option value="2">2 (Worst)</option>
						<option value="3">3 (Bad)</option>
						<option value="4">4 (Below moderate)</option>
						<option value="5">5 (Moderate)</option>
						<option value="6">6 (Over moderate)</option>
						<option value="7">7 (Good)</option>
						<option value="8">8 (Better)</option>
						<option value="9">9 (Best)</option>
						<option value="10">10 (Superb)</option>
						</select>
						<br>
						<br>
		<input type="submit" value="submit" name="submit1">
		


		</div>

</li>


<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					
				</div>
				<div class="top-comment-right">
				
<?php 
$sql1 = "SELECT * FROM feedback INNER JOIN member ON feedback.member_id = member.ID";
$result1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($result1)){


?>			
				<p><?php echo $_SESSION['login_user']; ?> - <?php echo $row1['date']?></p>
					<p><?php echo $row1['comment'];?></p>
					<p><?php echo $row1['rating'];?></p>
				
				<?php }?>
				</div>
				<div class="clearfix"> </div>
				
			</div>

</li>

	</ul> 
</div> 
</form> -->
		
		<div class=" bottom-product"> </div>
		</div>
</div>

		<div class="clearfix"> </div>
		</div>
		
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
			</div>
		</div>

	<div class="footer-class">
		<p >© 2018 A&C Online Shop</p>
	</div>
</div>
		
</body>
</html>
			