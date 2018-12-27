<?php
include ("conn.php");

if (isset($_POST['id'])){
	
	$status = $_POST['status'];
	$id = $_POST['id'];
	
$sql = "UPDATE orders SET 
orders_status = '$status'
WHERE order_id = '$id'";

echo'register successfully';

$result = mysqli_query($con,$sql);

	

	

}
?>