<?php
$con = mysqli_connect ("localhost","root","","sdpdb");

//check connection

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: ".Mysqli_connect_error();
}

?>