<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("perpus", $connection);
session_start();
$user_check=$_SESSION['id'];
$ses_sql=mysql_query("select  from perpus where user='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama'];
if(!isset($login_session)){
mysql_close($connection);
header('Location: index.php');
}
?>