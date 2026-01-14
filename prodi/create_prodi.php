<form method="POST" action="proses.php">
    <h3>Tambah Prodi</h3>
    <div class="mb-3"><label>Nama Prodi</label><input type="text" class="form-control" name="nama_prodi" required></div>
    <div class="mb-3">
        <label>Jenjang</label>
        <select name="jenjang" class="form-select"><option value="D2">D2</option><option value="D3">D3</option><option value="D4">D4</option><option value="S2">S2</option></select>
    </div>
    <div class="mb-3"><label>Keterangan</label><textarea class="form-control" name="keterangan"></textarea></div>
    <button type="submit" name="submit_prodi" class="btn btn-primary">Simpan</button>
</form>