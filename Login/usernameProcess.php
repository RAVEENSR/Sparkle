<?php
	include ("../db_connect.php");
	
	if(count($_GET)>0) {
		$name=$_GET["uname"];
		
		
		//write sql querry
		$selectString="select UsersUN from WebTechUsers";
	
		//Execute SQL Querry
		$reply=mysqli_query($con,$selectString);
	
		$value=0;
		while($row=mysqli_fetch_array($reply))
		{	
			if(strcasecmp($row['UsersUN'], $name) == 0){
				$value=1;
				break;
			}else{
				if(preg_match('/\s/',$name)){
					$value=2;
				}else{
				}
			}
		}
		
		if($value==1) {
			echo "found";
		}else if($value==2){
			echo "characterInvalid";
		}else{
			echo "valid";
		}
	}else{}	

?>