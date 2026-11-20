<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h1>Data Formulir</h1>
        <p>Berikut adalah data yang sudah terdaftar</p>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Handphone</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM data");
                while ($baris = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $baris['nama']; ?></td>
                        <td><?php echo $baris['email']; ?></td>
                        <td><?php echo $baris['handphone']; ?></td>
                        <td>
                            <a href="edit.php?no=<?php echo $baris['no']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?no=<?php echo $baris['no']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>