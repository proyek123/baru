<?php 
include "config/koneksi.php";
if(isset($_POST['submit']));{
$user=$_POST['user'];
$pass=$_POST['pass'];
}
$uyy="select * from admin where user='".$user."' and pass='".$pass."'";
$kui=mysqli_query($db_link,$uyy);
$ayy=mysqli_num_rows($kui);
$yoo=mysqli_fetch_row($kui);
if($ayy >0 ){
session_start();
$_SESSION['user']="user";
$_SESSION['pass']="pass";
echo "<script>alert('Login Sukses');
document.location.href='data_anggota.php';</script>\n";
}else {
echo "<script>alert ('Login Gagal');
document.location.href='login_admin.php';</script>\n";
}
?>