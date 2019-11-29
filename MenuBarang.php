<!DOCTYPE html>
<html>
<head>
  <title>Staff - Barang</title>
    <link href="User/css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="User/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="User/css/jquery.dataTables.min.css" rel="stylesheet">
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
  <div class="row">
    <div class="col-lg-8 ml-auto mr-auto">
      <h3>Data Barang</h3>
      <table id="example" class="display" style="width:100%">
      <thead>
        <th>No</th>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Jenis Barang</th>
        <th>Jumlah Barang</th>
        <th>Foto Barang</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
          include "config.php";
          $no = 1;
          $sql = "SELECT * FROM barang ORDER BY ID_Barang";
          $query=$conn->query($sql);
        ?>
        <?php while ($data= $query->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $data['ID_Barang'] ?></td>
          <td><?php echo $data['Nama_Barang'] ?></td>
          <td><?php echo $data['Harga_Barang'] ?></td>
          <td><?php echo $data['Jenis_Barang'] ?></td>
          <td><?php echo $data['Jumlah_Barang'] ?></td>
          <td><?="<img src='Foto/".$data['Foto_Barang']."'style='width:50px; height:50px;'>"?></td>
          <td>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['ID_Barang'] ?>"><i class="fas fa-trash-alt">Delete</i></button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $data['ID_Barang'] ?>"><i class="fas fa-edit">Update</i></button>
          </td>
        </tr> 
        <div class="modal fade" id="edit<?php echo $data['ID_Barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['ID_Barang'] ?></h5>
                <form method="POST" action="FunctionUbahBarang.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Barang</label>
                  <input type="text" class="form-control" name="ID_Barang" readonly="readonly" value="<?php echo $data['ID_Barang'] ?>">
                  <input type="text" style="display: none;" name="ID_Barang" value="<?php echo $data['ID_Barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Barang</label>
                  <input type="text" class="form-control" name="Nama_Barang" value="<?php echo $data['Nama_Barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Barang</label>
                  <input type="text" class="form-control" name="Harga_Barang" value="<?php echo $data['Harga_Barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Barang</label>
                  <input type="text" class="form-control" name="Jenis_Barang" value="<?php echo $data['Jenis_Barang'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Barang</label>
                  <input type="text" class="form-control" name="Jumlah_Barang" value="<?php echo $data['Jumlah_Barang'] ?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                </form>                        
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="del<?php echo $data['ID_Barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Barang <?php echo $data['ID_Barang'] ?> ?</h5>
              </div>
              <div class="modal-footer">
                <form method="POST" action="FunctionUbahBarang.php">
                  <input type="text" style="display: none;" name="ID_Barang" value="<?php echo $data['ID_Barang'] ?>">
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
