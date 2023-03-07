<?php

require_once "connect.php";
include("siswa.php");
session_start();
$siswa = new Siswa();

if(isset($_POST['login'])){
    $siswa->set_login_data($_POST['nisn'], $_POST['password']);
    $nisn = $siswa->get_nisn();
    $password = $siswa->get_password();

    $result = $conn->query("SELECT * FROM siswa where nisn=$nisn AND password='$password'");
    if($result->num_rows > 0){
        while ($data = $result->fetch_assoc()) {
            $_SESSION['nisn'] = $data['nisn'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['data'] = "login";
            if($data['role'] == 'admin'){
                header("location:dashboard/admin/");
            } else{
                header("location:dashboard/siswa/");
            }
        }
    } else {
        header("location:index.php?data salah");
    }

}

?>