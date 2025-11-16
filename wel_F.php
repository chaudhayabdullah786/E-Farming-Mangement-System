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
<p class="poi1"><b>Please press the continue button to enjoy the journey.</b></p>
<br>
<button class="poi4"><a href="detail.php">Continue</a></button><br>

<?php
include 'connect.php';

$id = $_REQUEST['fid'];
$name = $_REQUEST['fname'];
$unit = $_REQUEST['femail'];
$quan = $_REQUEST['fpassword'];
$des = $_REQUEST['fcontact'];

$sql = "INSERT INTO farmer
VALUES('$id','$name','$unit','$quan', '$des')";
if ($conn ->query($sql)) {
echo "<table border = 1px>
<tr>
<th>Farmer ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Contact number</th>
</tr>";
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$unit</td>
<td>$quan</td>
<td>$des</td>

</tr>";
} else {
	echo"Failed to add farmer";
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