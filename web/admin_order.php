<?php
session_start();
include("conn.php")
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN ORDER: A&C Online Shop</title>
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
						<li><a href="admin_login.php">Login</a></li>
					
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
		<h1>Order</h1>
	
		<table class="activity-table">
		<thead>
		
		<tr class="activity-table-main">
			<th>Member Name</th>
			<th>Product </th>
			<th>Quantity </th>
			<th>Price </th>
			<th>Date Purchase </th>
			<th>Status</th>
			<th></th>


		</tr>
		</thead>		
		<tbody>
	<?php
				 
 				$result = mysqli_query($con,"SELECT * FROM orders INNER JOIN member ON orders.member_id = member.id 
 				INNER JOIN orders_details ON orders.order_id = orders_details.order_id 
 				INNER JOIN inventory ON orders_details.product_id = inventory.product_id");
				while($activity = mysqli_fetch_array($result)){
	?>
	
			<input type="hidden" id="orderid" >		
			<tr id="<?php echo $activity['order_id']; ?>">
				<td data-target="membername" ><?php echo $activity['name'] ?></td>				
				<td data-target="productname" ><?php echo $activity['product_name']?> </td>
				<td data-target="orderquantity" ><?php echo $activity['order_quantity']?> </td>
				<td data-target="productprice" ><?php echo $activity['product_price']?> </td>
				<td data-target="paymentdate"><?php echo $activity['payment_date']?> </td>
				<td data-target="status"><?php echo $activity['orders_status']?> </td>
				<td>						
				<a href="#" data-role="updorders" data-id="<?php echo $activity['order_id'];?>" >Update</a>	

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
         						 <h4 class="modal-title">Update Order</h4>

                			</div>
        				<div class="modal-body">
        					
        					<div class="form-group">
          						<span>Member Name</span>
          					     <input type="text" id="membername" class="form-control" disabled="disabled">	
          					</div>
          					<div class="form-group">
          						<span>Product Name</span>
          					     <input type="text" id="productname" class="form-control" disabled="disabled">	
          					</div>

          					<div class="form-group">
          						<span>Order Quantity</span>	
          						<input type="text" id="orderquantity" class="form-control" disabled="disabled">	
          					</div>
          					<div class="form-group">
          						<span>Price</span>
          					    <input type="text" id="productprice" class="form-control" disabled="disabled">	
          					</div>
          					<div class="form-group">
          						<span>Payment Date</span>	
          						<input type="text" id="paymentdate" class="form-control" disabled="disabled">	
          					</div>
          					<div class="form-group">
          						<span>Order Status</span>
          						<select id="stat"  >
									<option value="Processing">Processing</option>
									<option value="Successful">Successful</option>
									<option value="Cancel">Cancel</option>
						
								</select> 
          						<input type="text" id="status" class="form-control"  disabled="disabled" >	
          						
							</div>
							
          					<input type="hidden" id="orderid" class="form-control">							        				
          				</div>
          				
        				<div class="modal-footer">
        					<button id="modify" type="button" class="btn btn-default pull-left">Done</button>
          					<button type="button" class="btn btn-default pull-right"  data-dismiss="modal">Close</button>
        				</div>
      					</div>
      
    						</div>
  						</div>		


		
		
		<div class="activity-button">
		<form action="admin_printorder.php">
							
							<input  type="submit" value="Print" style="float:right;margin-left:10px;background:#EF5F21;width:auto;font-size: 1.1em;
							padding: 0.4em 0.8em;text-align: center;color: #fff;border: none;outline: none;-webkit-appearance: none;">
							
							</form>			

		</div>
		</div>

		</div>
			<div class="clearfix"> </div>
	

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
<script type="text/javascript">
         $('#stat').change(function () {
            var option_value = $(this).val();
            $('#status').val(option_value);
        });
        
$(document).ready(function()
	{
		//append value in input fields
		 $(document).on('click','a[data-role=updorders]',function()
		{
			
			var id = $(this).data('id');
			var membername = $('#'+id).children('td[data-target=membername]').text();
			var productname = $('#'+id).children('td[data-target=productname]').text();
			var orderquantity = $('#'+id).children('td[data-target=orderquantity]').text();
			var productprice = $('#'+id).children('td[data-target=productprice]').text();
			var paymentdate = $('#'+id).children('td[data-target=paymentdate]').text();
			var status = $('#'+id).children('td[data-target=status]').text();
			$('#membername').val(membername);
			$('#productname').val(productname);
			$('#orderquantity').val(orderquantity);
			$('#productprice').val(productprice);
			$('#paymentdate').val(paymentdate);
			$('#status').val(status);
			$('#myModal').modal('toggle');
			
		//now create event to get data from fields and update in database 

			$('#modify').click(function(){
          	var orderid  = $('#orderid').val(); 
         	var membername =  $('#membername').val();
         	var productname =  $('#productname').val();
         	var orderquantity =  $('#orderquantity').val();
          	var productprice =   $('#productprice').val();
          	var paymentdate = $('#paymentdate').val();
			var status = $('#status').val();
			
          $.ajax({
              url      : 'ajax_orders.php',
              method   : 'post', 
              data     : {membername : membername , productname: productname , orderquantity: orderquantity , productprice : productprice , paymentdate : paymentdate, status : status, id: id},
              success  : function(response){
                            // now update user record in table 
                            $('#'+id).children('td[data-target=membername]').text(membername);
                            $('#'+id).children('td[data-target=productname]').text(productname);
                            $('#'+id).children('td[data-target=orderquantity]').text(orderquantity);            
                            $('#'+id).children('td[data-target=productprice]').text(productprice);
                            $('#'+id).children('td[data-target=paymentdate]').text(paymentdate);
                            $('#'+id).children('td[data-target=status]').text(status);
                            $('#myModal').modal('toggle');
							//alert(id);
                }
          });
       });
		
		})
	});
		        
</script>

</html>
			