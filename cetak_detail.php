<?php
include 'server/koneksi.php';

// initialize session
session_start();

validasiLogin();

// mengambil data dari tabel mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
// convert jadi array
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
          
    <div class="container mt-5">
    <a href="index.php" class="btn btn-warning my-2">Kembali</a>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- judul halaman 'Cetak Data Mahasiswa PMB' -->
                <h1 class="text-center mb-4">Data Diri Mahasiswa</h1>
                <table class="table table-bordered text-center">
                    <tbody>
                        <?php $id = 1;
                        //foreach ($mahasiswa as $mhs) : ?>
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
                <script type="text/javascript">
                 window.print();
                </script> 
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>