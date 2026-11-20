<?php
include "koneksi.php";

$no        = $_POST['no'];
$nama      = $_POST['nama'];
$email     = $_POST['email'];
$handphone = $_POST['handphone'];

$update = mysqli_query($koneksi, "UPDATE data SET nama='$nama', email='$email', handphone='$handphone' WHERE no='$no'");

if ($update == true) {
    header("location:data.php");
} else {
    echo "Gagal terupdate";
}
?>