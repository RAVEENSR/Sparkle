<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <tr>
    <th>Quantity</th>
    <th>Name</th>
    <th>Price</th>
    <th>Total</th>
    <th>Remove</th>
  </tr>

  <?php
  include ("../db_connect.php");
       $tot = 0;
       $count = 0;
      $query = "SELECT purchases.Quantity,items.itemName,items.unitPrice FROM purchases INNER JOIN items on items.prodId=purchases.prodId";
		
      $result=mysqli_query($con,$query);
	  
	  
               while ($row=mysqli_fetch_array($result))  {

                   echo "<tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td>".$row[2]."</td>";
                   echo "<td>".$row[2]*$row[0]."</td>";
                   echo "<td>"."<input type='checkbox' name='$count'>"."</td>";
                   echo "</tr>";
                    $tot += ($row[2]*$row[0]);
                    $count++;

               }



echo "</table>";
          echo "<h3>".'Total amount to pay  : Rs '.$tot."</h3>";
          ?>
          
          <form action="ViewCart.php" method = "POST">
          <input type = "button" value = "Update">
          <input type = "submit" value = "Checkout"><br>
          </form>
</body>
</html>