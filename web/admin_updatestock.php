<?php
include("conn.php");

if (isset($_POST['productid'],$_POST['productname'],$_POST['productdescription'],$_POST['productquantity'],$_POST['productprice'])){ 

$sql = "UPDATE inventory SET 

product_name='$_POST[productname]',

product_description='$_POST[productdescription]',

product_quantity='$_POST[productquantity]',

product_price='$_POST[productprice]'


WHERE product_id='$_POST[productid]'"; 
$result=mysqli_query($con,$sql);

echo'<script text="text/javascript">
alert("Stock updated!");
window.location.replace ("admin_stock.php");
</script>';

}

?>