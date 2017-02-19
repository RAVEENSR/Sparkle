<?php
include ("../db_connect.php");


   for($i = 1;$i <= $_POST["count"];$i++){
      $query1 = "SELECT items.prodId FROM purchases LEFT JOIN items ON items.prodId=purchases.prodId";
       $result=mysqli_query($con,$query1);
	 while ($row1 = mysqli_fetch_array($result))  {
	
          
	if(isset($_POST[$i]) and $_POST[$i] == $row1[0]){
             $delQ=mysqli_query($con,"DELETE FROM purchases WHERE prodId=$row1[0]");

          }

        }
   }

if($_POST['tot']==0){
    
}

   include 'ViewCart.php';


?>