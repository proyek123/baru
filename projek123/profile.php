<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="style.css" rel="stylesheet" type="text/css">
 
</head>
<body>
 
 
<center>
<h1>Peminjaman</h1><br>

<center>
<a href="../home_petugas.php?mod=back" class="tmbl tombol1">HOME</a>
<a href="tambah.php?mod=tambah" class="tmbl tombol1">TAMBAH PINJAMAN</a>

<br><br>

<table width="700" border="0" cellpadding="2" cellspacing="2" align="center">
  <tr bgcolor="#666666" class="style1" align="center">
 <br><br><br>

   <?php
include "../config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#dcdcdc";
$warnaheading="#66CDAA";
$huyu= "select * from peminjaman ";
$roso= mysqli_query($db_link,$huyu);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
			
            <th>NO</th>
                <th>KODE BUKU</th>
                <th>NIS </th>
                <th>TGL PINJAM</th>
                <th>TGL KEMBALI</th>
                <th>DENDA</th>
                <th>AKSI</th>
				
                 
              
              </tr>";
$no=1;
while ($i=mysqli_fetch_array($roso))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td>".$no."</td>";
             echo"<td>".$i['kode_buku']."</td>";
             echo"<td>".$i['nis']."</td>";

             echo" <td>".$i['tgl_pinjam']."</td>";
             echo "<td>".$i['tgl_kembali']."</td>";
             echo "<td>".$i['denda']."</td>";
			 echo "<td><small><a href='delete.php?id=".$i['id_buku']."'>Hapus</a>|
			 
			 <a href='edit.php?id=". $i['id_buku']."' >Edit</a>
			 </small></td>";
				  
              
 
	
             echo" </tr>";
            
$no++;
}
?>
</table>
<br>
<br>
  
</body>
</html>