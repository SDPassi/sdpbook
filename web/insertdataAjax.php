<?php
//insert.php  
include "conn.php";
if(!empty($_POST))
{
 $output = '';
 	$name = mysqli_real_escape_string($conn, $_POST["name"]);  
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);  
    $email = mysqli_real_escape_string($conn, $_POST["email"]);  
    $password = mysqli_real_escape_string($conn, $_POST["password"]);  
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $query = "
    INSERT INTO member(name, phone, email, password, address)  
     VALUES('$name', '$phone', '$email', '$password', '$address')
    ";
    if(mysqli_query($conn, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
             }
    echo $output;
}
?>
