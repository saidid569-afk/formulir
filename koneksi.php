<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "formulir";

$koneksi = mysqli_connect($server, $user, $password, $database);

// Hapus atau beri komentar (//) pada blok if di bawah ini setelah koneksi dipastikan berhasil
if ($koneksi == true) {
    // echo "Berhasil terhubung ke database";
} else {
    echo "Gagal terhubung";
}
?>