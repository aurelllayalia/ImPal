<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="HomePage.css">
	<link rel="stylesheet" type="text/css" href="Navigasi.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php 
	session_start();
	if (isset($_SESSION['supplier'])) {
		include 'HeaderLogin.php';
	}
	else {
		include 'Header.php';
	}
	?>
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
    	<!-- Slide One -->
    	<div class="carousel-item active" style="background-image: url(Foto/Warehouse1.jpg)">
    	<div class="carousel-caption d-none d-md-block">
        	<h2 class="display-4">Our Company</h2>
        	<p class="lead">PT. Gudang Barang adalah tempat pergudangan khusus untuk supplier online shopping.</p>
        </div>
    	</div>
    	<!-- Slide Two -->
    	<div class="carousel-item" style="background-image: url(Foto/Warehouse2.jpg)">
        <div class="carousel-caption d-none d-md-block">
        	<h2 class="display-4">Our Benefit</h2>
        	<p class="lead">PT. Gudang Barang memudahkan anda mendapatkan tempat pergudangan untuk barang dagangan anda.</p>
        </div>
    	</div>
    	<!-- Slide Three -->
    	<div class="carousel-item" style="background-image: url(Foto/Warehouse6.jpg)">
        <div class="carousel-caption d-none d-md-block">
        	<h2 class="display-4">Our Relation</h2>
        	<p class="lead">Segera bergabung dengan PT. Gudang Barang!!!</p>
        </div>
    	</div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
	</div>
	</br>
	</br>
	</br>
	<center>
	<div class="w3-container w3-center w3-animate-top">
		<div id="middle" class="container">
			<h1 id="header1">Aplikasi Pergudangan Online Shopping</h1>
		</div>
	</div>
	<br/>
	<div class="w3-container w3-center w3-animate-bottom">
		<img class="img-responsive" src="Foto/Camel2.png" id="camel" >
	</div>
	<br/>
	<div class="w3-container w3-center w3-animate-bottom">
		<div class="container" id="middle">
			<p id="intro">
				PT. Gudang Barang berdiri pada tahun 2019 di Telkom University.
				PT. Gudang Barang dikelola oleh lima orang programmer kami.
				PT. Gudang Barang memiliki maskot hewan unta yang bernama Camerudin.
			</p>
		</div>
	</div>
	</center>
    </br>
    </br>
    </br>
	</br>
    </br>
    </br>
	</br>
    </br>
    </br>
	</br>
    </br>
    </br>
	</br>
    </br>
    </br>
	</br>
	<center>
	<div id="middle" class="container">
		<h1 id="header1">Our Team</h1>
	</div>
	</br>
    <div class="container marketing" id="top">
    <div class="row">
    <div class="col-lg-4">
    	<img class="rounded-circle" src="Foto/Kitty.png" id="khusus">
		<h2>Aurell</h2>
	</div>
    <div class="col-lg-4">
    <img class="rounded-circle" src="Foto/Fox.png" id="khusus">
    	<h2>Brigita</h2>
	</div>
    <div class="col-lg-4">
    	<img class="rounded-circle" src="Foto/Hawk.png" id="khusus">
        <h2>Alex</h2>
	</div>
    <div class="col-lg-4">
    	<img class="rounded-circle" src="Foto/Richard.png" id="khusus">
        <h2>Febriansyah</h2>
  	</div>
    <div class="col-lg-4">
    	<img class="rounded-circle" src="Foto/Puppy.png" id="khusus">
        <h2>Hary</h2>
  	</div>
	</div>
	<div class="container" id="middle">
	<p id="intro">
		Team Programmer kami yang mengelola Aplikasi Pergudangan Online Shopping milik PT. Gudang Barang.
	</p>
	</div>
	</center>
	</br>
    </br>
    </br>
	</br>
	<div class="footer">
        <p>Copyright &copy; 2019 - All Right reserved &#9679; PT. Gudang Barang</p>
    </div>
</body>
</html>