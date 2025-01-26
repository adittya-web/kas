<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Data Tabungan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .jumbotron {
            margin-top: 50px;
            padding: 2rem 1rem;
            background-color: #343a40;
            color: #fff;
            border-radius: 10px;
        }
        .nav-link {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Data Tabungan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Data Tabungan Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">Selamat Datang di Sistem Data Tabungan</h1>
            <p class="lead">Kelola data tabungan Anda dengan mudah, cepat, dan efisien.</p>
            <hr class="my-4">
            <p>Mulai sekarang dengan mengecek data tabungan atau menambahkan data baru.</p>
            <a class="btn btn-primary btn-lg" href="index.php" role="button">Data Tabungan Masuk</a>
            <a class="btn btn-success btn-lg" href="tambah.php" role="button">Tambah Data Baru</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 py-4 bg-dark text-white">
        <p>&copy; 2025 Sistem Data Tabungan. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>