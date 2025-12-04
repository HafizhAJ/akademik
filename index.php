<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">DATA AKADEMIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?page=datamahasiswa">Data Mahasiswa</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container my-4">
       <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if($page == 'home') include 'home.php';
            if($page == 'datamahasiswa') include 'list.php';
            if($page == 'create') include 'create.php';
            if($page == 'edit' && isset($_GET['nim'])) include 'edit.php';
        ?>
    </div>
</body>
</html>