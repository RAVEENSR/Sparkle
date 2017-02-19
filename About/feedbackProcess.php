<?php
	include ("../db_connect.php");
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	$rating=$_POST["star"];
	if(isset($_POST["eUpdates"])){
		$eUpdates=$_POST["eUpdates"];
	}else{
		$eUpdates='false';
	}

	//write sql querry
	$query="insert into feedbackTable (name,email,comment,rating,subscribe) values ('$name','$email','$message','$rating','$eUpdates')";
	
	//Execute SQL Querry
	$result=mysqli_query($con,$query);
	
	//check whether query has executed successfully
	if($result)
	{
		echo "<center>";
		echo "<img src='thankFeedback.png'/><br/><br/>";
		echo "<h1>Redirecting to Feedback Page...</h1>";
		echo "</center>";
		echo '<meta http-equiv="refresh" content="3; url=about.php" />';
		
	}else{
		echo "<center>";
		echo "<img src='error.png'/><br/><br/>";
		echo "<h1>!!!Error occured!!! \nRedirecting to Feedback Page...</h1>";
		echo "</center>";
		echo '<meta http-equiv="refresh" content="3; url=about.php" />';
	}
	
	//close connection
	mysqli_close($con);
	
?>
