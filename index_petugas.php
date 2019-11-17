<HTML>
<HEAD>
<TITLE>Petugas</TITLE>
</HEAD>
<BODY BGCOLOR=YELLOW>
<TABLE BORDER=1 WIDTH=900>
<TR>
<TD colspan=7 align=center>Petugas</TD>
</TR>

<TR>
<TD>No</TD>
<TD>ID</TD>
<TD>Nama Depan</TD>
<TD>Nama Belakang</TD>
<TD>Password</TD>
<TD>Hak</TD>
<TD>OPTION</TD>
</TR>

<?php
include ("koneksi.php");
$no = 1;
$query = mysql_query("select * from petugas");
while($ayam = mysql_fetch_array($query)){
?>

<tr>
<td><?php echo $no; ?></td>
<td><?php echo $ayam['id']; ?></td>
<td><?php echo $ayam['nama_depan']; ?></td>
<td><?php echo $ayam['nama_belakang']; ?></td>
<td><?php echo $ayam['password']; ?></td>
<td><?php echo $ayam['hak']; ?></td>
<td align="CENTER"><a href="edit_petugas.php?id=<?php echo 
	$ayam ['id'];?>">EDIT </a>| <a href="delete_petugas.php? 
	id=<?php echo $ayam ['id']; ?>" onClick='return confirm("Anda Yakin mau Menghapus???");'>
	DELETE</a></td></tr>
<?php
$no++;
} ?>

</table>
</body>
</html>

</TABLE>
</BODY>
</HTML>
<tr><TD colspan=6 ><a href=petugas.html>Back</a></td>
</tr>