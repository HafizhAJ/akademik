<?php 
require 'koneksi.php';
$id_get = $_GET['id'];
$d = $koneksi->query("SELECT * FROM prodi WHERE id = '$id_get'")->fetch_assoc();
?>
<form method="POST" action="proses.php">
    <h3>Edit Program Studi</h3>
    <div class="mb-3">
        <label class="form-label">No</label>
        <input type="text" class="form-control bg-light" name="id" value="<?= $d['id']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" name="nama_prodi" value="<?= $d['nama_prodi']; ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenjang</label>
        <select name="jenjang" class="form-select">
            <?php 
            foreach(['D2','D3','D4','S2'] as $l) { 
                $s = ($d['jenjang'] == $l) ? "selected" : ""; 
                echo "<option value='$l' $s>$l</option>"; 
            } 
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" name="keterangan"><?= $d['keterangan']; ?></textarea>
    </div>
    <button type="submit" name="update_prodi" class="btn btn-success">Simpan Perubahan</button>
    <a href="index.php?page=dataprodi" class="btn btn-secondary">Batal</a>
</form>