<?php
include "../config/koneksi.php";

$id_buku=$_POST['id_buku'];
$id_anggota=$_POST['id_anggota'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
$denda=$_POST['denda'];

$query=mysql_query("update pinjaman set id_buku='$id_buku',id_anggota='$id_anggota',tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali',denda='$denda' where id_buku='$id_buku'") or die (mysql_error());

if ($query) {
	echo "<script>window.alert('Berhasil Mengupdate Data !');
	window.location=('index.php')</script>";
}
?>