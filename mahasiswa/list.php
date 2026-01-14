<h3 class="mt-3">Daftar Mahasiswa</h3>
<a href="index.php?page=create" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <thead>
        <tr><th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Tgl Lahir</th><th>Alamat</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        <?php
            require 'koneksi.php';
            $res = $koneksi->query("SELECT m.*, p.nama_prodi FROM mahasiswa m LEFT JOIN prodi p ON m.prodi_id = p.id");
            $no = 1;
            while($d = $res->fetch_assoc()){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nim']; ?></td>
            <td><?= $d['nama_mhs']; ?></td>
            <td><?= $d['nama_prodi'] ?? '-'; ?></td>
            <td><?= $d['tgl_lahir']; ?></td>
            <td><?= $d['alamat']; ?></td>
            <td>
                <a class="btn btn-warning btn-sm" href="index.php?page=edit&nim=<?= $d['nim']; ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="proses.php?nim_hapus=<?= $d['nim']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>