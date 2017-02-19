<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylesheetForm.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <title>User Registration </title>
</head>
<header>
    <?php
    include "../Navbar.php";

    ?>
</header>


<body id="body">
<script src="validScript.js"></script>
<div class="container">
    <!-- Required Div Starts Here -->
    <form class="form-horizontal" action="registerProcess.php" method="post" style="margin-left:30%;">
        <div class="form-group">
            <legend><h1 style="margin-left:20%;">Register User</h1></legend>
            <label for="fName" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-4">
                <input name="fName" class="form-control" id="fName"="text" required placeholder="Full Name">
            </div>
        </div>
        <div class="form-group">
            <label for="uName" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="uName" name="uName" onBlur="checkUser()" required placeholder="User Name">
                <p style="color:red;"id="usrMsg"><p> 
            </div>
        </div>
        <div class="form-group">
            <label for="password1" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="password1" name="password1" required placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="password2" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="password2" name="password2" required placeholder="Confirm Password">
            </div>
        </div>
         <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="address" name="address"  required placeholder="Address">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" style="margin-left:10%;"  class="btn btn-success"  value="Register" onclick="return isValid()">
            </div>
        </div>
    </form>

</div>
<footer>
    <?php include("../footer.php");?>
</footer>
</body>
</html>