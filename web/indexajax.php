<?php

session_start();

include "conn.php";

if(isset($_POST['book_id'],$_POST['quantity'])){

		if(!isset($_SESSION['cart'] )){
		$_SESSION['cart']=array();
		}
		$_SESSION['cart'][$_POST['book_id']] = $_POST['quantity'];

}

?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
						<input type="text" id="search" placeholder="Search Here" >
						<input type="button" id="btnSearch" value="Go" >
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

	<div class="banner" style = "background-color:black;">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>Cosmic Girls</h3>
								<p>South Korean-Chinese girl group formed by Starship Entertainment and Yuehua Entertainment. The group debuted on February 25, 2016 with the extended play Would You Like? and with twelve members: Seola, Xuanyi, Bona, Exy, Soobin, Luda, Dawon, Eunseo, Cheng Xiao, Meiqi, Yeoreum and Dayoung. In July 2016, Cosmic Girls added a thirteenth member, Yeonjung, to the group.</p>
									<a href="products.php">Learn More</a>
						</div>
						
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/wjsn.jpg_large" alt="">
						</div>
						</div>
		
				</li>
				<li>
					
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>BTS</h3>
								<p>also known as the Bangtan Boys, is a seven-member South Korean boy band formed by Big Hit Entertainment. The name subsequently became a backronym for Beyond The Scene. On June 12, 2013, they performed the song "No More Dream" from their initial album 2 Cool 4 Skool [4] to commemorate their debut on June 13, 2013.[5] They won several New Artist of the Year awards for the track "No More Dream", including at the 2013 Melon Music Awards and Golden Disc Awards and the 2014 Seoul Music Awards.</p>
									<a href="products.php">Learn More</a>
						</div>
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/BTS.jpg" alt="">
						</div>
						</div>			
				</li>
				<li>
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>Rocket Girls 101</h3>
								<p>an eleven-member Chinese idol girl group formed by Tencent through the 2018 reality show Produce 101 China on Tencent Video. They made their debut on 23 June 2018. The members participated as trainees in the show Produce 101 before debuting as members of Rocket Girls 101 on 23 June. The group includes members, Meng Meiqi and Wu Xuanyi, Yang Chaoyue, Duan Aojuan, Yamy, Lai Meiyun, Zhang Zining, Sunnee, Li Ziting, Fu Jing and Xu Mengjie.</p>
									<a href="products.php">Learn More</a>
						</div>	
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/101.jpeg" alt="">
						</div>
						</div>
					
				</li>
				
				<li>
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>Joker Xue</h3>
								<p>formerly known as Jacky Xue, is a Chinese singer, songwriter, record producer, actor, and television host. songwriter, record producer, actor, and television host.
This section does not cite any sources. Please help improve this section by adding citations to reliable sources. Unsourced material may be challenged and removed. (November 2018) (Learn how and when to remove this template message)
Xue was born on 17 July 1983 in Shanghai, China.</p>
									<a href="products.php">Learn More</a>
						</div>	
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/joker.jpg" alt="">
						</div>
						</div>
					
				</li>
				
				<li>
						<div class="banner-text" style="width: 100%; overflow: hidden;">
						<div class="slidetxt" style="width: 600px; float: left;">
							<h3>LAY</h3>
								<p>Known professionally as Lay (Korean: 레이), is a Chinese singer, songwriter, dancer, and actor. He is a member of the South Korean-Chinese boy group Exo and its sub-unit Exo-M.[3] He was first known after participating in the Chinese TV talent show Star Academy in 2005.
								In April 25, a personal studio was established for Lay's solo activities in China. In September 2015, he released his autobiography titled Standing Firm at 24, which broke several online book records. In July 2016, Lay was appointed by the Communist Youth League of China (CYLC) of Changsha as a publicity ambassador.</p>
									<a href="products.php">Learn More</a>
						</div>	
						<div class="slideimg" style="margin-left: 620px;">
							<img src ="images/lay.jpg" alt="">
						</div>
						</div>
					
				</li>


			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>New Arrival</h1>
		<div class="grid-in">
	
		<?php
$sql = "SELECT * FROM inventory";
$row = mysqli_query($con, $sql);
for ($i = 0;$productshow = mysqli_fetch_array($row);$i++) {
	
	echo'<div class = "prod" style="width:30%;border:1px solid black;float:left;margin-left:30px;margin-bottom:100px;">
		 	<center>

				<a href="details.php?book_id='.$productshow['product_id'].'"><img src = images/'.$productshow['product_image'].'.jpg></a>
					<p style="padding-bottom:10px;padding-top:10px;">'.$productshow['product_name'].'</p>
					<a href="#" class="item_add"><p class="number item_price"><i> </i>RM'.$productshow['product_price'].'</p></a>
					<br>
		
				<form action = "products.php" method = "post" style="margin-bottom:20px;">
					<input type="hidden" name="book_id" value="'.$productshow['product_id'].'">
					<input style = "width:25px;" name = "quantity" type = "hidden" value = "1"/>
					<input type = "submit" value = "Add To Cart" style = width:185px;>
				</form>
			</center>
		</div>';
	
}

?>

						
		<div class="clearfix"> </div>
		</div>
		
		
			

								
		
	</div>
		</div>
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
						<li><a href="profile.php">Profile</a></li>	
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
		</div>
<!-- script -->
<script>
$('document').ready(function){
	$("#search").keyup(function(){
	var name = $('#search').val();
	if (name == ""){
		$("#display").html("");
	}
	else{
			$.ajax({
				type:"Post",
				url: "search.php",
				data:{
					proceed:1,
					search: album
				},
				success: function(respond){
					$("#display").html(respond).show();
					$('#test').hide();
				}
			});
		}
});
$("#btnSearch").click(function(){
	var album = $('#search').val();
	$.ajax({
		type:"POST",
		url: "search.php",
		data:{
			ok:1,
			search: ablum
			},
		success: function(respond){
			$("#test").html(respond).show();
		}
		});
	});	
});
function insert(data){
	$('#search').val(data);
	$('#display').hide();
}
</script>		
</body>
</html>