<?php
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../login.php?msg=Harap Login Dahulu'</script>";
    }

    date_default_timezone_set("Asia/Jakarta");
    $identitas = mysqli_query($conn, "SELECT *FROM pengaturan ORDER BY id DESC LIMIT 1");
    $d  = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - <?= $d-> nama ?></title>
    <link rel="icon" href="../uploads/identitas/<?= $d->favicon ?>">
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</head>
<body class="bg-light">
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <!-- nav brand -->
            <h2 class="navbar-brand float-left"></h2>

            <!-- nav menu -->
            <ul class="nav-menu float-left">
                <li><a href="index.php">Dashboard</a></li>

                <?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

                <li><a href="pengguna.php">Pengguna</a></li> 

                <?php }elseif($_SESSION['ulevel'] == 'Admin'){ ?>
                <li><a href="pengguna.php">Pengguna</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li>
                    <a href="#">Pengaturan <i class="fa fa-caret-down"></i></a>

                    <!-- sub-menu -->
                    <ul class="dropdown">
						<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
						<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
						<li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
					</ul>
                </li>

                <?php } ?>
                <li>
                    <a href="#"><?= $_SESSION['uname']?>(<?= $_SESSION['ulevel']?>) <i ></i></a>

                    <!-- sub-menu -->
                    <ul class="dropdown">
                        <li><a href="ubah-password.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>