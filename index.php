<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabungan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table th {
            text-align: center;
        }
        .table td {
            text-align: center;
        }
        .btn-tambah {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">DATA TABUNGAN</h2>
        <div class="text-end btn-tambah">
            <button class="btn btn-success" onclick="location.href='tambah.php'">Tambah Data</button>
            <button class="btn btn-success" onclick="location.href='home.php'">Kembali</button>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID Masuk</th>
                    <th scope="col">Nama Masuk</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                // Koneksi ke database dan menjalankan query
                $sql_view = mysqli_query($connect, "SELECT * FROM masuk ORDER BY idmasuk ASC");

                // Menghitung jumlah data
                $total = mysqli_num_rows($sql_view);

                // Menampilkan data dari database
                while ($data = mysqli_fetch_array($sql_view)) {
                    echo "<tr>";
                    echo "<td>{$data['idmasuk']}</td>";
                    echo "<td>{$data['namamasuk']}</td>";
                    echo "<td>{$data['tglmasuk']}</td>";
                    echo "<td>{$data['jumlah']}</td>";
                    echo "<td>
                    <a href='edit.php?kode={$data['idmasuk']}' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='hapus.php?kode={$data['idmasuk']}' class='btn btn-danger btn-sm'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p class="text-end">Jumlah Data: <?php echo $total; ?></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>