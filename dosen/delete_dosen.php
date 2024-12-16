<?php
include "../koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$Nidn=$_GET['Nidn'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tb_dosen WHERE
Nidn='$_GET[Nidn]'");
if($delete){
//Jika proses delete berhasil
header("location:daftar_dosen.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='daftar_dosen.php'>Coba Lagi</a>";
}
?>