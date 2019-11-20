<!DOCTYPE html>
<html>
<head>
  <title>Staff - Barang</title>
  <link href="User/css/bootstrap-4.0.0.css" rel="stylesheet">
  <link href="User/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="User/css/jquery.dataTables.min.css" rel="stylesheet">
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="NavigasiStaff.css">
  <link rel="stylesheet" type="text/css" href="MenuStaff.css">
</head>
<body>
  <?php
   include "NavigasiStaff.php";
  ?>
  <br>
  <br>
  <br>
  <br>
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
  <center>
  <form class="" action="FunctionCreateBarang.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label >ID Barang</label>
    <input type="ID_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan ID Barang" name="ID_Barang" >
  </div>
  <div class="form-group">
    <label >Nama Barang</label>
    <input type="Nama_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Nama Barang" name="Nama_Barang">
  </div>
  <div class="form-group">
    <label >Harga Barang</label>
    <input type="Harga_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Harga Barang" name="Harga_Barang">
  </div>
    <div class="form-group">
    <label >Jenis Barang</label>
    <input type="Jenis_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Jenis Barang" name="Jenis_Barang">
  </div>
    <div class="form-group">
    <label >Jumlah Barang</label>
    <input type="Jumlah_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Jumlah Barang" name="Jumlah_Barang">
  </div>
  <button type="submit" name="TambahBarang"> Tambah </button>
  <br/>
  <br/>
  </form>
  </center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</body>
</html>
