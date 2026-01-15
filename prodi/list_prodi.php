<h3 class="mt-3">Daftar Program Studi</h3>
<a href="index.php?page=create_prodi" class="btn btn-primary mb-3">Tambah Prodi</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Jenjang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require 'koneksi.php';
            $res = $koneksi->query("SELECT * FROM prodi");
            $no = 1;
            while($d = $res->fetch_assoc()){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_prodi']; ?></td>
            <td><?= $d['jenjang']; ?></td>
            <td><?= $d['keterangan']; ?></td>
            <td>
                <a class="btn btn-warning btn-sm" href="index.php?page=edit_prodi&id=<?= $d['id']; ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="proses.php?hapus_prodi=<?= $d['id']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>