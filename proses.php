<?php
require 'koneksi.php';

//create
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, alamat)
              VALUES ($nim, '$nama_mhs', '$tgl_lahir', '$alamat')";

    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?=success");
        exit;
    } else {
        header("Location: create.php?=error");
        exit;
    }
}

//edit
if (isset($_POST['update'])) {
    $nim = $_POST['nim']; 
    $nama_mhs = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $query_update = "UPDATE mahasiswa SET nama_mhs='$nama_mhs', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE nim=$nim";
    $sql = $koneksi->query($query_update);

    if ($sql) {
        header("Location: index.php?=success");
        exit;
    } else {
        header("Location: edit.php?=error");
        exit;
    }
}

//delete
if (isset($_GET['nim_hapus'])) {
    $nim = $_GET['nim_hapus'];
    $query = "DELETE FROM mahasiswa WHERE nim = $nim";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?=success");
        exit();
    } else {
        header("Location: index.php?=error"); 
        exit();
    }
}

header("Location: index.php");
exit;
?>