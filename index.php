<?php
// session_start();
// if(isset($_SESSION['data'])){
//     if($_SESSION['role'] == "admin"){
//         header("location:admin/");
//     } else {
//         header("location:siswa/");
//     }
// }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body class="bg-dark">

<div class="container d-flex justify-content-center align-items-center">
<form class="col-5 px-2 py-4 gap-3 d-flex flex-column align-items-center" action="login.php" method="POST">
    <h2 class="text-light">LOGIN</h2>
    <div class="input gap-3 col-8 d-flex flex-column">    <label for="">NISN</label>
    <input type="number" name="nisn" required></div>
    <div class="input gap-3 col-8 d-flex flex-column">
    <label for="">Password</label>
    <input type="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-outline-primary mt-3 text-light col-8" value="" name="login">masuk</button>
</form>
</div>
<!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="home.js"></script>
</body>
</html>