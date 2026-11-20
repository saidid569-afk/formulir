<?php
include "koneksi.php";
$no = $_GET['no'];
$data = mysqli_query($koneksi, "SELECT * FROM data WHERE no='$no'");
$baris = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <div class="col-md-6">
            <h1>Formulir Edit Data</h1>
            <p>Silahkan edit data dibawah ini dengan benar</p>

            <form action="update.php" method="POST">
                <input type="hidden" name="no" value="<?php echo $baris['no']; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $baris['nama']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $baris['email']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Handphone</label>
                    <input type="number" class="form-control" name="handphone" value="<?php echo $baris['handphone']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>