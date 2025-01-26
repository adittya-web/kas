<?php
include("koneksi.php"); // Koneksi ke database menggunakan MySQLi

// For Pemasukan (Deposit)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namamasuk = $_POST['namamasuk'];
    $tglmasuk = $_POST['tglmasuk'];
    $jumlahmasuk = $_POST['jumlahmasuk'];

    // Insert Pemasukan (Deposit)
    $sql_tambah_masuk = "INSERT INTO masuk (namamasuk, tglmasuk, jumlah) VALUES (?, ?, ?)";
    
    // Menyiapkan statement
    if ($stmt = $connect->prepare($sql_tambah_masuk)) {
        $stmt->bind_param("ssd", $namamasuk, $tglmasuk, $jumlahmasuk); // Bind parameter (s=string, d=double)
        
        // Eksekusi query
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal Menambah Data Pemasukan";
        }
    } else {
        echo "Gagal Menyiapkan Statement";
    }
} else {
    echo "Form belum disubmit";
}
?>
