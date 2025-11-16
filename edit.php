<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title></title>
	<div class="n1">
    <div class="navbar">
  <a href="edit.html" class="bn1">Back</a>

  <a href="F_Sign.html" class="bn2">Log out</a>
  
</div>
</div>
</head>
<body>



<?php
$idd = $_REQUEST['ppid'];
$id = $_REQUEST['pid'];
$name = $_REQUEST['pname'];
$email = $_REQUEST['punit'];
$pass = $_REQUEST['pquan'];
$des = $_REQUEST['pdes'];
$fid = $_REQUEST['fid'];
$sql = "update product set pid = '$id', name = '$name', unit = '$email', quantity = '$pass', description = '$des', fid = '$fid' where pid = '$idd'";


if ($conn ->query($sql)) {
	echo "Updated";
}else{
	echo "Failed to update";
  }


?>
<br><br>
<button><a style="color: black;" href="detail.php">Continue</a></button>
</body>
</html>