<!DOCTYPE html>

<html>
    
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
    function isValid()
{
	var orderid = document.getElementById("oid").value;
    
	if(/^([0-9])*$/.test(orderid)==true){			
	   return true;
    }else{
        alert("please enter digits only");
		return false;
    }        
}
    </script>
    <link rel="stylesheet" href="css/common.css">
    <meta charset="utf-8" />
    <title>Track Order</title>
</head>
<body id="body">
    <header><?php include("../Navbar.php")?></header>
    <div class="container">
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<h1>Track Your Order!</h1>
    <form action="trackorder.php" method="post" id="myform" class="form-horizontal">
        <div class="form-group">
        <label class="col-sm-2">OrderId</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="orderid" id="oid" required/>
        </div>
        <div class="col-sm-2">
        <button type="submit" value="Login" onclick="return isValid()" class="btn btn-info">TRACK</button>
        </div>
        </div>
        </form>
        
 <form action="trackorderbyname.php" method="post" id="myform1" class="form-horizontal">
        <div class="form-group">
        <label class="col-sm-2">User Name</label>
        <div class="col-sm-4">
        <input class="form-control" type="text" name="userName" id="oid1" required/>
        </div>
        <div class="col-sm-2">
        <button type="submit" value="Login" onclick="" class="btn btn-info">TRACK</button>
            </div>
     </div>
        </form>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<footer><?php include("../footer.php");?></footer>
</body>
</html>