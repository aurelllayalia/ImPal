<!DOCTYPE html>
<html>
<head>
  <title>Product</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Product.css">
  <link rel="stylesheet" type="text/css" href="Navigasi.css">
  <style type="text/css">
    .card {
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <?php 
    include 'config.php';
    session_start();
    if (isset($_SESSION['barang'])) {
      include 'HeaderLogin.php';
    }
    else {
      include 'Header.php';
    }
  $sql = "SELECT * FROM barang";
  $items = $conn->query($sql);
  ?>
  <br/>
  <br/>
  <br/>
  <div class="album py-5 ">
    <div class="container"  >
      <div class="row">
        <?php foreach($items as $item) :?> 
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <center>
              <a href="#"><img class="card-img-top" src=<?php echo "Foto/".$item['Foto_Barang'];  ?> alt="Card image cap" style="height: 200px; width: 200px; margin-top: 25px"></a>
            </center>
            <div class="card-body">
              <center>
                <p class="card-text"><?php echo $item['Nama_Barang']; ?><br>Rp. <?php echo $item['Harga_Barang']; ?>
                  <div class="collapse" id="coll<?php echo $item['ID_Barang'] ?>">
                    <div class="card card-body">
                      <?php echo $item['deskripsi']; ?>
                    </div>
                  </div>
                </p>
              </center>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: 20px">
                <small class="text-muted">Stock : <?php echo $item['Jumlah_Barang']; ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <nav style="margin-top: 25px; margin-left: 75%">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>    
    </div>
  </div>
  <div class="footer">
    <p>Copyright &copy; 2019 - All Right reserved &#9679; PT. Gudang Barang</p>
  </div>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>
