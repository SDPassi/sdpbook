<?php
include("conn.php");
$sql="INSERT INTO inventory (product_id, product_name, product_description, product_quantity, product_price, product_image)
VALUES
('$_POST[productid1]','$_POST[productname1]','$_POST[productdescription1]','$_POST[productquantity1]', '$_POST[productprice1]','$_POST[productimage1]')";

if(mysqli_query($con,$sql)){
echo'<script text="text/javascript"> 
alert("Stock Added"); 
window.location.replace("admin_stock.php"); 
</script>
';
} ?>

