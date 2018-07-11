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
<title>Data Anggota</title>
<link href="projek123/style.css" rel="stylesheet" type="text/css" media="all" />
 
<style type="text/css">
body{
	margin-top:0px;
}
table{
	margin-top:100px;
}
	
</style>
</head>
<body>


 <center>
<h1>Data Anggota</h1><br>

<center>
<a href="home_petugas.php?mod=back" class="tmbl tombol1">HOME</a>
<a href="tambah.php?mod=tambah" class="tmbl tombol1">TAMBAH ANGGOTA</a>
 <?php
include "config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#dcdcdc";
$warnaheading="#66CDAA";
$ki = "select * from anggota ";
$ri= mysqli_query($db_link,$ki);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
            <th>NO</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                 
              
              </tr>";
$no=1;
while ($s=mysqli_fetch_array($ri))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td>".$no."</td>";
             echo"<td>".$s['nama']."</td>";
             echo"<td>".$s['kelas']."</td>";

             echo" <td>".$s['NIS']."</td>";
             echo "<td>".$s['jk']."</td>";
              
 
	
             echo" </tr>";
            
$no++;
}
?>
</body>
</html>