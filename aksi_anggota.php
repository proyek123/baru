<?php
include "config/koneksi.php";
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$NIS=$_POST['NIS'];
$jk=$_POST['jk'];

if(empty($nama)or empty($kelas)or empty($NIS)or empty($jk))
{
echo "<script>alert ('Data tidak boleh kosong');
documnet.location.href='data_anggota.php';</script>\n";

}else{
$jun="insert into anggota (nama,kelas,NIS,jk) values ('".$nama."','".$kelas."','".$NIS."','".$jk."')";
$joo=mysqli_query($db_link,$jun);
}
if($joo){
echo "<script>alert ('Data berhasil disimpan');
document.location.href='#';</script>\n";
}else {
echo "<script>alert ('Data gagal disimpan');
document.location.href='#';</script>\n";
}
?>