<?php
include "../koneksi.php";
$i=0;
$keyword=mysqli_real_escape_string($koneksi,$_GET['keyword']);
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_dosen
WHERE Nama_Dosen like '%$keyword%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Data Dosen</title>
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
<div class="card-header">Hasil Pencarian : keyword
"<b><?=$keyword?></b>"</div>
<div class="card-body text-success">
<div class="row">
<div class="col-md-6 mb-2 ">
<a href='daftar_dosen.php' class='btn btn-warning'> Kembali</a>
</div>
<div class="col-md-6 ">
<form action="cari_dosen.php" method="GET">
<div class="btn-group float-end" role="group" >
<input type="text" name="keyword" class="form-control"

placeholder="Masukan keyword" >

<button type="button" class="btn btn-primary">Pencarian</button>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">

<table class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>No</th>
<th>NIDN</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>No HP</th>
<th>Pendidikan Terakhir</th>
<th>Jurusan</th>
<th>Dosen_Prodi</th>
<th>Aksi</th>
</tr>
</thead>
</tbody>
<?php
while($data=mysqli_fetch_array($tampil)){
$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=$data['Nidn']?></td>
<td><?=$data['Nama_Dosen']?></td>
<td><?=$data['Jenis_Kelamin']?></td>
<td><?=$data['Alamat']?></td>
<td><?=$data['No_Hp']?></td>
<td><?=$data['Jurusan']?></td>
<td><?=$data['Pendidikan_Terakhir']?></td>
<td><?=$data['Dosen_Prodi']?></td>
<td>
<a href="edit_dosen.php?nim=<?=$data['Nidn']?>" class='btn btn-primary'>Edit</a>

<a href="delete_dosen.php?nim=<?=$data['Nidn']?>"
class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</body>
</html>