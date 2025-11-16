<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<div class="n1">
    <div class="navbar">
  <a href="del.html" class="bn1">Back</a>

  <a href="F_Sign.html" class="bn2">Log out</a>
  
</div>
</div>
<?php

$id = $_REQUEST['num'];
$sql = "insert into nary values($id)";

if ($conn ->query($sql)) {
	echo "Order number has been sent";
}else{
	echo "Failed to sent the order number";
}



  ?>

  <button><a href="detailForAdmin.php">Continue</a></button>
  </body>
</html>