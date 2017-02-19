<?php

include ("../db_connect.php");//Adding connection file of the database
session_start();
/*if(isset($_SESSION["user_name"])){
	echo "true";
}else{
	echo "false";
} */
 if(isset($_SESSION["user_name"])){//Checking users login status
	$id=$_GET['productid'];//recieving product id from products page

	$qty=$_GET['quantity'];//recieving product quantity by products page

	$sql2 = "SELECT prodId FROM purchases WHERE prodId='$id' ";//selecting already existing productcs from purchases table
	$result2=mysqli_query($con,$sql2);
	$row2 = mysqli_fetch_array($result2);
	$sql1 = "SELECT Quantity FROM items WHERE prodId='$id' ";//selecting product quantity for relevant product
	$result1=mysqli_query($con,$sql1);
	$row = mysqli_fetch_array($result1);

	//echo $row2['prodId']."  ".$id;

	if($row['Quantity']<$qty){//checking quantity status of product
		echo "Invalid stock amount!";
	}else if($qty<=0){
	echo "Quantity Can't be less than 1";

	}
	else if($row2['prodId']==$id){//updating quantity of product if it already exist
		$sql3="UPDATE purchases SET quantity='$qty' WHERE prodId='$id'";
		$result3=mysqli_query($con,$sql3);
		echo "Successfully Added ".$qty." Items to Cart!";
	}else{//inserting product info.to purchases table as normal
		$sql = "INSERT INTO purchases(prodId,quantity)
		VALUES ('$id','$qty')";
		echo "Successfully Added ".$qty." Items to Cart!";

		$result=mysqli_query($con,$sql);//checking for sql errors
		if(!$result){
			die(mysqli_error());
		}else{
		//echo "Successfully entered data";
		}
	}
	
	
	

}else{

	echo "Please Log In First!";

}
/*
//checking for sql errors
if(!$result1){
	die(mysqli_error());
	}
else{
	//echo "Successfully Added";
}
}else{
echo "Please Log In First!";
}
*/
mysqli_close($con);//closing the connection

?>
