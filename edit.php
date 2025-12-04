<?php 
require 'koneksi.php';

$nim = $_GET['nim'];
$query_select = "SELECT * FROM mahasiswa WHERE nim = $nim";
$result_select = $koneksi->query($query_select);
$data = mysqli_fetch_assoc($result_select);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<form method="POST" action="proses.php">
    <div class="container">
        <h3 class="mt-3">Edit Data Mahasiswa</h3>
        <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" value="<?= $data['nim']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="<?= ($data['nama_mhs']); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= ($data['tgl_lahir']); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"><?= ($data['alamat']); ?></textarea>
            <td>&nbsp;</td>
        </div>
        
        <button type="submit" class="btn btn-success" value="update" name="update">Ubah Data</button>
        <a href="index.php?page=bukutamu" class="btn btn-secondary">Batal</a>
    </div>
</form>