<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <meta charset="utf-8" />
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body id="body">
    <header><?php include("../Navbar.php")?></header>

<div class="container">
<br/><br/><br/><br/>
<center><h1>Order Details</h1>
<br/><br/>
<?php

include ("../db_connect.php");
$orderId=$_POST["orderid"];

$query1 = "SELECT UserName FROM trackorder WHERE OrderId=$orderId";
$result1=mysqli_query($con,$query1 );
$row1 = mysqli_fetch_array($result1);

$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE OrderId=$orderId"; 
$result2=mysqli_query($con,$query);

     if(mysqli_fetch_array($result2)==false){
	echo "<h1>Invalid Order ID!</h1></center>";
	echo "</br></br></br></br></br>";
	}else{
		echo "</center><table>";
		echo "<tr>";
		echo "<th>Quantity</th>";
		echo "<th>Name</th>";
		echo "<th>Price</th>";
		echo "<th>Total</th>";
		echo "</tr>";
		echo "OrderId:".$orderId;
		echo "<br><br>User Name: ".$row1['UserName'];
		echo "<br><br>Status:Shipped<br>";

		$tot = 0;



		$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE OrderId=$orderId";
	
     		$result=mysqli_query($con,$query);
    
	  
	
               while ($row=mysqli_fetch_array($result))  {

                   echo "<br><tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td>".$row[2]*$row[0]."</td>";
                   echo "</tr>";
                    $tot += ($row[2]*$row[0]);
                   

               }

		echo "</table>";
		echo "<br/><br/><br/>";
 		echo "<h3>".'Total amount to pay  : Rs '.$tot."</h3>";
         } 
?>

<br/><br/><br/><br/><br/><br/>
</div>

<footer><?php include('../footer.php');?></footer>
</body>
</html>
