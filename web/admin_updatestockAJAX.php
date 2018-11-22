<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>STOCK: A&C Online Shop</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
						<li ><a href="admin_profile.php"  ><?php echo($_SESSION['login_user']); ?><a href="logout.php">(LOGOUT)</a></li>
						
					<?php else: ?>
						<li ><a href="login.php"  >Login</a></li>
						
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
				<li class="active grid"><a class="color2" href="admin_index.php" style="color:black;">Main</a></li>
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
		<h1>Stock</h1>
		<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>ID </th>
			<th>Product </th>
			<th>Quantity </th>
			<th>Price</th>
			<th>Product Image</th>
			<th></th>
		</tr>	
		<?php
				 
 				$result = mysqli_query($con,"SELECT * FROM inventory");
 				while($order = mysqli_fetch_array($result)){
		?>
		
		</thead>		
		<tbody>
		
			<!-- <form action="" method="post"> -->
			<tr id="<?php echo $order['product_id']; ?>">
				<td data-target="productid" id="productid"><?php echo $order['product_id'] ?></td>
				<td data-target="productname" id="productname"><?php echo $order['product_name'] ?></td>
				<td data-target="productquantity" id="productquantity"><?php echo $order['product_quantity']?> </td>
				<td data-target="productprice" id="productprice"><?php echo $order['product_price']?> </td>
				<td data-target="productimage" id="productimage"><?php echo $order['product_image']?> </td>
				<td>
				<a href="#" data-role="update" data-id="<?php echo $order['product_id'];?>" >Modify</a>	
				</td>
			</tr>
			<!-- </form> -->	
					
		<?php }?> 

		</tbody>
		

		</table>
<!--BoostStrap-->
				
  					<!-- Modal -->
  						<div class="modal fade" id="myModal" role="dialog">
    						<div class="modal-dialog">
    
     				<!-- Modal content-->
      					<div class="modal-content">
        					<div class="modal-header">
         						 <button type="button" class="close" data-dismiss="modal">&times;</button>
         						 <h4 class="modal-title">Modify Stock</h4>

                			</div>
        				<div class="modal-body">
        					<div class="StockUpdate">
          						<span>Product Name</span>
          					</div>
          					<div>	
          						<input type="text" id="productname" class="stockudp">	
          					</div>
          					<div class="StockUpdate">
          						<span>Quantity</span>
          					</div>	
          					<div>	
          						<input type="text" id="productquantity" class="stockudp">	
          					</div>
          					<div class="StockUpdate">
          						<span>Price</span>
          					</div>
          					<div>	
          						<input type="text" id="productprice" class="stockudp">	
          					</div>
          					<div class="StockUpdate">
          						<span>Image</span>
          					</div>
          					<div>	
          						<input type="text" id="productimage" class="stockudp">	
          					</div>							        				
          				</div>
        				<div class="modal-footer">
        					<button type="button" class="btn btn-default pull-right">Done</button>
          					<button type="button" class="btn"  data-dismiss="modal">Close</button>
        				</div>
      					</div>
      
    						</div>
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

<script>
	$(document).ready(function()
	{
		//append value in input fields
		 $(document).on('click','a[data-role=update]',function()
		{
			var id = $(this).data('product_id');
			var productname = $('#'+ product_id).children('td[data-target=productname]').text();
			var productquantity = $('#'+ product_id).children('td[data-target=productquantity]').text();
			var productprice = $('#'+ product_id).children('td[data-target=productprice]').text();
			var productimage = $('#'+ product_id).children('td[data-target=productimage]').text();
			
			$('#productname').val(productname);
			$('#productquantity').val(productquantity);
			$('#productprice').val(productprice);
			$('#productimage').val(productimage);
			$('#myModal').modal('toggle');
					
		})
	});

</script>

</html>
			