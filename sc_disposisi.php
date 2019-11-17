<?php
include ("koneksi.php");
$a = $_POST['no_disposisi'];
$b = $_POST['no_agenda'];
$c = $_POST['no_surat'];
$d = $_POST['kepada'];
$e = $_POST['keterangan'];
$f = $_POST['status_surat'];
$g = $_POST['tanggapan'];

$query = mysql_query ("insert into disposisi (no_disposisi,no_agenda,no_surat,kepada,keterangan,status_surat,tanggapan) values ('$a','$b','$c','$d','$e','$f','$g')");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disimpan'); window.location='index_disposisi.php';</script>";}
else
{echo"<script>alert ('Data $a Tidak Berhasil Disimpan'); window.location='disposisi.html';</script>";}


?>