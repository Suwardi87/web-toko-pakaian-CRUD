<?php

session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "gimi_hijab_store");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gimi Hijab</title>
    <link rel="icon" href="Image/logo.png" type="">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="back">
        <div class="menu">
            <div class="box">
                <img src="image/logo.png" width="100" class="logoph" alt="">
                <div class="menulist">
                    <a href="">Home</a>
                    <a href="index.php">Produk</a>
                    <a href="">Contact</a>
                    <!-- <a href="lokasi.php">Lokasi</a>     -->
                </div>
            </div>
        </div>
        <div class="banner-text">
            <h1><span class="bold"></span></h1><br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <a href="login.php" class="btn-register">Sign in</a><br>
            <br>
            <a href="daftar.php" class="btn-register">Sign up</a>

        </div>
    </div>
    </div>
    <!-- End Big banner -->
    <!-- Featur-->
    <div class="feature">
        <div class="box">
            <div class="col-3">
                <img src="Image/donation%20(1).png" alt="">
                <h3>Pembayaran</h3>
                <p>Kamu bisa membayar melalui Via transfer</p>
            </div>
            <div class="col-3">
                <img src="Image/clothes-donation.png" alt="">
                <h3>Kualitas Baju</h3>
                <p>Bagus,Nyaman,Harga merakyat</p>

            </div>
            <div class="col-3">
                <img src="Image/donation%20(2).png" alt="">
                <h3>Donasi Makanan</h3>
                <p>Berbagi itu indah</p>
            </div>
        </div>
    </div>
    <!-- End Feature -->

</body>

</html>