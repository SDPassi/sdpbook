<?php
include("conn.php");

if (isset($_POST['status'],$_POST['memberid'])) { 

$sql = "UPDATE orders SET 

orders_status='$_POST[status]'

WHERE member_id='$_POST[memberid]'"; 

$result=mysqli_query($con,$sql);

echo'<script text="text/javascript">
alert("Order Status updated!");
window.location.replace ("admin_index.php");
</script>';
}

?>

