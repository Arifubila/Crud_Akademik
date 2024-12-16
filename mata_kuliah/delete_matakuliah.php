<?php
include "../koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$kode_matakuliah=$_GET['kode_matakuliah'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tb_matakuliah WHERE
kode_matakuliah='$_GET[kode_matakuliah]'");
if($delete){
//Jika proses delete berhasil
header("location:daftar_matakuliah.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='daftar_matakuliah.php'>Coba Lagi</a>";
}
?>