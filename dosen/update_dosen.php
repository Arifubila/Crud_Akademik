<?php
include "../koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$Nidn=$_POST['Nidn'];
$Nidn=$_POST['Nidn'];
$Nama_Dosen=$_POST['Nama_Dosen'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Alamat=$_POST['Alamat'];
$No_Hp=$_POST['No_Hp'];
$Pendidikan_Terakhir=$_POST['Pendidikan_Terakhir'];
$Jurusan=$_POST['Jurusan'];
$Dosen_Prodi=$_POST['Dosen_Prodi'];
//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tb_dosen SET
Nidn='$Nidn',
Nama_Dosen='$Nama_Dosen',
Jenis_Kelamin='$Jenis_Kelamin',
Alamat='$Alamat',
No_Hp='$No_Hp',
Pendidikan_Terakhir='$Pendidikan_Terakhir',
Jurusan='$Jurusan',
Dosen_Prodi='$Dosen_Prodi'
WHERE Nidn='$Nidn'
");
if($update){
//Jika proses delete berhasil
header("location:daftar_dosen.php");
}else{
//Jika proses update gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='daftar_dosen.php'>Coba Lagi</a>";
}
?>