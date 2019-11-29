<?php 
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);
		if($data['posisi']=="staff"){
			$_SESSION['username'] = $username;
			$_SESSION['posisi'] = "staff";
			header("location:MenuStaff.php");
		}
		else if($data['posisi']=="supplier"){
			$_SESSION['username'] = $username;
			$_SESSION['posisi'] = "supplier";
			header("location:MenuSupplier.php");
		}
		else{
			$message = "Username Atau Password Salah";
        	echo "<script type='text/javascript'>alert('$message');</script>";
        	header('Refresh: ; url=Login.php');
		}	
	}
	else{
		$message = "Username Atau Password Salah";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: ; url=Login.php');
}
?>