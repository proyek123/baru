<?php
require_once 'fungsi.php';
?>
<?php
function headere(){
?>
<!DOCTYPE html>
<html>
<head>
	<title>PEMINJAMAN</title>
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
	<nav>
		<div class="brand"> <b>HAI <?= $_SESSION['nama'] ?></b></div>
		<div class="konten">
			<ul>
				<a href="anggota.php"><li>Anggota</li></a>
				<a href="buku.php"><li>Buku</li></a>
				<a href="peminjaman.php"><li>Peminjaman</li></a>
				<a href="../logout.php"><li>LOGOUT</li></a>
			</ul>
		</div>
	</nav>
</body>
</html>
<?php } ?>
<?php
function footere(){
?>
<div class="footer">
	&copyCopyright Cikita
</div>
<?php } ?>