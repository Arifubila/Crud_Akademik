<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Mahasiswa</title>
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
<div class="card-header">Edit Data Mahasiswa</div>
<div class="card-body text-success">
<div class="row" >
<div class="col-md-5 ">
<form method="POST" action="update_mahasiswa.php" >
<?php
include"../koneksi.php";
$nim=$_GET['nim'];
$tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mahasiswa WHERE
nim='$nim'");
$data=mysqli_fetch_array($tampil);
?>
<div class="mb-3 mt-3">
<label for="nim" class="form-label">NIM :</label>

<input type="hidden" name="nim_tmp" value="<?=$data['nim']?>" class="form-
control" id="nim_tmp" required>

<input type="text" name="nim" value="<?=$data['nim']?>" class="form-
control" id="nim" placeholder="Masukan NIM" required>

</div>
<div class="mb-3 mt-3">
<label for="nama_mahasiswa" class="form-label">Nama Lengkap :</label>
<input type="text" name="nama_mahasiswa"
value="<?=$data['nama_mahasiswa']?>" class="form-control" id="nama_mahasiswa"
placeholder="Masukan Nama Mahasiswa" required>
</div>
<div class="mb-3 mt-3">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
<select for="jenis_kelamin" name="jenis_kelamin" class="form-control"
id="jenis_kelamin" >
<option
value="<?=$data['jenis_kelamin']?>"><?=$data['jenis_kelamin']?></option>
<option value=""> -- Pilih Jenis Kelamin --</option>
<option value="Laki-laki"> Laki-laki</option>
<option value="Perempuan"> Perempuan</option>
</select>
</div>
<div class="mb-3">
<label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
<input type="text" name="tempat_lahir"
value="<?=$data['tempat_lahir']?>" class="form-control" id="tempat_lahir"
placeholder="Masukan Tempat Lahir" required>
</div>
<div class="mb-3">
<label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
<input type="date" name="tanggal_lahir"
value="<?=$data['tanggal_lahir']?>" class="form-control" id="tanggal_lahir"
placeholder="Masukan Tanggal Lahir" required>
</div>
<div class="mb-3">
<label for="tahun_masuk" class="form-label">Tahun Masuk:</label>
<input type="number" name="tahun_masuk" value="<?=$data['tahun_masuk']?>"
class="form-control" id="tahun_masuk" placeholder="Masukan Tahun Masuk "
required>
</div>
<div class="mb-3">
<label for="prodi" class="form-label">Prodi:</label>
<select name="prodi" class="form-control" id="prodi" required>
<option value="<?=$data['prodi']?>"><?=$data['prodi']?></option>
<option value=""> -- Pilih Prodi --</option>
<option value="Teknik Informatika"> Teknik Informatika</option>
<option value="Teknik Sipil"> Teknik Sipil</option>
<option value="Agro Teknologi"> Agro Teknologi</option>
<option value="Agri Bisnis"> Agri Bisnis</option>
</select>
</div>
<div class="mb-3">
<a href="daftar_mahasiswa.php" class="btn btn-warning">Kembali</a> <button
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