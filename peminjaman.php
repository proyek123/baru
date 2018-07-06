<?php
require_once 'theme/view.php';
if (!isset($_SESSION['nama'])) {
	header('location:../login.php');
}
headere();
?>
<div class="konten konten2">
	<br><h3>PEMINJAMAN</h3><br>
	<form method="get" action="peminjaman.php" style="float: right;">
		Bulan 
		<select name="bulan">
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
		Tahun
		<select name="tahun">
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
		</select>
		<input type="submit" name="cari" value="  URUTKAN  " class="tmbl tombol">
	</form><br>
<!--============================ tampil dan cari ============================-->
<br>
<table width="100%">
	<tr>
		<th>NO</th>
		<th>ID BUKU</th>
		<th>ID ANGGOTA</th>
		<th>TANGGAL PINJAM</th>
		<th>TANGGAL KEMBALI</th>
		<th>DENDA</th>
		<th>AKSI</th>
	</tr>
	<?php
	$no=0;
	if (isset($_GET['cari'])) {
		$bulan=$_GET['bulan'];
		$tahun=$_GET['tahun'];
		$row=mysqli_query($conn,"SELECT *  FROM peminjaman WHERE month(tgl_keluar)='$bulan' AND year(tgl_keluar)='$tahun'");
	}else{$row=mysqli_query($conn,"SELECT * FROM peminjaman");}
	while ($d=mysqli_fetch_assoc($row)) {
		$no++;
	?>
	<tr align="center">
		<td><?= $no ?></td>
		<td height="30"><?= $d['id_buku'] ?></td>
		<td><?= $d['id_anggota'] ?></td>
		<td><?= $d['tgl_pinjam'] ?></td>
		<td><?= $d['tgl_kembali'] ?></td>
		<td><?= $d['denda'] ?></td>
	</tr>
	<?php } ?>
</table><br>
</div>
<?php
footere();
?>