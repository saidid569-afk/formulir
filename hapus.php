<?php
include "koneksi.php";

$no = $_GET['no'];

$hapus = mysqli_query($koneksi, "DELETE FROM data WHERE no='$no'");

if ($hapus == true) {
    header("location:data.php");
} else {
    echo "Gagal terhapus";
}
?>