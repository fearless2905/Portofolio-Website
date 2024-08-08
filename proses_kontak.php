<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];

    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'db_website');

    // Periksa koneksi
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Persiapkan query SQL untuk insert data ke tabel kontak
        $stmt = $conn->prepare("INSERT INTO kontak (nama, email, telepon, subjek, pesan) VALUES (?, ?, ?, ?, ?)");

        // Bind parameter ke query
        $stmt->bind_param("sssss", $nama, $email, $telepon, $subjek, $pesan);

        // Eksekusi query
        $stmt->execute();

        // Tampilkan pesan jika pengiriman berhasil
        echo "Pesan berhasil terkirim...";

        // Tutup statement
        $stmt->close();

        // Tutup koneksi
        $conn->close();
    }
}
?>
