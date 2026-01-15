<?php
require 'koneksi.php';
$email = $_SESSION['email'];
$user = $koneksi->query("SELECT * FROM pengguna WHERE email = '$email'")->fetch_assoc();
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h4 class="text-primary mb-4">Edit Profil Pengguna</h4>
                
                <?php if (isset($_SESSION['profile_success'])) : ?>
                    <div class="alert alert-success small"><?= $_SESSION['profile_success']; ?></div>
                    <?php unset($_SESSION['profile_success']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['profile_error'])) : ?>
                    <div class="alert alert-danger small"><?= $_SESSION['profile_error']; ?></div>
                    <?php unset($_SESSION['profile_error']); ?>
                <?php endif; ?>

                <form method="POST" action="proses.php">
    <div class="mb-3">
        <label class="small text-muted">Email (tidak bisa diubah)</label>
        <input type="email" class="form-control bg-light" value="<?= $user['email']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label class="small text-muted">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>" required>
    </div>
    <div class="mb-3">
        <label class="small text-muted">Password Baru</label>
        <input type="password" class="form-control" name="password_baru">
        <div class="form-text small">Kosongkan jika tidak diganti.</div>
    </div>
    <button type="submit" name="update_profile" class="btn btn-primary w-100">Simpan Profil</button>
</form>
            </div>
        </div>
    </div>
</div>