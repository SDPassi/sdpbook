<?php
include("conn.php");

if (isset($_POST['productid'],$_POST['productname'],$_POST['productdescription'],$_POST['productquantity'],$_POST['productprice'],$_POST['productimage'])){ 

$sql = "UPDATE inventory SET 

product_name='$_POST[productname]',

product_description='$_POST[productdescription]',

product_quantity='$_POST[productquantity]',

product_price='$_POST[productprice]',

product_image='$_POST[productimage]'

WHERE product_id='$_POST[productid]'"; 
$result=mysqli_query($con,$sql);

echo 'data updated';
;

}

?>