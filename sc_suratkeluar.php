<?php
include ("koneksi.php");
$a = $_POST['no_agenda'];
$b = $_POST['id'];
$c = $_POST['jenis_surat'];
$d = $_POST['tanggal_kirim'];
$e = $_POST['no_surat'];
$f = $_POST['pengirim'];
$g = $_POST['perihal'];

$query = mysql_query ("insert into surat_keluar (no_agenda,id,jenis_surat,tanggal_kirim,no_surat,pengirim,perihal) values ('$a','$b','$c','$d','$e','$f','$g')");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disimpan'); window.location='index_suratkeluar.php';</script>";}
else
{echo"<script>alert ('Data $a Tidak Berhasil Disimpan'); window.location='suratkeluar.html';</script>";}

?>