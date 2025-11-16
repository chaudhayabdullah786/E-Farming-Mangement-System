<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	<h1 class="poi1">PRODUCT DETAILS</h1>
	<div class="n1">
	<div class="navbar">
		
  <a href="F_Sign.html" class="bn2">Log out</a>
  <a href="wel_F.php">Back</a>
  <a href="add_F.html" class="bnn">Add</a>
 


  
</div>
</div>
	



<?php
include 'connect.php';
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border=1 >
<tr>
<th> Product ID</th>
<th> Name</th>
<th> Unit</th>
<th> Quantity</th>
<th> Description</th>
<th>Farmer ID</th>
<th>DELETE</th>
<th>UPDATE</th>
</tr>

";

while($row = $result->fetch_assoc()){

echo "<tr>
<td>".$row['pid']."</td>
<td>".$row['name']."</td>
<td>".$row['unit']."</td>
<td>".$row['quantity']."</td>
<td>".$row['description']."</td>
<td>".$row['fid']."</td>
<td><a href='del.html'>DELETE</a> </td>
<td><a href='edit.html'>UPDATE</a> </td>

</tr>";

}

echo "</table>";
}else{
echo "No Result Found.";
}
$conn->close();
echo "<style>
            table{
            	border-collapse: collapse;
        	margin-top: 16%;
        	margin-left: 37%;
            }
             td{
        	color: white;
        	background-color: black;
        	text-align: center;

        }
			</style>";


?>


</body>
</html>