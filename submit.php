<?php
include "koneksi.php";

$nama      = $_POST['nama'];
$email     = $_POST['email'];
$handphone = $_POST['handphone'];

$submit = mysqli_query($koneksi, "INSERT INTO data (nama, email, handphone) VALUES ('$nama', '$email', '$handphone')");

if ($submit == true) {
    header("location:data.php");
} else {
    echo "Gagal tersimpan";
}
?>