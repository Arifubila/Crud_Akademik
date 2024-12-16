<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$Nidn=$_POST['Nidn'];
$Nama_Dosen=$_POST['Nama_Dosen'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Alamat=$_POST['Alamat'];
$No_HP=$_POST['No_Hp'];
$Pendidikan_Terakhir=$_POST['Pendidikan_Terakhir'];
$Jurusan=$_POST['Jurusan'];
$Dosen_Prodi=$_POST['Dosen_Prodi'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tb_dosen 
(Nidn, Nama_Dosen, Jenis_Kelamin, Alamat, No_Hp, Pendidikan_Terakhir, Jurusan, Dosen_Prodi)
VALUES 
(
    '$_POST[Nidn]', 
    '$_POST[Nama_Dosen]', 
    '$_POST[Jenis_Kelamin]', 
    '$_POST[Alamat]', 
    '$_POST[No_Hp]', 
    '$_POST[Pendidikan_Terakhir]', 
    '$_POST[Jurusan]', 
    '$_POST[Dosen_Prodi]'
)");

if($insert){
//Jika proses delete berhasil
header("location:daftar_dosen.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='daftar_mahasiswa.php'>Coba Lagi</a>";
}
?>