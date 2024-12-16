<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud Akademik</title>
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
<div class="card-header">Data Mata Kuliah</div>
<div class="card-body text-success">
<div class="row">
<div class="col-md-6 mb-2 ">
<a href='tambah_matakuliah.php' class='btn btn-primary'>Tambah Data</a>
</div>
<div class="col-md-6 ">
<form action="cari_matakuliah.php" method="GET">
<div class="btn-group float-end" role="group" >
<input type="text" name="keyword" class="form-control"

placeholder="Masukan keyword" required>

<button type="submit" class="btn btn-primary">Pencarian</button>
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
<th>Kode Matakuliah</th>
<th>Nama MataKuliah</th>
<th>Sks</th>
<th>Jenis</th>
</tr>
</thead>
</tbody>
<?php
include "../koneksi.php";
$i=0;
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_matakuliah");
while($data=mysqli_fetch_array($tampil)){
$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=$data['kode_matakuliah']?></td>
<td><?=$data['nama_matakuliah']?></td>
<td><?=$data['sks']?></td>
<td><?=$data['jenis']?></td>
<td>
<a href="edit_matakuliah.php?kode_matakuliah=<?=$data['kode_matakuliah']?>" class='btn btn-primary'>Edit</a>

<a href="#" 
   class="btn btn-danger" 
   onclick="showDeleteModal('delete_matakuliah.php?kode_matakuliah=<?=$data['kode_matakuliah']?>')">
   Hapus
</a>


</td>
</tr>
<?php
}
?>
</tbody>
</table>
<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-dark">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Apakah Anda yakin ingin menghapus mata kuliah ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <!-- Tombol Hapus yang akan mengarah ke URL -->
        <a href="daftar_matakuliah" id="confirmDelete" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>
</div>
<script>
function showDeleteModal(url) {
    // Set URL untuk konfirmasi hapus
    document.getElementById('confirmDelete').setAttribute('href', url);

    // Tampilkan modal
    var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>