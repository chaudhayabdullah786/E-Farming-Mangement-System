<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: AdminLogin.html'); 
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['confirm_id'])) {
    $orderID = intval($_GET['confirm_id']);
    $updateSql = "UPDATE orders SET status = 'Confirmed' WHERE id = $orderID";
    if ($conn->query($updateSql) === TRUE) {
        echo "<p style='color:green;'>Order confirmed successfully.</p>";
    } else {
        echo "<p style='color:red;'>Error updating record: " . $conn->error . "</p>";
    }
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>