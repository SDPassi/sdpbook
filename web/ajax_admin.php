<?php
include ("conn.php");



if (isset($_POST['id'])){
	
	$productname = $_POST['productname'];
	$productdescription = $_POST['productdescription'];
	$productprice = $_POST['productprice'];
	$productquantity = $_POST['productquantity'];
	$id = $_POST['id'];
	
$sql = "UPDATE inventory SET 
product_name = '$productname', 
product_description ='$productdescription', 
product_quantity = '$productquantity',
product_price = '$productprice', 
product_image = '$productimage' 
WHERE product_id = '$id'";

$result = mysqli_query($con,$sql);

	
		echo 'data updated';
	

}
?>