<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Dosen</title>
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
<div class="card-header">Tambah Data Dosen</div>
<div class="card-body text-success">
<div class="row ">
<div class="col-md-5 ">
<form method="POST" action="insert_dosen.php" >
<div class="mb-3 mt-3">
<label for="Nidn" class="form-label">NIDN :</label>
<input type="text" name="Nidn" class="form-control" id="Nidn"
placeholder="Masukan NIDN" required>
</div>
<div class="mb-3 mt-3">
<label for="Nama_Dosen" class="form-label">Nama Lengkap :</label>
<input type="text" name="Nama_Dosen" class="form-control"
id="Nama_Dosen" placeholder="Masukan Nama Dosen" required>
</div>
<div class="mb-3 mt-3">
<label for="Jenis_Kelamin" class="form-label">Jenis Kelamin :</label>
<select for="Jenis_Kelamin" name="Jenis_Kelamin" class="form-control"
id="Jenis_Kelamin" required>
<option value=""> -- Pilih Jenis Kelamin --</option>
<option value="Laki-laki"> Laki-laki</op tion>
<option value="Perempuan"> Perempuan</option>
</select>
</div>
<div class="mb-3">
<label for="Alamat" class="form-label">Alamat :</label>
<input type="text" name="Alamat" class="form-control"
id="Alamat" placeholder="Masukan Alamat" required>
</div>
<div class="mb-3">
<label for="No_Hp" class="form-label">No HP :</label>
<input type="number" name="No_Hp" class="form-control"
id="No_Hp" placeholder="Masukan No HP" required>
</div>
<div class="mb-3">
<label for="Pendidikan_Terakhir" class="form-label">Pendidiakan Terakhir :</label>
<select name="Pendidikan_Terakhir" class="form-control" id="Pendidikan_Terakhir" required>
<option value=""> -- Pilih Pendidikan Terakhir --</option>
<option value="D-III"> D-III</option>
<option value="D-IV"> D-IV</option>
<option value="S1"> S1</option>
<option value="S2"> S2</option>
</select>
</div>
<div class="mb-3">
<label for="Jurusan" class="form-label">Jurusan :</label>
<input type="text" name="Jurusan" class="form-control"
id="Jurusan" placeholder="Masukan Jurusan" required>
</div>
<div class="mb-3">
<label for="Dosen_Prodi" class="form-label">Dosen Prodi :</label>
<select name="Dosen_Prodi" class="form-control" id="Dosen_Prodi" required>
<option value=""> -- Pilih Prodi --</option>
<option value="Teknik Informatika"> Teknik Informatika</option>
<option value="Teknik Sipil"> Teknik Sipil</option>
<option value="Agro Teknologi"> Agro Teknologi</option>
<option value="Agri Bisnis"> Agri Bisnis</option>
</select>
</div>
<div class="mb-3">
<a href="daftar_dosen.php" class="btn btn-warning">Kembali</a>
<button type="submit" class="btn btn-primary">Simpan</button>
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