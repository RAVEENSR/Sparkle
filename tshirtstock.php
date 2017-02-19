 <?php

    include ("../db_connect.php");
  $sql = "SELECT Quantity,category FROM items Where category='Tshirts' ";
$result = $con->query($sql);
$i=1;        

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<div class='element$i'><div class='txtelement1'  style='right:130px;bottom:10px;'>Stock:".$row["Quantity"]."</div></div>";
$i++;
     }
} else {
     echo "0 results";
}

$con->close();
    ?>