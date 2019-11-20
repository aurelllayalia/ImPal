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
