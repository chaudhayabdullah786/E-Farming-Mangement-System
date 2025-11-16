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
		
  <a href="AdminLogin.html" class="bn2">Log out</a>
  <a href="wel_A.php">Back</a>
  
</div>
</div>
	

<?php
include 'connect.php';
$sql = "SELECT * FROM nary";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border=1 >
<tr>
<th> Product ID</th>
<th> Customer ID</th>
<th> Order ID</th>
<th>Current Status</th>
<th>Current Confirmation</th>
<th> Status</th>
<th> Confirmation</th>


</tr>

";

while($row = $result->fetch_assoc()){

echo "<tr>
<td>".$row['pid']."</td>
<td>".$row['cid']."</td>
<td>".$row['oid']."</td>
<td>".$row['sid']."</td>
<td>".$row['ccid']."</td>

<td><a href='Status.html'>Status</a></td>
<td><a href='confirm.html'>Confirmation</a></td>



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