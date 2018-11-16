<?php

session_start();

include "conn.php";

if (isset($_POST['admin_name'],$_POST['admin_phone'],$_POST['admin_email'])) { 

$sql2 = 

"UPDATE admin SET admin_name = '$_POST[admin_name]', admin_phone = '$_POST[admin_phone]', admin_email = '$_POST[admin_email]' WHERE admin_email = '$_SESSION[login_user]'";

mysqli_query($con,$sql2);

echo'<script text="text/javascript">
alert("profile updated!");
window.location.replace ("admin_profile.php");
</script>';
}

if (isset($_SESSION['login_user'])) {

$sql = "SELECT * FROM admin WHERE admin_email =  '$_SESSION[login_user]'";

$result = mysqli_query ($con,$sql);

$row = mysqli_fetch_array ($result);
}


?>
