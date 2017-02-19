<!DOCTYPE html>
<html>
  <head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/common.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body id="body">
  <header>
    <?php include("../Navbar.php"); ?>
  </header>
  <div class="container">
    <form class="form-horizontal" name="frmUser" method="post" action=#>
	  <br/><br/>
      <h2>Please enter login details</h2>
	  <br/><br/><br/><br/>
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Username</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter username" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password</label>
        <div class="col-sm-4"> 
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>
         <div target="_parent" id="errorMsg" style="color:red;"></div>
      </div>
                
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-success" value="Submit" onclick="checkForm()">Submit</button>
        </div>
      </div>
    </form>
	<br/><br/><br/><br/>
   </div>
  <script src="login.js"></script>
<footer> <?php include("../footer.php"); ?></footer>
</body>
</html>