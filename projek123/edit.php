<?php
session_start();
if(!isset($_SESSION['Username'])) {
echo "<script>window.alert('Anda Belum Login !');
	window.location=('index.php')</script>";
}

if($_SESSION['Jabatan']!="Admin") {
echo "<script>window.alert('Anda Bukan Admin !');
	window.location=('index.php')</script>";
}	
?>


<!DOCTYPE html>
<html>
<head>
<title>Halaman Admin</title>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
<link rel="shortcut icon" href="../image/listrik2.jpg" />
</head>
<body>
<div id="kanan"><h1>Edit Tarif</h1>
<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$query=mysql_query("select * from tarif where id='$id'");
$data=mysql_fetch_array($query);
?>
<form name="input_Tarif" method="post" action="update.php">
<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="97" rowspan="5">&nbsp;</td>
    <td width="150" height="30">ID</td>
    <td width="11">:</td>
    <td width="272"><input type="text" name="id" placeholder="ID_pelanggan" value="<?php echo $data['id'];?>"/></td>
    <td width="21"rowspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="150" height="30">Kode</td>
    <td>:</td>
    <td><input type="text" name="kode" placeholder="Kode" value="<?php echo $data['kode'];?>"/></td>
  </tr>
  <tr>
    <td width="150" height="30">Daya</td>
    <td>:</td>
    <td><input type="text" name="daya" placeholder="Daya" value="<?php echo $data['daya'];?>"/></td>
  </tr>
    <tr>
    <td width="150" height="30">Tarif_perKWH</td>
    <td>:</td>
    <td><input type="text" name="tarif_perKWH" placeholder="Tarif_perKWH" value="<?php echo $data['tarif_perKWH'];?>"/></td>
  </tr>
  <tr>
    <td width="150" height="30">Beban</td>
    <td>:</td>
    <td><input type="text" name="beban" placeholder="Beban" value="<?php echo $data['beban'];?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Update" /></td>
    <td><input type="reset" name="reset" value="Reset" /></td>
    </tr>
</table>
</form>
<br />

</div>
<div id="footer"><strong>&copy; Copyright by Cikita Agustin</a></strong></div>
</div>
<div id="credit"><strong>Cikita Agustin</a></strong></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../style/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>