<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nim=$_POST['nim'];
$nama_mahasiswa=$_POST['nama_mahasiswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$tahun_masuk=$_POST['tahun_masuk'];
$prodi=$_POST['prodi'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa 
(nim, nama_mahasiswa, jenis_kelamin, tempat_lahir, tanggal_lahir, tahun_masuk, prodi)
VALUES 
(
    '$_POST[nim]', 
    '$_POST[nama_mahasiswa]', 
    '$_POST[jenis_kelamin]', 
    '$_POST[tempat_lahir]', 
    '$_POST[tanggal_lahir]', 
    '$_POST[tahun_masuk]', 
    '$_POST[prodi]'
) 
ON DUPLICATE KEY UPDATE 
nama_mahasiswa = '$_POST[nama_mahasiswa]',
jenis_kelamin = '$_POST[jenis_kelamin]',
tempat_lahir = '$_POST[tempat_lahir]',
tanggal_lahir = '$_POST[tanggal_lahir]',
tahun_masuk = '$_POST[tahun_masuk]',
prodi = '$_POST[prodi]'");

if($insert){
//Jika proses delete berhasil
header("location:daftar_mahasiswa.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='daftar_mahasiswa.php'>Coba Lagi</a>";
}
?>