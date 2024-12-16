<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Matakuliah</title>
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-1">
        <a class="navbar-brand" href="../menu.php">Dashbord</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../dosen/daftar_dosen.php">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mahasiswa/daftar_mahasiswa.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mata_kuliah/daftar_matakuliah.php">Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="card border-success mb-3" >
<div class="card-header">Edit Matakuliah</div>
<div class="card-body text-success">
<div class="row" >
<div class="col-md-5 ">
<form method="POST" action="update_matakuliah.php" >
<?php
include "../koneksi.php";
$kode_matakuliah=$_GET['kode_matakuliah'];
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_matakuliah WHERE kode_matakuliah='$kode_matakuliah'");
$data=mysqli_fetch_array($tampil);
?>
<div class="mb-3 mt-3">
<label for="kode_matakuliah" class="form-label">Kode Matakuliah :</label>

<input type="hidden" name="kode_matakuliah" value="<?=$data['kode_matakuliah']?>" class="form-
control" id="kode_matakuliah" required>

<input type="text" name="kode_matakuliah" value="<?=$data['kode_matakuliah']?>" class="form-
control" id="kode_matakuliah" placeholder="Masukan Kode Matakuliah" required>

</div>
<div class="mb-3 mt-3">
<label for="nama_matakuliah" class="form-label">Nama Matakuliah :</label>
<input type="text" name="nama_matakuliah"
value="<?=$data['nama_matakuliah']?>" class="form-control" id="nama_matakuliah"
placeholder="Masukan Nama Matakuliah" required>
</div>
<div class="mb-3">
<label for="sks" class="form-label">Sks :</label>
<input type="text" name="sks"
value="<?=$data['sks']?>" class="form-control" id="sks"
placeholder="Masukan Sks" required>
</div>
<div class="mb-3 mt-3">
<label for="jenis" class="form-label">Jenis :</label>
<select for="jenis" name="jenis" class="form-control"
id="jenis" >
<option
value="<?=$data['jenis']?>"><?=$data['jenis']?></option>
<option value=""> -- Pilih Jenis --</option>
<option value="Teori"> Teori</option>
<option value="Praktikum"> Praktikum</option>
</select>
</div>
<div class="mb-3">
<a href="daftar_matakuliah.php" class="btn btn-warning">Kembali</a> <button
type="submit" class="btn btn-primary">Perbarui</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>