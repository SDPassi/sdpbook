<?php
include("conn.php");

$customer_id = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : ''; 
 	$result = mysqli_query($con,"Delete * FROM orders INNER JOIN member ON orders.member_id = member.id 
 	INNER JOIN orders_details ON orders.order_id = orders_details.order_id 
 	INNER JOIN inventory ON orders_details.product_id = inventory.product_id
 	INNER JOIN feedback ON inventory.product_id = feedback.product_id
 	WHERE orders.member_id='$customer_id'");

mysqli_close($con); 
header('Location: activity.php');

?>
