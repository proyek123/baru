<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Peminjam</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="input_pinjam.php">
<div class="grup">
<strong><label>Kode Buku</label></strong>
<input type="text" name="kode_buku" placeholder="Kode Buku" required="required" /><br/>
</div>
<div class="grup">
<strong><label>NIS</label></strong>
<input type="text" name="nis" placeholder="NIS" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Tanggal Pinjam</label></strong>
<input type="text" name="tgl_pinjam" placeholder="Tanggal Pinjam" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Tanggal Kembali</label></strong>
<input type="text" name="tgl_kembali" placeholder="Tanggal Kembali" required="required" /><br/>
</div>

<div class="grup">
<strong><label>Denda</label></strong>
<select name="denda" id="denda" > 
		<option value="Rp.0,00" selected>Tidak Denda</option>
		<option value="Rp. 500,00" selected>1 Hari</option>
		<option value="Rp. 1000,00" selected>2 Hari</option>
		<option value="Rp. 1500,00" selected>3 Hari</option>
		<option value="Rp. 2000,00" selected>4 Hari</option>
		<option value="Rp. 2500,00" selected>5 Hari</option>
		<option value="Rp. 3000,00" selected>6 Hari</option>
		<option value="Rp. 3500,00" selected>1 Minggu</option>
		</select>
	   
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>
	 
	</form>
	</table>
	</td>
	</tr>



</body>
</html>