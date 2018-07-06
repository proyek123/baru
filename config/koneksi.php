<?php
$id="localhost";
$user="root";
$password="";
$db	 ="perpus";
$db_link = mysqli_connect($id,$user,$password,$db);
if(!$db_link){
	die ("connection.filed.".mysqli_connect_error());
}
?>