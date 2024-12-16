<?php
include "../koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$nim=$_GET['nim'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_mahasiswa WHERE
nim='$_GET[nim]'");
if($delete){
//Jika proses delete berhasil
header("location:daftar_mahasiswa.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menghapus !</p>";
echo"<a href='daftar_mahasiswa.php'>Coba Lagi</a>";
}
?>