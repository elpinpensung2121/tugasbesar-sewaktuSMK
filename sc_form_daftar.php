<?php
include ("koneksi.php");
$A = $_POST["ID_USER"];
$B = $_POST["NAMA"];
$C = $_POST["USERNAME"];
$D = $_POST["PASSWORD"];
$E = $_POST["LEVEL"];

$query = mysql_query ("insert into user(ID_USER, NAMA, USERNAME, PASSWORD, LEVEL) values ('$A','$B','$C','$D','$E')");

if($query)
{echo"<script>alert ('Data telah berhasil Disimpan');window.location='login.html';</script>";}
else
{echo"<script>alert ('Data tidak berhasil Disimpan');window.location='daftar.php';</script>";}
?>
