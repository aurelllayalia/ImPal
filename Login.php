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
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<center>
		<div class="container" id="top">
		<text id="salam">Silahkan Log In</text><br>
		<form action="CekLogin.php" method="post">
			<table>
				<tr>
					<td><input type="text" name="username" class="inpt" placeholder="Enter Username"></td>					
				</tr>
				<tr>
					<td><input type="password" name="password" class="inpt" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td><button class="btn btn-success" name="submitlogin" id="submitbtn">Login</button></td>
				</tr>
			</table>
		</form>
		</div>
	</center>
	<div class="footer">
        <p>Copyright &copy; 2019 - All Right reserved &#9679; PT. Gudang Barang</p>
	</div>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>