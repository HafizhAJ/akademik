<?php
require 'koneksi.php';

if (isset($_POST['submit_mhs'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $tgl = $_POST['tgl_lahir'];
    $alm = $_POST['alamat'];
    $prodi = $_POST['prodi_id'];
    $koneksi->query("INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, alamat, prodi_id) VALUES ('$nim', '$nama', '$tgl', '$alm', '$prodi')");
    header("Location: index.php?page=datamahasiswa");
}

if (isset($_POST['update_mhs'])) {
    $nim_lama = $_POST['nim_lama'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $tgl = $_POST['tgl_lahir'];
    $alm = $_POST['alamat'];
    $prodi = $_POST['prodi_id'];
    $koneksi->query("UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama', tgl_lahir='$tgl', alamat='$alm', prodi_id='$prodi' WHERE nim='$nim_lama'");
    header("Location: index.php?page=datamahasiswa");
}

if (isset($_GET['nim_hapus'])) {
    $nim = $_GET['nim_hapus'];
    $koneksi->query("DELETE FROM mahasiswa WHERE nim = '$nim'");
    header("Location: index.php?page=datamahasiswa");
}

if (isset($_POST['submit_prodi'])) {
    $nama = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $ket = $_POST['keterangan'];
    $koneksi->query("INSERT INTO prodi (nama_prodi, jenjang, keterangan) VALUES ('$nama', '$jenjang', '$ket')");
    header("Location: index.php?page=dataprodi");
}

if (isset($_POST['update_prodi'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $ket = $_POST['keterangan'];
    $koneksi->query("UPDATE prodi SET nama_prodi='$nama', jenjang='$jenjang', keterangan='$ket' WHERE id='$id'");
    header("Location: index.php?page=dataprodi");
}

if (isset($_GET['hapus_prodi'])) {
    $id = $_GET['hapus_prodi'];
    $koneksi->query("DELETE FROM prodi WHERE id = '$id'");
    header("Location: index.php?page=dataprodi");
}
?>