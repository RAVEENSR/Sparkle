<?php

include ("../db_connect.php");
session_start();
$uname=$_SESSION["user_name"];  
$query = "SELECT purchases.Quantity,items.itemName,items.unitPrice FROM purchases INNER JOIN items on items.prodId=purchases.prodId";

$result=mysqli_query($con,$query);

	  
	  
        $orderid=rand(10,1000);   
	echo "<h1 style='text-align:center'>Thanks For Buying Our Products!<br>YOUR OrderId is".$orderid."</h1>"; 
	   
	 
     	while ($row=mysqli_fetch_array($result))  {
	
	$sql1 = "INSERT INTO trackorder (Quantity,Name,Price,Total,UserName,OrderId)
	VALUES ('$row[0]','$row[1]','$row[2]','$row[2]*$row[0]','$uname',' $orderid');";
	$result1=mysqli_query($con,$sql1);
     	}

		//if ($con->multi_query($sql1) === TRUE) {
   		 //echo "New records created successfully";
		//} else {
    		//echo "Error: " . $sql1 . "<br>" . $con->error;
		//}

$con->close();

?>
