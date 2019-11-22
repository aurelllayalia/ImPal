<!DOCTYPE html>
<html>
<head>
  <title>Supplier - Barang</title>
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
        </tr> 
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