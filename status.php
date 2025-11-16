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

;
$des3 = $_REQUEST['Status'];



echo "<table border = 1px>
<tr>

<th>status</th>

<th>SELECT</th>

</tr>";
echo "<tr>


<td>$des3</td>
<td><button type = submit class = b><a href = select1.php>SELECT</a></button></td>

</tr>";





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