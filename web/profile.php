<?php

session_start();

include "conn.php";

if (isset($_POST['name'],$_POST['num'],$_POST['email'],$_POST['address'])) { 

$sql2 = 

"UPDATE member SET name = '$_POST[name]', phone = '$_POST[num]', email = '$_POST[email]', address = '$_POST[address]' WHERE email = '$_SESSION[login_user]'";

mysqli_query($con,$sql2);

echo'<script text="text/javascript">
alert("Your profile is updated!")
windows.location.replace ("profile.php");
</script>';
}

if (isset($_SESSION['login_user'])) {

$sql = "SELECT * FROM member WHERE email =  '$_SESSION[login_user]'";

$result = mysqli_query ($con,$sql);

$row = mysqli_fetch_array ($result);
}


?>
<!DOCTYPE html>
<html>
<head>
<title>MY ACCOUNT: A&C Online Shop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- self add query-->
<!-- <script type="text/javascript">
	function checkEqualPassword(input1, input2) {
    if (input1.value !== input2.value) {
        input2.setCustomValidity('Passwords does not match.');
    } else {
        // input is valid -- reset the error message
        input2.setCustomValidity('');
    }
}
</script> -->
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
<div class="contact">
			
			<div class="container">
				<h1>MY ACCOUNT</h1>
				
				<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>Name </th>
			<th>Phone Number</th>
			<th>Email Address </th>
			<th>Address</th>
			<th></th>
		</tr>	
		
		
		</thead>		
		<tbody>
			
				<tr id="<?php echo $row['ID']; ?>">
				<td data-target="name" ><?php echo $row['name'] ?></td>				
				<td data-target="num" ><?php echo $row['phone']?> </td>
				<td data-target="email" ><?php echo $row['email']?> </td>
				<td data-target="address" ><?php echo $row['address']?> </td>
				<td>
				<a href="#" data-role="update" data-id="<?php echo $row['ID'];?>" >Modify</a>	
				</td>
			</tr>
			
					
	

		</tbody>
		

		</table>
				<!-- <form method="post">
			<div class="col-md-6 register-top-grid"style="margin-left:270px;">
					<div>
						<span>Name</span>
						<input id="name" name="name" type="text" value="<?php echo $row['name']?>" required="required"> 
					 </div>
					 <div>
						<span>Phone Number</span>
						<input id="num" name="num" type="tel" value="<?php echo $row['phone']?>" required="required"> 
					 </div>
					 <div>
						 <span>Email Address</span>
						 <input id="email" name="email" type="email" value="<?php echo $row['email']?>" required="required"> 
					 </div>
					 <div>
						<span>Address</span>
						<input id="address" name="address" type="text" value="<?php echo $row['address']?>" required="required"> 
						
						
					 </div>
					 <div class="send">
							 <input id="id"type="submit" value="Update" style="float:right;"> 
							<a href="chgpsw.php">Change Password</a>
						</div>	
					 </div>
					</form>
								<div class="clearfix"> </div> -->
								
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
          						<span>Name</span>
          					     <input type="text" id="productname" class="form-control">	
          					</div>
          					<div class="form-group">
          						<span>Phone Number</span>
          					     <input type="text" id="productdescription" class="form-control">	
          					</div>

          					<div class="form-group">
          						<span>Email Address</span>	
          						<input type="text" id="productquantity" class="form-control">	
          					</div>
          					<div class="form-group">
          						<span>Address</span>
          					    <input type="text" id="productprice" class="form-control">	
          					</div>						        				
          				</div>
        				<div class="modal-footer">
        					<button id="modify" type="button" class="btn btn-default pull-left">Update</button>
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

<script>
	$(document).ready(function()
	{
		//append value in input fields
		 $(document).on('click','a[data-role=update]',function()
		{
			
			var id = $(this).data('id');
			var name = $('#'+id).children('td[data-target=name]').text();
			var num = $('#'+id).children('td[data-target=num]').text();
			var email = $('#'+id).children('td[data-target=email]').text();
			var address = $('#'+id).children('td[data-target=address]').text();
			
			$('#name').val('name');
			$('#num').val('num');
			$('#email').val('email');
			$('#address').val('address');
			$('#myModal').modal('toggle');
		//now create event to get data from fields and update in database 

			$('#modify').click(function(){
          	var name  = $('#name').val(); 
         	var num =  $('#num').val();
         	var email =  $('#email').val();
         	var address =  $('#address').val();
			alert(name);
          $.ajax({
              url      : 'profile.php',
              method   : 'post', 
              data     : {name : name , num : num , email : email , address : address, id: id},
              success  : function(response){
                            // now update user record in table 
                            $('#'+id).children('td[data-target=name]').text(name);
                            $('#'+id).children('td[data-target=num]').text(num);
                            $('#'+id).children('td[data-target=email]').text(email);            
                            $('#'+id).children('td[data-target=address]').text(address);
							$('#myModal').modal('toggle');
							alert(id);
                }
          });
       });
		
		})
	});

</script>



</html>
			