<?php

include 'server/koneksi.php';
// initialize session
session_start();

validasiLogin();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
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
                        <h5>Input Mahasiswa</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <form action="server/tambah_mhs.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama" class="mb-1">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim" class="mb-1">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jurusan" class="mb-1">Telepon</label>
                                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jurusan" class="mb-1">Jurusan</label>
                                        <select name="jurusan" id="jurusan" class="form-control" required>
                                            <option value="">Pilih Jurusan</option>
                                            <option value="TI">Teknik Informatika</option>
                                            <option value="MI">Manajemen Informasi</option>
                                            <option value="KA">Komputerisasi Akuntansi</option>
                                            <option value="SI">Sistem Informasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama" class="mb-1">Agama</label>
                                        <select name="agama" id="agama" class="form-control" required>
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Kepercayaan lainnya">Kepercayaan lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat" class="mb-1">Alamat Lengkap</label>
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat Lengkap" required></textarea>
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