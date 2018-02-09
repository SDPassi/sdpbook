<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>STOCK: TPM Bookstore</title>
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

<div class="container">
		<div class="account">
		<h1>Monthly Report</h1>
		
		<div class="activity-button">
		
		</div>			
		<table class="activity-table">
		<thead>
		<tr class="activity-table-main">
			<th>Month</th>
			<th>Total Sales(RM)</th>
		
	</tr>
		</thead>	
		<tbody>		
	<?php 
	$sql="SELECT SUBSTRING(payment_date,6,2) AS month,SUM(total_price) AS total1 FROM `orders` group by SUBSTRING(payment_date,6,2) 
	order by SUBSTRING(payment_date,6,2) ASC";
	$result=mysqli_query($con,$sql);
	
	while($result_month=mysqli_fetch_array($result)){
	
?>					
            <tr>
            <td><?php if($result_month['month']=="01"){
            				echo "January";
            		}elseif($result_month['month']=="02"){ 		
            				echo "February";
            		}elseif($result_month['month']=="03"){ 		
            				echo "March";
            		}elseif($result_month['month']=="04"){ 		
            				echo "April";
            		}elseif($result_month['month']=="05"){ 		
            				echo "May";
					}elseif($result_month['month']=="06"){ 		
            				echo "June";
					}elseif($result_month['month']=="07"){ 		
            				echo "July";
					}elseif($result_month['month']=="08"){ 		
            				echo "August";
					}elseif($result_month['month']=="09"){ 		
            				echo "September";
					}elseif($result_month['month']=="10"){ 		
            				echo "October";
					}elseif($result_month['month']=="11"){ 		
            				echo "November";
            		}else{
            		echo "December"; 
            		} 
            	?>
           	</td>	
			<td><?php echo $result_month['total1']?></td>	
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
			