<?php
	include 'config.php';
	function signup() {
		include "koneksi.php";
		$sql = "INSERT INTO supplier (User_Supplier,Pass_Supplier,Nama_Supplier,Email_Supplier) VALUES ('{$_POST['User_Supplier']}', '{$_POST['Pass_Supplier']}', '{$_POST['Nama_Supplier']}', '{$_POST['Email_Supplier']}')";
		if ($conn->query($sql) === TRUE) {
			$message = "Berhasil Sign Up. Silahkan Log In";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=Login.php');
		}
		else {
			$message = "Gagal Sign Up. Silahkan Sign Up Ulang";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=Signup.php');
		}
		$conn->close();	
	}
	
	function forgetpass(){
		include "koneksi.php";
		$sql = "SELECT User_Supplier FROM supplier WHERE User_Supplier = '{$_POST['User_Supplier']}'";
		$result = $conn->query($sql);
		if ($result->num_rows == 1) {
			$sql = "UPDATE supplier SET password ='123456' WHERE User_Supplier ='{$_POST['User_Supplier']}' ";
			if ($conn->query($sql) === TRUE) {
				$message = "Password Sudah Di Reset";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header('Refresh: ; url=Login.php');
			}
			else {
				$message = "Username Tidak Terdaftar";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header('Refresh: ; url=Signup.php');
			}
   		} 
    	else if ($result->num_rows != 1)  {
    		$message = "Username Tidak Terdatar";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=ForgetPass.php');
		}
		$conn->close();
	}

	function loginsupplier(){
		include "koneksi.php";
		$sql = "SELECT User_Supplier,Pass_Supplier FROM supplier WHERE User_Supplier = '{$_POST['User_Supplier']}' AND Pass_Supplier = '{$_POST['Pass_Supplier']}'";
		$result = $conn->query($sql);
		if ($result->num_rows == 1) {
     		session_start();
     		$_SESSION['supplier'] = $_POST['User_Supplier'];
     		header("Location: MenuSupplier.php");
    	} 
    	else if(($_POST['User_Supplier']=='User_Supplier') AND ($_POST['Pass_Supplier']=='Pass_Supplier')){
 			header("Location: MenuSupplier.php");
 		}
    	else if ($result->num_rows != 1)  {
     		$message = "Username Atau Password Salah";
			echo "<script type='text/javascript'>alert('$message');</script>";
     		header('Refresh: ; url=Login.php');
		}
		$conn->close();
	}

	if (isset($_POST['daftar'])) {
		signup();
	}

	if (isset($_POST['submit'])) {
		forgetpass();
	}

	if (isset($_POST['submitlogin'])) {
		loginsupplier();
	}
?>