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
<?php

include ("../db_connect.php");
$name=$_POST["userName"];


$tot = 0;

$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE UserName='$name' ";

$result2=mysqli_query($con,$query);

if(mysqli_fetch_array($result2)==false){
	echo "<br/><br/><br/><br/>";
	echo "<center><h1>No Orders found on User Name ".$name. "!</h1></center>";
	echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	
}else{

	echo "<center><h1>Order Deatils</h1></center>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Quantity</th>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "<th>Total</th>";
	echo "</tr>";

	include ("../db_connect.php");
	$name=$_POST["userName"];


	echo "<br/><br/>User Name: ".$name;
	echo "<br/><br/>Status:Shipped<br/><br/>";

	$tot = 0;

	$query = "SELECT Quantity,Name,Price,Total FROM trackorder WHERE UserName='$name' ";

	$result2=mysqli_query($con,$query);

      $result=mysqli_query($con,$query);
	  
	  
               while ($row=mysqli_fetch_array($result))  {

                   echo "<tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td>".$row[3]."</td>";
                   echo "</tr>";
                   
		   $tot += ($row[2]*$row[0]);

               }
echo "</table>";
echo "<br/><br/><br/><br/>";
echo "<h3>".'Total amount to pay  : Rs '.$tot."</h3>";
echo "<br/><br/><br/><br/><br/><br/><br/><br/>";

}
?>
</div>
<footer><?php include("../footer.php");?></footer>
</body>
</html>
