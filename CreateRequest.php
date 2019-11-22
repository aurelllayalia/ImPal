<!DOCTYPE html>
<html>
<head>
  <title>Supplier - Request</title>
  <link href="User/css/bootstrap-4.0.0.css" rel="stylesheet">
  <link href="User/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="User/css/jquery.dataTables.min.css" rel="stylesheet">
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="NavigasiSupplier.css">
  <link rel="stylesheet" type="text/css" href="MenuSupplier.css">
</head>
<body>
  <?php
    include "NavigasiSupplier.php";
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
  <form class="" action="FunctionCreateRequest.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label >ID Request</label>
      <input type="ID_Request" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan ID Request" name="ID_Request" >
    </div>
    <div class="form-group">
      <label >Keterangan</label>
      <input type="Keterangan" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Keterangan" name="Keterangan">
    </div>
    <div class="form-group">
      <label >Konfirmasi</label>
      <input type="Konfirmasi" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan Konfirmsi" name="Konfirmasi">
    </div>
    <div class="form-group">
      <label >ID Supplier</label>
      <input type="ID_Supplier" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan ID Supplier" name="ID_Supplier">
    </div>
    <div class="form-group">
      <label >ID Barang</label>
      <input type="ID_Barang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan ID Barang" name="ID_Barang">
    </div>
    <button type="submit" name="tambahrequest"> Tambah </button><br/> <br/>
  </form>
  </center>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</body>
</html>                                                                                                 
