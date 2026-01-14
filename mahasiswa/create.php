<form method="POST" action="proses.php">
    <h3>Tambah Mahasiswa</h3>
    <div class="mb-3"><label>NIM</label><input type="text" class="form-control" name="nim" required></div>
    <div class="mb-3"><label>Nama</label><input type="text" class="form-control" name="nama_mhs" required></div>
    <div class="mb-3">
        <label>Prodi</label>
        <select name="prodi_id" class="form-select">
            <?php
            require 'koneksi.php';
            $p = $koneksi->query("SELECT * FROM prodi");
            while($row = $p->fetch_assoc()) echo "<option value='".$row['id']."'>".$row['nama_prodi']."</option>";
            ?>
        </select>
    </div>
    <div class="mb-3"><label>Tanggal Lahir</label><input type="date" class="form-control" name="tgl_lahir"></div>
    <div class="mb-3"><label>Alamat</label><textarea class="form-control" name="alamat"></textarea></div>
    <button type="submit" name="submit_mhs" class="btn btn-primary">Simpan</button>
</form>