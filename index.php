<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header ("Location: login.php");
        exit;
    }
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">DATA AKADEMIK</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.php?page=home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=datamahasiswa">Data Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=dataprodi">Data Prodi</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-circle"></i>
                            <?= $_SESSION['nama_lengkap']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="index.php?page=profil">
                                Edit Profil
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
    </nav>
    <div class="container my-4">
       <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if($page == 'home') include 'home.php';
            elseif($page == 'datamahasiswa') include 'mahasiswa/list.php';
            elseif($page == 'create') include 'mahasiswa/create.php';
            elseif($page == 'edit') include 'mahasiswa/edit.php';
            elseif($page == 'dataprodi') include 'prodi/list_prodi.php';
            elseif($page == 'create_prodi') include 'prodi/create_prodi.php';
            elseif($page == 'edit_prodi') include 'prodi/edit_prodi.php';
            elseif($page == 'profil') include 'profil.php';
        ?>
    </div>
</body>
</html>