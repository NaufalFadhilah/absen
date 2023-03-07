<?php
session_start();
$nama = $_SESSION['nama'];
$role = $_SESSION['role'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid d-flex row">
    <div class="d-flex align-items-center gap-3">      <?php
      echo "<h2 class='d-block'>" . $nama . "</h2>";
      echo "<h6 class='d-block'> (" . $role . ")</h6>";

      ?></div>

  </div>
</nav>
<form action="absen.php" method="POST"><button type="submit" name="absen" class="btn btn-outline-primary">
  absen 
</button></form>

<!-- Table absen -->
<table border="1" class=" col-8 table table-bordered">
  <tr border="1">
    <th>Tanggal</th>
    <th>Jam Masuk</th>
    <th>Jam Keluar</th>
    <th>Keterangan</th>
  </tr>
  <?php include('data_absen.php');?>
</table>
<!-- end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
<style>
  table {
  overflow-y: scroll !important;
  height: 70vh !important;
  width: 80%!important;
  display: block !important;
}

</style>