<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Login.css">
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
		<text id="salam">Silahkan Log In</text><br>
		<form action="Account.php" method="loginsupplier">
			<table>
				<tr>
					<td><input type="username" name="User_Supplier" class="inpt" placeholder="Enter Username"></td>					
				</tr>
				<tr>
					<td><input type="password" name="Pass_Supplier" class="inpt" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td><button class="btn btn-success" name="submitlogin" id="submitbtn">Login</button></td>
				</tr>
			</table>
		</form>
		<a href="ForgetPass.php" id="forgot">Forgot Your Password?</a>
		</div>
	</center>
	<div class="footer">
        <p>Copyright &copy; 2019 - All Right reserved &#9679; PT. Gudang Barang</p>
	</div>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>