<html>
<head>
<title>Petugas </title>
</head>
<body bgcolor="#FF66FF">
<?php
include ("koneksi.php");
$id = $_GET['id'];
$query  = mysql_query("select * from petugas where id='$id'");
$data = mysql_fetch_array($query);
?>


<form action= "update_petugas.php" method=post>
<br><br><br><br><br><br><br><br><br><br><br><br><center><table border=1 width=400>

<tr>
<td colspan=2 align=center><marquee>Petugas</marquee></td>
</tr>

<tr>
<td>ID</td>
<td><input type="text" name="id" value= "<?php echo $data ['id'];?>" disabled="disabled"/><input type = "hidden" name= "id" value="<?php echo $data ['id'];?>"/></td>
</tr>

<tr>
<td>Nama Depan</td>
<td><input type=text name=nama_depan></td>
</tr>

<tr>
<td>Nama Belakang</td>
<td><input type=text name=nama_belakang></td>
</tr>

<tr>
<td>Password</td>
<td><input type=password name=password></td>
</tr>

<tr>
<td>Hak</td>
<td><input type=text name=hak></td>
</tr>

<tr>
<td COLSPAN=2><center><input type=submit name=pr value= "PROSES"></center></td>
</tr>

</table>
</form>
</body>
</html>