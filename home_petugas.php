<?php
session_start ();
if(!isset($_SESSION['user'])){
	die('anda belum login <a href="javascript:history.back()">kembali</a>');
}
if($_SESSION['user']!="user"){
	die('anda bukan petugas <a href="javascript:history.back()">kembali</a>');
} 
?>
<!doctype html>
<html>
<head>
<title>Prosedur </title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
body{
	height:300px;
}
.judul{
	margin-left:500px;
	margin-top:20px;
	font-size:19px;
	
}
.langkah{
	margin-left:400px;
	margin-top:50px;
	font-size:18px;
}
.daftar{
	font-size:22px;
}
</style>
</head>
<body>
<div class="menu-wrap">
<div class="admin">
</div>

 <ul>
			<li class="active"><a href="index.php" accesskey="1" title="">Home</a></li>
			<li><a href="admin_anggota.php" accesskey="3" title="">Anggota</a></li>
			<li><a href="projek123/profile.php" accesskey="3" title="">Peminjaman</a></li>

			 
			<li><a href="#" accesskey="4" title="">buku</a></li>
						<li><a href="projek123/logout.php">LogOut</a>
			 
			 
		</ul>
	</div>
<div class="judul"><h3>Selamat datang di Halaman Administrator,,</h3></div><br>
<center><br>
  

</body>
</html>