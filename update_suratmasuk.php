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

$query = mysql_query("update surat_masuk set id='$b',jenis_surat='$c',tanggal_kirim='$d',tanggal_terima='$e',no_surat='$f',pengirim='$g',perihal='$h' where no_agenda='$a'");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disave'); window.location = 'index_suratmasuk.php';</script>";}
else
{echo"<script>alert ('Data Tidak Berhasil Disave, Kemungkinan Ada Data yang Sama'); window.location = 'edit_suratmasuk.php';</script>";}


?>