<!DOCTYPE html>
<html>
<head>
  <title>Supplier - Request</title>
  <link href="User/css/bootstrap-4.0.0.css" rel="stylesheet">
  <link href="User/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="User/css/jquery.dataTables.min.css" rel="stylesheet">
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
  <div class="row">
    <div class="col-lg-8 ml-auto mr-auto">
      <h3>Data Request</h3>
      <table id="example" class="display" style="width:100%">
      <thead>
        <th>No</th>
        <th>ID Request</th>
        <th>Keterangan</th>
        <th>Konfirmasi</th>
        <th>ID Supplier</th>
        <th>ID Barang</th>
        <th>Action</th>
      </thead>
      <tbody>
      <?php
        include "config.php";
        $no = 1;
        $sql = "SELECT * FROM request ORDER BY ID_Request";
        $query=$conn->query($sql);
      ?>
      <?php while ($data= $query->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['ID_Request'] ?></td>
        <td><?php echo $data['Keterangan'] ?></td>
        <td><?php echo $data['Konfirmasi'] ?></td>
        <td><?php echo $data['ID_Supplier'] ?></td>
        <td><?php echo $data['ID_Barang'] ?></td>
        <td>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['ID_Request'] ?>"><i class="fas fa-trash-alt">Delete</i></button>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $data['ID_Request'] ?>"><i class="fas fa-edit">Update</i></button>
        </td>
      </tr> 
      <div class="modal fade" id="edit<?php echo $data['ID_Request'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['ID_Request'] ?></h5>
              <form method="POST" action="FunctionUbahRequest.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Request</label>
                  <input type="text" class="form-control" name="ID_Request" readonly="readonly" value="<?php echo $data['ID_Request'] ?>">
                  <input type="text" style="display: none;" name="ID_Request" value="<?php echo $data['ID_Request'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" class="form-control" name="Keterangan" value="<?php echo $data['Keterangan'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Konfirmasi</label>
                  <input type="text" class="form-control" name="Konfirmasi" value="<?php echo $data['Konfirmasi'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Supplier</label>
                  <input type="text" class="form-control" name="ID_Supplier" value="<?php echo $data['ID_Supplier'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ID Barang</label>
                  <input type="text" class="form-control" name="ID_Barang" value="<?php echo $data['ID_Barang'] ?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
              </form>                        
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="del<?php echo $data['ID_Request'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?php echo $data['ID_Request'] ?> ?</h5>
            </div>
            <div class="modal-footer">
              <form method="POST" action="FunctionUbahRequest.php">
                <input type="text" style="display: none;" name="ID_Request" value="<?php echo $data['ID_Request'] ?>">
                <button type="submit" name="delete" class="btn btn-danger">YA</a>
              </form>
              <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
            </div>
          </div>
        </div>
      </div>
      <?php
        $no = $no+1; }
      ?>          
      </tbody>
      </table>
    </div>
  </div>
  <script defer src="User/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <script src="User/js/jquery-3.2.1.min.js"></script>
  <script src="User/js/jquery.dataTables.min.js"></script>
  <script src="User/js/popper.min.js"></script>
  <script src="User/js/bootstrap-4.0.0.js"></script>
  <script src="User/js/popper.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        "columns": [
          { "width": "1%"},
            null,
            null,
            null,
          { "width": "10%"}
        ]
      });
    } );
  </script>
</body>
</html>