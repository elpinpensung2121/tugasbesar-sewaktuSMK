<html>
<head>
<title>Surat Masuk</title>
</head>
<body bgcolor="#FF66FF">
<?php
include ("koneksi.php");
$id = $_GET['id'];
$query  = mysql_query("select * from surat_masuk where no_agenda='$id'");
$data = mysql_fetch_array($query);
?>


<form action= "update_suratmasuk.php" method=post>
<br><br><br><br><br><br><br><br><br><br><br><br><center><table border=1 width=400>

<tr>
<td colspan=2 align=center><marquee>Surat Masuk</marquee></td>
</tr>

<tr>
<td>No Agenda</td>
<td><input type="text" name="no_agenda" value= "<?php echo $data ['no_agenda'];?>" disabled="disabled"/><input type = "hidden" name= "no_agenda" value="<?php echo $data ['no_agenda'];?>"/></td>
</tr>

<tr>
<td>ID</td>
<td><input type=text name=id></td>
</tr>

<tr>
<td>Jenis Surat</td>
<td><input type=text name=jenis_surat></td>
</tr>

<tr>
<td>Tanggal Kirim</td>
<td><input type=text name=tanggal_kirim></td>
</tr>

<tr>
<td>Tanggal Terima</td>
<td><input type=text name=tanggal_terima></td>
</tr>

<tr>
<td>Nomor Surat</td>
<td><input type=text name=no_surat></td>
</tr>

<tr>
<td>Pengirim</td>
<td><input type=text name=pengirim></td>
</tr>

<tr>
<td>Perihal</td>
<td><input type=text name=perihal></td>
</tr>

<tr>
<td COLSPAN=2><center><input type=submit name=pr value= "PROSES"></center></td>
</tr>

</table>
</form>
</body>
</html>