<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Signup.css">
  <link rel="stylesheet" type="text/css" href="Navigasi.css">
</head>
<body>
  <?php 
    include "Header.php";
  ?>
  <br/>
  <br/>
  <center>
    <div class="container" id="top">
      <div class="row">
        <div class="col-lg-12" >
          <form data-toggle="validator" role="form" action="Account.php" method="signup">
            <fieldset>
              <div class="legend">
                <legend class="">Silahkan Sign Up</legend>
              </div>
              <br/>
              <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                  <input type="username" id="inputUsername" name="User_Supplier" placeholder="Username" class="form-control input-lg" style="width:85%;">
                </div>
              </div>
              <br/>
              <div class="form-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" id="inputPassword" name="Pass_Supplier" placeholder="Minimum 6 character" data-minlength="6" class="form-control" data-error="Password Maksimal 6 Karakter" required style="width:85%;">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <br/>
              <div class="form-group ">
                <label class="control-label">Nama</label>
                <div class="controls">
                  <input type="nama" id="inputNama" name="Nama_Supplier" placeholder="Nama" class="form-control input-lg" style="width:85%;">
                  <div class="help-block with-errors col-md-12"></div>
                </div>
              </div>
              <br/>
              <div class="form-group ">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="email" id="inputEmail" name="Email_Supplier" placeholder="Email" class="form-control input-lg" data-error="Email address anda tidak valid" required style="width:85%;">
                  <div class="help-block with-errors col-md-12"></div>
                </div>
              </div>
              <br/>        
              <div class="control-group">
                <div class="controls ">
                  <button class="btn btn-success" name="daftar">Sign Up</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div> 
      </div>
    </div>	
  </center>
  <div class="footer">
    <p>Copyright &copy; 2019 - All Right reserved &#9679; PT. Gudang Barang</p>
  </div>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-validator-master/dist/validator.js"></script>
  <script type="text/javascript" src="js/bootstrap-validator-master/dist/validator.min.js"></script>
</body>
</html>