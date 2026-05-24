<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'resto_qr';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die('<div style="font-family:sans-serif;padding:20px;background:#fee2e2;color:#b91c1c;border-radius:8px;margin:20px">
        <strong>Koneksi database gagal!</strong><br>' . mysqli_connect_error() . '
    </div>');
}

mysqli_set_charset($conn, 'utf8mb4');
?>