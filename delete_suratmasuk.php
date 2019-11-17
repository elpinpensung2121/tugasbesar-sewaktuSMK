<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from surat_masuk where no_agenda='$id'");
if ($query){
echo "<script>alert('data telah dihapus');window.location='index_suratmasuk.php'; </script>";
}
?>