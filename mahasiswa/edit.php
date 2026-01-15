<?php 
require 'koneksi.php';
$nim_get = $_GET['nim'];
$d = $koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$nim_get'")->fetch_assoc();
?>
<form method="POST" action="proses.php">
    <h3>Edit Mahasiswa</h3>
    <input type="hidden" name="nim_lama" value="<?= $d['nim']; ?>">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" value="<?= $d['nim']; ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mhs" value="<?= $d['nama_mhs']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select name="prodi_id" class="form-select">
            <?php
            $prodi = $koneksi->query("SELECT * FROM prodi");
            while($p = $prodi->fetch_assoc()){
                $s = ($p['id'] == $d['prodi_id']) ? "selected" : "";
                echo "<option value='".$p['id']."' $s>".$p['nama_prodi']."</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?= $d['tgl_lahir']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"><?= $d['alamat']; ?></textarea>
    </div>
    <button type="submit" name="update_mhs" class="btn btn-success">Simpan Perubahan</button>
    <a href="index.php?page=datamahasiswa" class="btn btn-secondary">Batal</a>
</form>