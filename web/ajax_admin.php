<?php
include("conn.php");

if(isset($_POST['id'])){
	
	$product_name = $_POST['productname'];
	$product_description = $_POST['productdescription'];
	$product_quantity = $_POST['productquantity'];
	$product_price = $_POST['productprice'];
	$product_image = $_POST['productimage']
	$product_id = $_POST['productid'];

	//  query to update data 
	 
	$result  = mysqli_query($con , "UPDATE inventory SET 
	productname='$product_name' , 
	productdescription='$product_description' , 
	productquantity = '$product_quantity', 
	productprice = '$product_price', 
	productimage = '$product_image',
	WHERE productid='$product_id'");
	
	if($result){
		echo 'data updated';
	}

}
?>