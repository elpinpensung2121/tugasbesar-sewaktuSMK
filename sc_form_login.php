<?php
include ("koneksi.php");
$A = $_POST["USERNAME"];
$B = $_POST["PASSWORD"];

$query = mysql_query ("select * from user where USERNAME='$A' and PASSWORD='$B'");
$cek = mysql_num_rows($query);

if($cek)
{echo"<script>alert ('Selamat datang User $A');window.location='frame.html';</script>";}
else
{echo"<script>alert ('Password Salah');window.location='login.html';</script>";}
?>
