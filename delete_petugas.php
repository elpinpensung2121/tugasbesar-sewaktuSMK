<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from petugas where id='$id'");
if ($query){
echo "<script>alert('data telah dihapus');window.location='index_petugas.php'; </script>";
}
?>