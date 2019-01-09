<?php

session_start();

include "conn.php";


if (isset($_POST['id'])) {
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$id = $_POST['id'];
	
	$query = "INSERT INTO member (name, phone, email, password, address) VALUES ('$name', '$phone', '$email', '".md5($password)."', '$address')";
	$result = mysqli_query($con, $query);
	echo 'Registered successfully!';
	exit();
}


?>