<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h5 class="card-title text-primary mb-4">Login</h5>
                        <?php
                        if (isset($_POST['submit'])) {
                            $email = $_POST['email'];
                            $pass = md5($_POST['password']);
                            require 'koneksi.php';

                            $ceklogin = "SELECT * FROM pengguna WHERE email='$email' AND password='$pass'";
                            $result = $koneksi->query($ceklogin);

                            if ($result->num_rows > 0) {
                                $data_user = $result->fetch_assoc(); 
                                session_start();
                                $_SESSION['login'] = TRUE;
                                $_SESSION['email'] = $email;
                                $_SESSION['nama_lengkap'] = $data_user['nama_lengkap']; 
                                header("Location: index.php");
                                exit;
                            } else {
                                echo '<div class="alert alert-danger p-2 small">Email atau password salah!</div>';
                            }
                        }
                        ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label small text-muted">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label small text-muted">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>