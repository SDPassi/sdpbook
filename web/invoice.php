<?php

session_start();

include "conn.php";



?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN ORDER: TPM Bookstore</title>
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
<!--content-->	
<div class="cart">
<div class="container">
	<div class="check">	 
			 <h1>Order Summary</h1>
		 <div class="col-md-9 cart-items" style="background-color:white;">
			
			 <div class="cart-header">
				
				 <div class="cart-sec simpleCart_shelfItem">
<?php
if(isset($_SESSION['cart'])){
$total = 0;
foreach($_SESSION['cart'] as $book_id => $carts){
$sql = "SELECT * FROM inventory WHERE product_id = $book_id";


$result1 = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result1)) {

$subtotal = $carts * $row['product_price'] ;
$total += $subtotal;
				
				echo '<div class="cart-item cyc" style="width: 100%; border-bottom: groove;margin-top:40px;margin-bottom:30px;">
					   <div style="float: left;padding-left:100px;padding-bottom:100px;" class="cart-item-info">
						<h3>'.$row['product_name'].'<span>RM '.$subtotal.'</span></h3>
						<ul class="qty">
							<li><p>Qty : '.$carts.'</p></li>
							<br>
							<br>
						</ul>
						<br>
		        </div>	
			 </div> ';		
	}
		
}
}

?>
</div>
</div>
</div>
</div>



				<br>	
				
<?php
if (isset($_SESSION['login_user'])) {
$sql1 = "SELECT * FROM member WHERE email = '$_SESSION[login_user]'";


$result4 = mysqli_query($con, $sql1);



$row1 = mysqli_fetch_array($result4);
}

?> 
		  <div class="col-md-3 cart-total" style="width:100%;">
		  
		  <br>
						 <div class="price-details">
				 <h3>Personal Details</h3>		 
				 
				 <span>Name:</span>
				 <span>Email:</span>
				 <br>
				 <span class="details"><b><?php echo $row1['name'] ?></b></span>
				 <span class="details"><b><?php echo $row1['email'] ?></b></span>
				
				 <span>Contact Number:</span>
				 <span>Shipping Address:</span>
				 <br>
				 <span class="total1"><b><?php echo $row1['phone'] ?></b></span>
				 <span class="total1"><b><?php echo $row1['address'] ?></b></span>

	
 					<br><br>
				
		   <div class="clearfix"></div>				 
			 </div>	
			 <br>
			 <div class="price-details">
			  <h3>Price Details</h3>
			 	<span class="last_price">
			 	<span><h6>TOTAL: RM <?php $total1 = $total -$_POST['cars'];echo $total1; ?></h6></span>
			 	<br>
			 	<br>
			 	<span><h6 style="color:green;">DELIVERY: FREE</h6></span>

			 	</span>	
			 <div class="clearfix"> </div>
			 </div>
			
			 
			 <div class="clearfix"></div>
			<form method="post">
			 <div class="total-item" style="margin-top:50px;">

				 <div class="order">
				 <input type="hidden" name="id" value="<?php echo $row1['ID']; ?>"/>
				 <input type="hidden" name="post" value="<?php echo $total1; ?>"/>
				 <input type="hidden" name="cars" value="<?php echo $_POST['cars']?>" />
				 <input type="hidden" name="submit">
				 </div>
			</div>
			</form>

			</div>   
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


		<script>window.print();</script>	
</body>

</html>
			