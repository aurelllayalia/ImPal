<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Login.css">
  <link rel="stylesheet" type="text/css" href="Navigasi.css">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-validator-master/dist/validator.js"></script>
  <script type="text/javascript" src="js/bootstrap-validator-master/dist/validator.min.js"></script>
</head>
<body>
  <?php 
    include "Header.php";
  ?>
  <br/>
  <br/>
  <center>
    <div class="container" id="top">
	  	<text id="salam">Forget Your Password?</text><br>
		  <form data-toggle="validator" role="form" action="FunctionLogin.php" method="post">
        <fieldset>
          <div class="form-group">
            <text id="checker">Enter Your Username</text>
            <div class="controls">
              <input type="text" name="username" class="form-control" id="inputUser" placeholder="Username" data-error="" required style="width:85%;">
              <div class="help-block with-errors col-md-12" id="checker"></div>
            </div>
          </div>
          <div class="controls ">
            <button class="btn btn-success" name="submit" id="submitbtn">Submit</button>
          </div>
        </fieldset>
      </form>
    </div>
  </center>
</body>
</html>