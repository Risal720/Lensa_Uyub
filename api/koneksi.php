<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Membaca Environment Variables dari Vercel (atau fallback ke XAMPP lokal)
$host = getenv('DB_HOST') ?: "127.0.0.1";
$port = getenv('DB_PORT') ?: 3306;
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') !== false ? getenv('DB_PASS') : "";
$db   = getenv('DB_NAME') ?: "db_mitra_umkm";

$conn = mysqli_connect($host, $user, $pass, $db, (int)$port);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>