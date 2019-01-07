<?php

session_start();

include "conn.php";

if (isset($_SESSION['login_user'])) { 

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$id = $_POST['id'];

$sql = "UPDATE member SET 
name = '$name', 
phone = '$phone', 
email = '$email', 
address = '$address'
WHERE ID = '$id'";

$result = mysqli_query($con,$sql);

}

?>
