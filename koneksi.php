<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_website';

$db = mysqli_connect($host, $user, $password, $database);

if (!$db) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>
