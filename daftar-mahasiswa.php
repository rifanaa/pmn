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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Daftar Mahasiswa</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <a href="input-mahasiswa.php" class="btn btn-success my-2">Tambah Mahasiswa</a>
                        <a href="cetak.php" class="btn btn-primary my-2">Cetak Data</a>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id = 1; foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <td><?= $id++ ?></td>
                                    <td><?= $mhs['nama']; ?></td>
                                    <td><?= $mhs['nim']; ?></td>
                                    <td><?= $mhs['jurusan']; ?></td>
                                    <td>
                                        <a href="edit.php?nim=<?= $mhs['nim']; ?>" class="btn btn-warning">Ubah</a>
                                        <a href="server/hapus_mhs.php?nim=<?= $mhs['nim']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= $mhs['nama']; ?>?');">Hapus</a>
                                        <a href="lihat.php?nim=<?= $mhs['nim']; ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>

    <!--Footer-->
<footer class="bg-dark text-white text-center fw-bold pb-4">
  <p><i class="bi bi-instagram text-light"></i> &copy; 2022 | <a href="https://www.instagram.com/mikomikhael/" target="_blank" class="text-white fw-bold">21.230.0017_Mikhael Pradana Adi</a></p>
</footer>
<!--Tutup Footer-->

</body>

</html>