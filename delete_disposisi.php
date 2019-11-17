<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from disposisi where no_disposisi='$id'");
if ($query){
echo "<script>alert('data telah dihapus');window.location='index_disposisi.php'; </script>";
}
?>