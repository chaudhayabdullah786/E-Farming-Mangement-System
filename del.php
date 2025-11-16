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

$id = $_REQUEST['did'];
$sql = "delete from product
where pid = '$id' ";

if ($conn ->query($sql)) {
	echo "Data deleted successfully";
}else{
	echo "Failed to delete the data";
}



  ?>

  <button><a href="detail.php">Continue</a></button>
  </body>
</html>