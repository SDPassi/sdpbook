<?php
include("conn.php");

if (isset($_POST['status']) { 

$sql = "UPDATE orders SET INNER JOIN INNER JOIN member ON orders.member_id = member.id 
 				INNER JOIN orders_details ON orders.order_id = orders_details.order_id 
 				INNER JOIN inventory ON orders_details.product_id = inventory.product_id
 				INNER JOIN feedback ON inventory.product_id = feedback.product_id


orders_status='$_POST[status]',

WHERE name='$_POST[member_name]';"; 
}

if (mysqli_query($con, $sql)) {
mysqli_close($con);
header('Location: admin_order.php'); 
}

?>

