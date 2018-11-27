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
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--  <script src="jquery.min.js"></script> -->
<script src="bootstrap.min.js"></script>

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
			<th>Product </th>
			<th>Description</th>
			<th>Quantity </th>
			<th>Price</th>
			<th>Product Image</th>
			<th></th>
		</tr>	
		
		
		</thead>		
		<tbody>
			<?php
				 
 				$result = mysqli_query($con,"SELECT * FROM inventory");
 				while($order = mysqli_fetch_array($result)){
			?>
				<tr id="<?php echo $order['product_id']; ?>">
				<td data-target="productname" ><?php echo $order['product_name'] ?></td>				
				<td data-target="productdescription" ><?php echo $order['product_description']?> </td>
				<td data-target="productquantity" ><?php echo $order['product_quantity']?> </td>
				<td data-target="productprice" ><?php echo $order['product_price']?> </td>
				<td data-target="productimage"><?php echo $order['product_image']?> </td>
				<td>
				<a href="#" data-role="update" data-id="<?php echo $order['product_id'];?>" >Modify</a>	
				</td>
			</tr>
			
					
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
        					
        					<div class="form-group">
          						<span>Product Name</span>
          					     <input type="text" id="productname" class="form-control">	
          					</div>
          					<div class="form-group">
          						<span>Product Description</span>
          					     <input type="text" id="productdescription" class="form-control">	
          					</div>

          					<div class="form-group">
          						<span>Quantity</span>	
          						<input type="text" id="productquantity" class="form-control">	
          					</div>
          					<div class="form-group">
          						<span>Price</span>
          					    <input type="text" id="productprice" class="form-control">	
          					</div>
          					<div class="form-group">
          						<span>Image</span>	
          						<input type="text" id="productimage" class="form-control">	
          					</div>
          					<input type="hidden" id="productid" class="form-control">							        				
          				</div>
        				<div class="modal-footer">
        					<button id="modify" type="button" class="btn btn-default pull-left">Done</button>
          					<button type="button" class="btn btn-default pull-right"  data-dismiss="modal">Close</button>
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
			
			var id = $(this).data('id');
			var productname = $('#'+id).children('td[data-target=productname]').text();
			var productdescription = $('#'+id).children('td[data-target=productdescription]').text();
			var productquantity = $('#'+id).children('td[data-target=productquantity]').text();
			var productprice = $('#'+id).children('td[data-target=productprice]').text();
			var productimage = $('#'+id).children('td[data-target=productimage]').text();
			
			$('#productname').val(productname);
			$('#productdescription').val(productdescription);
			$('#productquantity').val(productquantity);
			$('#productprice').val(productprice);
			$('#productimage').val(productimage);
			$('#myModal').modal('toggle');
			
		//now create event to get data from fields and update in database 

			$('#modify').click(function(){
          	var productid  = $('#productid').val(); 
         	var productname =  $('#productname').val();
         	var productdescription =  $('#productdescription').val();
         	var productquantity =  $('#productquantity').val();
          	var productprice =   $('#productprice').val();
          	var productimage = $('#productimage').val();

          $.ajax({
              url      : 'ajax_admin.php',
              method   : 'post', 
              data     : {productname : productname , productdescription: productdescription , productquantity: productquantity , productprice : productprice , productimage : productimage, id: id},
              success  : function(response){
                            // now update user record in table 
                            $('#'+id).children('td[data-target=productname]').text(productname);
                            $('#'+id).children('td[data-target=productdescription]').text(productdescription);
                            $('#'+id).children('td[data-target=productquantity]').text(productquantity);            
                            $('#'+id).children('td[data-target=productprice]').text(productprice);
                            $('#'+id).children('td[data-target=productimage]').text(productimage);
                            $('#myModal').modal('toggle');
							
							

                         }
          });
       });
		
		})
	});

</script>

</html>
			