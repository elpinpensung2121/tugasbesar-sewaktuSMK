<?php
include ("koneksi.php");
$a = $_POST['id'];
$b = $_POST['nama_depan'];
$c = $_POST['nama_belakang'];
$d = $_POST['password'];
$e = $_POST['hak'];

$query = mysql_query ("insert into petugas (id,nama_depan,nama_belakang,password,hak) values ('$a','$b','$c','$d','$e')");
if ($query)
{echo"<script>alert ('Data id $a bernama $a $b Berhasil Disimpan'); window.location='index_petugas.php';</script>";}
else
{echo"<script>alert ('Data id $a bernama $a $b Tidak Berhasil Disimpan'); window.location='petugas.html';</script>";}

?>