<?php 
include "config/koneksi.php";
if(isset($_POST['submit']));{
$nama=$_POST['nama'];
$nis=$_POST['nis'];

}
$sql="select * from anggota where nama='".$nama."' and nis='".$nis."'";
$result=mysqli_query($db_link,$sql);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_row($result);
if($num >0){
session_start();
$_SESSION['nama']="nama";
$_SESSION['nis']="nis";
echo "<script>alert('anda berhasil login');
document.location.href='index.php';</script>\n";
}else {
echo "<script>alert('Anda bukanlah Anggota!!!');
document.location.href='index.php';</script>\n";
}
?>