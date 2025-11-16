<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'efarm1';
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
	echo "Connected successfully";
}else{
	echo "Failed to Connect";
}



 ?>