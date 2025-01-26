<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tabungan";

// Membuat koneksi menggunakan MySQLi
$connect = new mysqli($host, $username, $password, $database);

// Cek apakah koneksi berhasil
if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
?>
