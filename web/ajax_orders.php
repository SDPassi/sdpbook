<?php
include ("conn.php");

if (isset($_POST['id'])){
	
	$membername = $_POST['membername'];
	$productname = $_POST['productname'];
	$orderquantity = $_POST['orderquantity'];
	$productprice = $_POST['productprice'];
	$paymentdate = $_POST['paymentdate'];
	$status = $_POST['status'];
	$id = $_POST['id'];
	
$sql = "UPDATE orders SET
payment_date= '$paymentdate',
orders_status = '$status'
WHERE order_id = '$id'";


$result = mysqli_query($con,$sql);

	

	

}
?>