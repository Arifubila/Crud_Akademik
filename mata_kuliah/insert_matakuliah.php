<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$kode_matakuliah=$_POST['kode_matakuliah'];
$nama_matakuliah=$_POST['nama_matakuliah'];
$sks=$_POST['sks'];
$jenis=$_POST['jenis'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tb_matakuliah 
(kode_matakuliah, nama_matakuliah, sks, jenis)
VALUES 
(
    '$_POST[kode_matakuliah]', 
    '$_POST[nama_matakuliah]', 
    '$_POST[sks]', 
    '$_POST[jenis]'
)");

if($insert){
//Jika proses delete berhasil
header("location:daftar_matakuliah.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='daftar_matakuliah.php'>Coba Lagi</a>";
}
?>