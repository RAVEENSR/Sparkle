<?php
	include ("../db_connect.php");
	
	$fName=$_POST["fName"];
	$uName=$_POST["uName"];
	$password=$_POST["password1"];
	$address=$_POST["address"];
	$email=$_POST["email"];

	//write sql querry
	$query="insert into WebTechUsers values ('$uName','$fName','$password','$address','$email',0)";
	//Execute SQL Querry
	$result=mysqli_query($con,$query);
	
	//check whether query has executed successfully
	if($result)
	{
		echo "<center>";
		echo "<img src='regSuccess.jpg'/><br/><br/>";
		echo "<h1>Redirecting to Login Page...</h1>";
		echo "</center>";
		echo '<meta http-equiv="refresh" content="3; url=login.php" />';
		
	}else{
		echo "<center>";
		echo "<img src='error.png'/><br/><br/>";
		echo "<h1>!!!Error occured!!! \nRedirecting to Registration Page...</h1>";
		echo "</center>";
		echo '<meta http-equiv="refresh" content="3; url=register.php" />';
	}
	
	//close connection
	mysqli_close($con);
?>
