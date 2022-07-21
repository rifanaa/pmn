<?php
include 'server/koneksi.php';

// initialize session
session_start();

validasiLogin();

// mengambil data dari tabel mahasiswa
$ambil_data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
// convert jadi array
$mahasiswa = [];
while ($data = mysqli_fetch_assoc($ambil_data)) {
    $mahasiswa[] = $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

        <div class="container mt-5">
    <a href="index.php" class="btn btn-warning my-2">Kembali</a>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- judul halaman 'Cetak Data Mahasiswa PMB' -->
                <h1 class="text-center mb-4">Data Mahasiswa</h1>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $id++ ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['jurusan']; ?></td>
                                <td><?= $mhs['telepon']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script type="text/javascript">
                  window.print();
                </script> 
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>