<?php
include("../../connect.php");
session_start();
if(isset($_POST['absen'])){
    date_default_timezone_set("Asia/Makassar");
    $nisn = $_SESSION['nisn'];
    $tanggal = date('Y-m-d');
    $masuk = date("H:i:s");
    $tambah = "INSERT INTO `absensi` (`id`, `nisn`,`tanggal`, `masuk`, `keluar`) VALUES (NULL, '$nisn', '$tanggal', '$masuk', NULL)";
    $result = $conn->query($tambah);
    header("location:index.php");
    }


?>