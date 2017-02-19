<?php
	session_start();
	unset($_SESSION["user_name"]);
	session_unset();
	session_destroy();
	
	include ("../db_connect.php");
	
	$query2="TRUNCATE table purchases";
	$result3=mysqli_query($con,$query2);
	
	echo "<center>";
	echo "<img src='logout.png'/><br/><br/>";
	echo "<h1>!!!Log out Successful!!! \nRedirecting to Index Page...</h1>";
	echo "</center>";
	echo '<meta http-equiv="refresh" content="3; url=../Home.php" />';
	
?>