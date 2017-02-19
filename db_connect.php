<?php
	#create connection to MySQL server
	$con=mysqli_connect("localhost","root","");
	
	#select target database
	mysqli_select_db($con,"Sparkle");
	
	#check connection status
	if(!$con)
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	else
		//echo"<br/>Connection is successful";
	
	#end of file
	
?>