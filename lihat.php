<?php

include 'server/koneksi.php';

// get nim from url
$nim = $_GET['nim'];

// get data from table
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
$mahasiswa = [
    'nama' => $data['nama'],
    'nim' => $data['nim'],
    'email' => $data['email'],
    'telepon' => $data['telepon'],
    'jurusan' => $data['jurusan'],
    'agama' => $data['agama'],
    'alamat' => $data['alamat']
];

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
    <!-- tombol kembali ke index -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="index.php" class="btn btn-warning my-2">Kembali</a>
                <a href="cetak_detail.php" class="btn btn-primary my-2">Cetak Data</a>
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Mahasiswa</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['nim']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['telepon']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['jurusan']; ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['agama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Lengkap</td>
                                    <td>:</td>
                                    <td><?php echo $mahasiswa['alamat']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>