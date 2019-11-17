<?php
include ("koneksi.php");

$a = $_POST['no_disposisi'];
$b = $_POST['no_agenda'];
$c = $_POST['no_surat'];
$d = $_POST['kepada'];
$e = $_POST['keterangan'];
$f = $_POST['status_surat'];
$g = $_POST['tanggapan'];

$query = mysql_query("update disposisi set no_agenda='$b',no_surat='$c',kepada='$d',keterangan='$e',status_surat='$f',tanggapan='$g' where no_disposisi='$a'");
if ($query)
{echo"<script>alert ('Data $a Berhasil Disave'); window.location = 'index_disposisi.php';</script>";}
else
{echo"<script>alert ('Data Tidak Berhasil Disave, Kemungkinan Ada Data yang Sama'); window.location = 'edit_disposisi.php';</script>";}


?>