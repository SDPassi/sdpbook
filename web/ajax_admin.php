<?php
include("conn.php");

if(isset($_POST['productimage'])){
	
	$productname = $_POST['productname'];
	$productdescription = $_POST['productdescription'];
	$productquantity = $_POST['productquantity'];
	$productprice = $_POST['productprice'];
	$productimage = $_POST['productimage'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($con , "UPDATE inventory SET product_name='$productname' , product_description='$productdescription' , product_quantity = '$productquantity', product_price = '$productprice', product_image = '$productimage',WHERE id='$id'");
	
	if($result){
		echo 'data updated';
	}

}
?>