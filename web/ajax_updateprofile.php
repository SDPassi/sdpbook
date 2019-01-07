<?php

session_start();

include ("conn.php");

if (isset($_SESSION['login_user'])) { 

	$name = $_POST['name']
	$phone = $_POST['phone']
	$email = $_POST['email']
	$address = $_POST['address']

$sql = 

"UPDATE member SET 
name = '$name', 
phone = '$phone', 
email = '$email', 
address = '$address' 
WHERE email = '$_SESSION[login_user]'";

$result = mysqli_query($con,$sql);

}

?>
