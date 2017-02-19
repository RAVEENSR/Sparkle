<?php
include("../Navbar.php");
echo "<div class='container'>";
   include ("../db_connect.php");
//session_start();
$uname=$_SESSION["user_name"]; 

   //update items quantity after the purchase
 	 $selectItemsSql = "SELECT items.Quantity,items.prodId FROM items INNER JOIN purchases on items.prodId=purchases.prodId";
  	 $result1=mysqli_query($con,$selectItemsSql);
	 $selectPurchasesSql = "SELECT quantity FROM purchases";
	 $result2=mysqli_query($con,$selectPurchasesSql);
 	 while($row1 = mysqli_fetch_row($result1) and $row2 = mysqli_fetch_row($result2)){
      
  	$sql = mysqli_query($con,"UPDATE items SET Quantity = ($row1[0]-$row2[0]) WHERE prodId=$row1[1]") ;
  }
 
$query = "SELECT purchases.Quantity,items.itemName,items.unitPrice FROM purchases INNER JOIN items on items.prodId=purchases.prodId";

$result=mysqli_query($con,$query);

	  
	  
        $orderid=rand(10,1000);   
	echo "<h1 style='text-align:center';color:>Thanks For Purchasing Our Products!<br>YOUR OrderId is ".$orderid."</h1>"; 
	   
	 
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
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body id="body">

<div class="container">
<br/><br/>
<h2 align="center">Order Summary</h2>
    </div>    
 <?php
 echo "<div class='container'>";
 echo '<label>'.'<h3>'.'Customer Name  - '.$_POST['customer_name'].'</h3>'.'</label><br>';
 echo '<label>'.'<h3>'.'Customer Address  - '.$_POST['address'].'</h3>'.'</label><br>';
 echo '<label>'.'<h3>'.'Customer Telephone  - '.$_POST['phone_number'].'</h3>'.'</label><br>';
 echo '<label>'.'<h3>'.'Shipping Method  - '.$_POST['Shippingmethod'].'</h3>'.'</label><br>';
 echo '<table>';
            echo '<tr>';
            echo    '<th>'.'Quantity'.'</th>';
            echo    '<th>'.'Name'.'</th>';
            echo   '<th>'.'Unit Price'.'</th>';
            echo    '<th>'.'Total'.'</th>';

       echo     '</tr>';
 
 $query="SELECT purchases.Quantity,items.itemName,items.unitPrice,purchases.prodId FROM purchases INNER JOIN items on items.prodId=purchases.prodId";
 $result1=mysqli_query($con,$query);
            while ($row=mysqli_fetch_array($result1))
            {
              //print order summary table
              echo "<tr>";
              echo "<td>&nbsp&nbsp&nbsp&nbsp".$row[0]. "</td>";
              echo "<td>&nbsp&nbsp&nbsp&nbsp".$row[1]. "</td>";
              echo "<td>&nbsp&nbsp&nbsp&nbsp".$row[2]. "</td>";
              echo "<td>&nbsp&nbsp&nbsp&nbsp".$row[2]*$row[0]. "</td>";
                echo "</tr>";
              }
               echo '</table>';
			    
				$query2="TRUNCATE table purchases";
				$result3=mysqli_query($con,$query2);
echo "<br/><br/><br/><br/></div>";
 ?>
<footer><?php include("../footer.php");?></footer>
</body>
</html>