<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ORDER: TPM Bookstore</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />	
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

	
<!--content-->
<div class="container">
		<div class="account">
		<h1>ORDER</h1>
		<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>ID </th>
			<th>Product </th>
			<th>Quantity </th>
			<th>Price</th>
		</tr>	
		<?php
				 
 				$result = mysqli_query($con,"SELECT * FROM orders INNER JOIN member ON orders.member_id = member.id 
 				INNER JOIN orders_details ON orders.order_id = orders_details.order_id 
 				INNER JOIN inventory ON orders_details.product_id = inventory.product_id
 				INNER JOIN feedback ON inventory.product_id = feedback.product_id");
				while($activity = mysqli_fetch_array($result)){
	?>

			
			<tr>
			<td id="member_name"><?php echo $activity['name'] ?></td>
			<td><?php echo $activity['product_name'] ?></td>
			<td><?php echo $activity['product_quantity']?> </td>
			<td><?php echo $activity['product_price']?> </td>
			<td><?php echo $activity['payment_date']?> </td>
			<td>
		
				<select name="status"><option value="Processing">Processing</option>
						<option value="Successful">Successful</option>
						<option value="Cancel">Cancel</option>
				</select>
			
 			</td>
 			
			</tr>
					
		<?php }?> 
		</tbody>
		
		
		
		</table>
				
		</div>
		</div>
		
		
	<div class="clearfix"> </div>
	

<!--//content-->
<script>window.print();</script>
</body>
</html>
			