<form method="POST" action="proses.php">
    <div class="container">
        <h3 class="mt-3">Tambah Data Mahasiswa</h3>
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
            <td>&nbsp;</td>
        </div>
        <button type="submit" class="btn btn-primary" value="submit" name="submit">Simpan</button>
    </div>
</form>