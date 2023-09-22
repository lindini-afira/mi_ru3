<?php

    include 'koneksi.php';
    
    date_default_timezone_set("Asia/Jakarta");
    $identitas = mysqli_query($conn, "SELECT *FROM pengaturan ORDER BY id DESC LIMIT 1");
    $d  = mysqli_fetch_object($identitas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website <?= $d->nama?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
    <script src="fontawosome/all.js"></script>
</head>
<body>

    <!-- box menu -->

    <div class="box-menu-mobile" id="mobilMenu">
        <span onclick="hideMobileMenu()">Close</span>
        <ul class>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="informasi.php">Informasi</a></li>                
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>

    <!-- header -->
    <div class="header">

        <div class="container">

            <div class="header-logo">
                <img src="uploads/identitas/<?= $d->logo ?>" width="80px">
                <h2><a href="index.php"><?= $d->nama ?></a></h2>
            </div>

            <ul class="header-menu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>

            <div class="mobile-menu-btn text-center">
                <a href="#" onclick="showMobileMenu()">Menu</a>
            </div>
            
        </div>
    </div>