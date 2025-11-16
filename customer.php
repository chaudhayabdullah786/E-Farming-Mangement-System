<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>

	<h1 class="poi1">Congratulations</h1>
	<p>You have successfully logined to the E-FARMING website. <br>
	We have many amazing features. You can sell, add and delete<br>
 any product of your choice(product should be related to E-FARMING).<br>
 You can give any price of yours choice. We hope you will enjoy this <br>
 wonderful journey.
</p><br><br>
<p class="poi3">Please press the continue button to enjoy the journey.</p>
<br>
<button class="poi4"><a href="select1.php">Continue</a></button><br>

<?php
include 'connect.php';

$id = $_REQUEST['customer_id'];
$name = $_REQUEST['customer_name'];
$contact = $_REQUEST['customer_contact'];
$unit = $_REQUEST['customer_password'];
$quan = $_REQUEST['customer_email'];
$des = $_REQUEST['city'];
$des2 = $_REQUEST['Address'];
$des3 = $_REQUEST['Postal'];

$sql8= "INSERT INTO customer
VALUES('$id','$name','$contact','$unit','$quan', '$des','$des2','$des3')";
if ($conn ->query($sql8)) {
echo "<table border = 1px>
<tr>
<th>customer_id</th>
<th>customer_name</th>
<th>customer_contact</th>
<th>customer_password</th>
<th>customer_email</th>
<th>city</th>
<th>Address</th>
<th>Postal</th>
<th>SELECT</th>
<th>UPDATE</th>
<th>DELETE</th>
</tr>";
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$contact</td>
<td>$unit</td>
<td>$quan</td>
<td>$des</td>
<td>$des2</td>
<td>$des3</td>
<td><button type = submit class = b><a href = select1.php>SELECT</a></button></td>
<td><button type = submit class = b><a href = update1.php>UPDATE</a></button></td>
<td><button type = submit class = b><a href = delete1.php>DELETE</a></button></td>

</tr>";
} else {
	echo"Failed to add customer";
}




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