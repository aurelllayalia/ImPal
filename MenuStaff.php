<!DOCTYPE html>
<html>
<head>
	<title>Staff - Supplier</title>
    <link href="User/css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="User/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="User/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="MenuStaff.css">
    <link rel="stylesheet" type="text/css" href="NavigasiStaff.css">
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
      <h3>Data Supplier</h3>
	    <table id="example" class="display" style="width:100%">
		  <thead>
        <th>No</th>
        <th>ID Supplier</th>
			  <th>Username Supplier</th>
			  <th>Password Supplier</th>
        <th>Nama Supplier</th>
			  <th>Email Supplier</th>
        <th>Foto Supplier</th>
			  <th>Action</th>
		  </thead>
		  <tbody>
			  <?php
          include "config.php";
          $no = 1;
          $sql = "SELECT * FROM supplier ORDER BY ID_Supplier";
          $query=$conn->query($sql);
        ?>
        <?php while ($data= $query->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $data['ID_Supplier'] ?></td>
          <td><?php echo $data['User_Supplier'] ?></td>
          <td><?php echo $data['Pass_Supplier'] ?></td>
          <td><?php echo $data['Nama_Supplier'] ?></td>
          <td><?php echo $data['Email_Supplier'] ?></td>
          <td><?="<img src='Foto/".$data['Foto_Supplier']."'style='width:50px; height:50px;'>"?></td>
          <td>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['ID_Supplier'] ?>"><i class="fas fa-trash-alt">Delete</i></button>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $data['ID_Supplier'] ?>"><i class="fas fa-edit">Update</i></button>
          </td>
        </tr> 
        <div class="modal fade" id="edit<?php echo $data['ID_Supplier'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['User_Supplier'] ?></h5>
                <form method="POST" action="FunctionUbahSupplier.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Supplier</label>
                  <input type="text" class="form-control" name="ID_Supplier" readonly="readonly" value="<?php echo $data['ID_Supplier'] ?>">
                  <input type="text" style="display: none;" name="ID_Supplier" value="<?php echo $data['ID_Supplier'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" class="form-control" name="User_Supplier" value="<?php echo $data['User_Supplier'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="Pass_Supplier" value="<?php echo $data['Pass_Supplier'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="Nama_Supplier" value="<?php echo $data['Nama_Supplier'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" name="Email_Supplier" value="<?php echo $data['Email_Supplier'] ?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                </form>                        
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="del<?php echo $data['ID_Supplier'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data <?php echo $data['ID_Supplier'] ?> ?</h5>
              </div>
              <div class="modal-footer">
                <form method="POST" action="FunctionUbahSupplier.php">
                  <input type="text" style="display: none;" name="ID_Supplier" value="<?php echo $data['ID_Supplier'] ?>">
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