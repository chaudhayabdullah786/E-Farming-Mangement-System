<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title></title>
	<div class="n1">
    <div class="navbar">
  <a href="add_F.html" class="bn1">Back</a>

  <a href="F_Sign.html" class="bn2">Log out</a>
  
</div>
</div>
</head>
<body>
<?php
include 'connect.php';
$id = $_REQUEST['pid'];
$name = $_REQUEST['pname'];
$unit = $_REQUEST['punit'];
$quan = $_REQUEST['pquan'];
$des = $_REQUEST['pdes'];
$fid = $_REQUEST['fid'];
$sql = "INSERT INTO product
VALUES('$id','$name','$unit','$quan', '$des', '$fid')";

if ($conn ->query($sql)===TRUE) {
	echo "Added";
}else{
	echo "Failed to add";
}


?>
<br><br>
<button><a style="color: black;" href="detail.php">Continue</a></button>
</body>
</html>