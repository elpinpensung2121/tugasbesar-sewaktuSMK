<?php
include ("koneksi.php");

$a = $_POST['no_agenda'];
$b = $_POST['id'];
$c = $_POST['jenis_surat'];
$d = $_POST['tanggal_kirim'];
$e = $_POST['no_surat'];
$f = $_POST['pengirim'];
$g = $_POST['perihal'];

$query = mysql_query("update surat_keluar set id='$b',jenis_surat='$c',tanggal_kirim='$d',no_surat='$e',pengirim='$f',perihal='$g' where no_agenda='$a'");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disave'); window.location = 'index_suratkeluar.php';</script>";}
else
{echo"<script>alert ('Data Tidak Berhasil Disave, Kemungkinan Ada Data yang Sama'); window.location = 'edit_suratkeluar.php';</script>";}


?>