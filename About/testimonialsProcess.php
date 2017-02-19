<?php
	include ("../db_connect.php");
	
	//write sql querry
	$query1="SELECT COUNT(id) FROM feedbackTable";
	
	//Execute SQL Querry
	$result1=mysqli_query($con,$query1);
	
	//Read sigle row of result set
	$row1=mysqli_fetch_array($result1);
	
	//Getting the number of rows in table
	$number=rand(1,$row1[0]);
	
	//write sql querry
	$query="SELECT name,comment FROM feedbackTable WHERE id=$number";
	
	//Execute SQL Querry
	$result=mysqli_query($con,$query);
	
	//RSSead sigle row of result set
	$row=mysqli_fetch_array($result);
	
	//check whether query has executed successfully
	if($result)
	{	
		echo "<span id='insideText1'>\"".$row[1]."\"</span><br/><span id='insideText2'>-".$row[0]."-</span>";
			
	}else{
		echo "error";
	}
	
	//close connection
	mysqli_close($con);
	
?>
