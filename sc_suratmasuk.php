<?php
include ("koneksi.php");
$a = $_POST['no_agenda'];
$b = $_POST['id'];
$c = $_POST['jenis_surat'];
$d = $_POST['tanggal_kirim'];
$e = $_POST['tanggal_terima'];
$f = $_POST['no_surat'];
$g = $_POST['pengirim'];
$h = $_POST['perihal'];

$query = mysql_query ("insert into surat_masuk (no_agenda,id,jenis_surat,tanggal_kirim,tanggal_terima,no_surat,pengirim,perihal) values ('$a','$b','$c','$d','$e','$f','$g','$h')");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disimpan'); window.location='index_suratmasuk.php';</script>";}
else
{echo"<script>alert ('Data $a Tidak Berhasil Disimpan'); window.location='suratmasuk.html';</script>";}

?>