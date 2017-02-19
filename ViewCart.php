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

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
            .basic-grey {
                margin-left: auto;
                margin-right: auto;
                max-width: 500px;
                background: #F7F7F7;
                padding: 25px 15px 25px 10px;
                font: 12px Georgia, "Times New Roman", Times, serif;
                color: #888;
                text-shadow: 1px 1px 1px #FFF;
                border: 1px solid #E4E4E4;
            }
        }
    </style>
</head>

<body id="body">
    <header><?php include("../Navbar.php");?></header>
        <script>
    function isValid()
{
	var name = document.getElementById("customer_name").value;
	var address = document.getElementById("address").value;
	var phone=document.getElementById("phone_number").value;
	var creditCard=document.getElementById("creditCard").value;
    var total=document.getElementById("tot").value;
    
	if(total !=0){			
	if (/^[A-Za-z\s]+$/.test(name) == true) {//returns true if matched, vaidates for a-z and A-Z and white space

			if(/^[a-zA-Z0-9\s,'-/]*$/.test(address)==true){
				if(/^([0-9]{10})$/.test(phone)==true){
                                    if(/^([0-9\s,'-/]{16})$/.test(creditCard)==true){
					   return true;
                                    }else{
                                       alert("Please enter a valid credit card number");
					return false;
                                    }
				}else{
					alert("Please enter a valid phone number");
					return false;
				}
			} else {
				alert("Please enter a valid address");
			    return false;
			}	

	} else {
		alert("Please enter a valid name");
		return false;
	}
    }else{
    alert("Access denied! Cart is empty");
		return false;
}        
}
    </script>
    <div class="container">
    <h2 align="center">Shopping Cart</h2>
    <form method="POST" name="updateTableInfo" action="removeItem.php">
        <table>
            <tr>
                <th>Quantity</th>
                <th>Name</th>
                <th>Price</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>

            <?php
            //connect to the Apache web server
            include ("../db_connect.php");
            //Start the session to pass count variable to the respective php files
            //session_start();
            //variable initialization
            $tot=0 ; 
            $count=1 ;
            //Join purchase table and items table
            $query="SELECT purchases.Quantity,items.itemName,items.unitPrice,purchases.prodId FROM purchases INNER JOIN items on items.prodId=purchases.prodId";
            $result=mysqli_query($con,$query);
	    while ($row=mysqli_fetch_array($result))
            { 
              //print shopping cart table
              echo "<tr>"; 
              echo "<td>".$row[0]. "</td>"; 
              echo "<td>".$row[1]. "</td>"; 
              echo "<td>".$row[2]. "</td>"; 
              echo "<td>".$row[2]*$row[0]. "</td>"; echo "<td>". "<input type='checkbox' name='$count' value='".$row[3]. "'/>". "</td>"; echo "</tr>"; $tot +=( $row[2]*$row[0]); $count++; 
              } 
              $count++; 
              echo "<input type='hidden' name='count' value=$count>";
             echo "<input type='hidden' id='tot' name='tot' value=$tot>";
			  echo "</table>";
              //print total price
              echo "<h3 align='right' id='tot'>". 'Total amount to pay  : '.$tot. "</h3>";
               echo '<input type = "submit" value = "update">'; 
           
               ?>
    </form>
    <h4>Please enter your details below to complete the purchase</h4>
    <br>
    <br>
  <style>
      .myForm{
          margin-left: 20%;
      }
      
       
      
    </style>
        <div class="well well-lg">
        <form class="form-horizontal myForm" method="post" action="Updatesqp.php">
            <h3>Billing Information</h3>
            <div class="form-group">
                <label class="col-sm-2">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="customer_name" id="customer_name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Phone (10 digits)</label>
                <div class="col-sm-4">
                <input type="tel" class="form-control" name="phone_number" id="phone_number"maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Address</label>
                    <div class="col-sm-4">
                    <input type="address" class="form-control" name="address" id="address">
                </div>
            </div>
            <fieldset>
                <h3>Shipping Method</h3>
                
                        
                        <input type="radio" name="Shippingmethod" required value="Free Shipping">Free Shipping</label><br>
                
                
                
                    
                        <input type="radio" name="Shippingmethod" required value="Express Shipping">Express Shipping</label>
                
               
            </fieldset>

            <fieldset>
                <h3>Payment Method</h3>
                
                    <label class="choice">
                        <input type="radio" name="Paymentmethod" required value="Free Shipping">Credit Card</label>
                
            

                <div class="form-group">
                <label class="col-sm-2">Credit Card Type</label>
                    <div class="col-sm-2">
                    <select id="credit_cart_type" name="credit_cart_type" class="form-control" required>
                        <option value="" selected="selected">Select One</option>
                        <option value="Master Card">Master Card</option>
                        <option value="Visa">Visa</option>
                    </select>
                        </div>
                </div>
           


            <div class="form-group">
                <label class="col-sm-2">Credit Card Number</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="credit_card_number" id="creditCard" maxlength="16" required >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2">Expiry Date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control" name="pickup_time" required>
                </div>
            </div>
            </fieldset>

            <div class="form-group">
                <div class="col-sm-offset-2">
                <input type="submit" name="submitBtn" id="submitBtn" value="Proceed Checkout" class="btn btn-success" onclick="return isValid()">
                    </div>
            </div>
            

        </form>
        </div>
        </div>
        <footer><?php include("../footer.php");?></footer>
    </body>
    
</html>