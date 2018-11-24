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
<script src="jquery.min.js"></script>
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
	
<!-- contain -->
<div class="container">
		<div class="account">
		<h1>Stock</h1>
		<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>Product </th>
			<th>Quantity </th>
			<th>Price</th>
			<th>Product Image</th>
			<th></th>
		</tr>	
		
		
		</thead>		
		<tbody>
		<?php
          $table  = mysqli_query($con ,'SELECT * FROM inventory');
          while($order  = mysqli_fetch_array($table)){ 
       ?>
       		<tr id="<?php echo $order['product_id']; ?>">
				<td data-target="product_name" id="product_name"><?php echo $order['product_name'] ?></td>
				<td data-target="product_quantity" id="product_quantity"><?php echo $order['product_quantity']?> </td>
				<td data-target="product_price" id="product_price"><?php echo $order['product_price']?> </td>
				<td data-target="product_image" id="product_image"><?php echo $order['product_image']?> </td>
				<td>
				<a href="#" data-role="update" data-id="<?php echo $order['product_id'];?>" >Modify</a>	
				</td>
			</tr>
   			
		<?php }?> 
		</tbody>
		</table>
		</div>
</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" id="product_name" class="form-control">
              </div>
              <div class="form-group">
                <label>Quantity</label>
                <input type="text" id="product_quantity" class="form-control">
              </div>

               <div class="form-group">
                <label>Price</label>
                <input type="text" id="product_price" class="form-control">
              </div>
              
              <div class="form-group">
                <label>Image</label>
                <input type="text" id="product_image" class="form-control">
              </div>

                <input type="hidden" id="productId" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Modify</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

</body>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var product_name  = $('#'+id).children('td[data-target=product_name]').text();
            var product_quantity  = $('#'+id).children('td[data-target=product_quantity]').text();
            var product_price  = $('#'+id).children('td[data-target=product_price]').text();
            var product_image  = $('#'+id).children('td[data-target=product_image]').text();

            $('#product_name').val(product_name);
            $('#product_quantity').val(product_quantity);
            $('#product_price').val(product_price);
            $('#product_image').val(product_image);
            $('#product_Id').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#productId').val(); 
          var product_name =  $('#product_name').val();
          var product_quantity =  $('#product_quantity').val();
          var product_price =   $('#product_price').val();
          var product_image =   $('#product_image').val();


          $.ajax({
              url      : 'admin_updatestock.php',
              method   : 'post', 
              data     : {product_name : product_name , product_quantity: product_quantity , product_price : product_price , product_image : product_image, id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=product_name]').text(product_name);
                             $('#'+id).children('td[data-target=product_quantity]').text(product_quantity);
                             $('#'+id).children('td[data-target=product_price]').text(product_price);
                             $('#'+id).children('td[data-target=product_image]').text(product_image);                             
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>



</html>
