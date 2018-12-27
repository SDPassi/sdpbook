<?php>

session_start();

include "conn.php";

if (isset($_POST[email_check])){
	
	$email = $_POST['email'];
	$sql = "SELECT * FROM member WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		echo "not_available";
	}else{
		echo 'available';
	}
	exit();
}

if (isset($_POST['save'])) {
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	
	$query = "INSERT INTO member (name, phone, email, password, address) VALUE ($name, $phone, $email, '"md5.$password"', $address)";
	$result = mysqli_query($con, $query);
	echo 'Registered successfully!';
	exit();
}


?>