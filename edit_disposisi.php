<html>
<head>
<title>Disposisi</title>
</head>
<body background="123.jpg">
<?php
include ("koneksi.php");
$id = $_GET['id'];
$query  = mysql_query("select * from disposisi where no_disposisi='$id'");
$data = mysql_fetch_array($query);
?>


<form action= "update_disposisi.php" method=post>
<br><br><br><br><br><br><br><br><br><br><br><br><center><table border=1 width=400>

<tr>
<td colspan=2 align=center><marquee>Disposisi</marquee></td>
</tr>

<tr>
<td>Nomor Disposisi</td>
<td><input type="text" name="no_disposisi" value= "<?php echo $data ['no_disposisi'];?>" disabled="disabled"/><input type = "hidden" name= "no_disposisi" value="<?php echo $data ['no_disposisi'];?>"/></td>
</tr>

<tr>
<td>Nomor Agenda</td>
<td><input type=text name=no_agenda></td>
</tr>

<tr>
<td>Nomor Surat</td>
<td><input type=text name=no_surat></td>
</tr>

<tr>
<td>Kepada</td>
<td><input type=text name=kepada></td>
</tr>

<tr>
<td>keterangan</td>
<td><input type=text name=keterangan></td>
</tr>

<tr>
<td>Status Surat</td>
<td><input type=text name=status_surat></td>
</tr>

<tr>
<td>Tanggapan</td>
<td><input type=text name=tanggapan></td>
</tr>

<tr>
<td COLSPAN=2><center><input type=submit name=pr value= "PROSES"></center></td>
</tr>

</table>
</form>
</body>
</html>