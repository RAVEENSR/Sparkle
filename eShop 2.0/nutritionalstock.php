 <?php

    include ("../db_connect.php");
  $sql = "SELECT Quantity,category FROM items Where category='Nutritional' ";
$result = $con->query($sql);
$i=1;
echo "<div class='container'>";
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<div class='element$i'><div class='txtelement1'  style='right:15%;bottom:10px;'>Stock:".$row["Quantity"]."</div></div>";
$i++;
     }
} else {
     echo "0 results";
}
echo "</div>";
$con->close();

    ?>