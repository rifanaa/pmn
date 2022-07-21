<?php

include 'server/koneksi.php';

// initialize session
session_start();

validasiLogin();

// ambil data dari url
$nim = $_GET['nim'];
// ambil data mahasiswa berdasarkan id
$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
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
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="index.php" class="btn btn-warning my-2">Kembali</a>
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Mahasiswa</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <form action="server/edit_mhs.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama" class="mb-1">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $mahasiswa['nama']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim" class="mb-1">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="<?php echo $mahasiswa['nim']; ?>" required readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $mahasiswa['email']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jurusan" class="mb-1">Telepon</label>
                                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="<?php echo $mahasiswa['telepon']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jurusan" class="mb-1">Jurusan</label>
                                        <select name="jurusan" id="jurusan" class="form-control">
                                            <option value="">Pilih Jurusan</option>
                                            <option value="TI" <?php if ($mahasiswa['jurusan'] == 'TI') {
                                                                    echo 'selected';
                                                                } ?>>Teknik Informatika</option>
                                            <option value="MI" <?php if ($mahasiswa['jurusan'] == 'MI') {
                                                                    echo 'selected';
                                                                } ?>>Manajemen Informasi</option>
                                            <option value="KA" <?php if ($mahasiswa['jurusan'] == 'KA') {
                                                                    echo 'selected';
                                                                } ?>>Komputerisasi Akuntansi</option>
                                            <option value="SI" <?php if ($mahasiswa['jurusan'] == 'SI') {
                                                                    echo 'selected';
                                                                } ?>>Sistem Informasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama" class="mb-1">Agama</label>
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="Islam" <?php if ($mahasiswa['agama'] == 'Islam') {
                                                                        echo 'selected';
                                                                    } ?>>Islam</option>
                                            <option value="Kristen" <?php if ($mahasiswa['agama'] == 'Kristen') {
                                                                        echo 'selected';
                                                                    } ?>>Kristen</option>
                                            <option value="Hindu" <?php if ($mahasiswa['agama'] == 'Hindu') {
                                                                        echo 'selected';
                                                                    } ?>>Hindu</option>
                                            <option value="Budha" <?php if ($mahasiswa['agama'] == 'Budha') {
                                                                        echo 'selected';
                                                                    } ?>>Budha</option>
                                            <option value="Konghucu" <?php if ($mahasiswa['agama'] == 'Konghucu') {
                                                                            echo 'selected';
                                                                        } ?>>Konghucu</option>
                                            <option value="Kepercayaan lainnya" <?php if ($mahasiswa['agama'] == 'Kepercayaan lainnya') {
                                                                                    echo 'selected';
                                                                                } ?>>Kepercayaan lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat" class="mb-1">Alamat Lengkap</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat Lengkap"><?php echo $mahasiswa['alamat']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>