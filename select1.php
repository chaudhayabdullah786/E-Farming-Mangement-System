<?php  
include 'Connect.php';
echo "<br><h1>DETAILS OF ALL CUSTOMER RECORDS</h1></br>";

$sql7 = "Select  Address From customer where cid=1";
$result = $conn->query($sql7);

if ($result->num_rows > 0) {
    echo "<table border='5px'>
            <tr>
                
                <th>Address</th>
                <th>UPDATE</th>
                
            </tr>";
    
    
while ($row=$result->fetch_assoc()) {
        echo "<tr>
                    
                    <td>".$row['Address']."</td>
                  
                    <td><button type = submit class = b><a href = Update1.php>UPDATE</a></button></td>
                   
                </tr>";
    }
    
    echo "</table>";
} else {
    echo "No Result Found";
}

echo "<br><br><button type='submit' class='b2'><a href='customer.html'>+ ADD CUSTOMER</a></button></br></br>";

echo "<style>
h1{
    font-family: Arial Black;
    font-size: 50px;
    background-color: springgreen;
    color: black;
    text-align: center;
}

table{
    text-align: center;
    margin-left: 15%;
}
th{
    font-size: 20px;
    color: red;
    font-family: Arial Black;
    background-color: aqua;
}

td{
    font-size: 18px;
    font-family: Arial Black;
    color: black;
}

a{
    text-decoration: none;
}

.b{
    background-color: springgreen;
    color: black;
    font-family: Arial Black;
    font-size: 16px;
}
.b:hover{
    background-color: springgreen;
    transition: 0.8s;
    transform: scale(1.0);
}
.b1{
    background-color: red;
    color: black;
    font-family: Arial Black;
    font-size: 16px;
}
.b1:hover{
    background-color: red;
    transition: 0.8s;
    transform: scale(1.0);
}
.b2{
    width: 50%;
    height: 5%;
    background-color: ghostwhite;
    color: black;
    text-align: center;
    font-family: Arial Black;
    font-size: 20px;
    text-decoration: none;
    float: left;
    margin-left: 25%;
}
.b2:hover{
    background-color: springgreen;
    transition: 0.8s;
    transform: scale(1.0);
}
</style>";
?>
