<?php
include ("koneksi.php");

$a = $_POST['id'];
$b = $_POST['nama_depan'];
$c = $_POST['nama_belakang'];
$d = $_POST['password'];
$e = $_POST['hak'];

$query = mysql_query("update petugas set nama_depan='$b',nama_belakang='$c',password='$d',hak='$e' where id='$a'");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disave'); window.location = 'index_petugas.php';</script>";}
else
{echo"<script>alert ('Data Tidak Berhasil Disave, Kemungkinan Ada Data yang Sama'); window.location = 'edit_petugas.php';</script>";}


?>