<?php
include "../config/koneksi.php";

$id_buku=$_POST['id_buku'];
$id_anggota=$_POST['id_anggota'];
$tanggal_pinjam=$_POST['tgl_pinjam'];
$tanggal_kembali=$_POST['tgl_kembali'];
$denda=$_POST['denda'];

$query=mysql_query("insert into tarif values('$id_buku','$id_anggota','$tgl_pinjam','$tgl_kembali','$denda')") or die (mysql_error());
if ($query) {
	echo "<script>window.alert('Berhasil Menambah Data !');
	window.location=('index.php')</script>";
}
?>