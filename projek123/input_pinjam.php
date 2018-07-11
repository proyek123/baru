<?php
include "../config/koneksi.php";
$kode_buku=$_POST['kode_buku'];
$nis=$_POST['nis'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$denda=$_POST['denda'];

$hoo="insert into peminjaman (kode_buku,nis,tgl_pinjam,tgl_kembali,denda) values ('".$kode_buku."','".$nis."','".$tgl_pinjam."','".$tgl_kembali."','".$denda."')";
$haa=mysqli_query($db_link,$hoo);
if ($haa) {
	echo "<script>window.alert('Berhasil Menambah Data !');
	window.location=('profile.php')</script>";
}else {
	echo "<script>alert ('gagal ditambahkan');
	document.location.href='tambah.php';</script>";
}
?>