<HTML>
<HEAD>
<TITLE>Disposisi</TITLE>
</HEAD>
<BODY BGCOLOR=YELLOW>
<TABLE BORDER=1 WIDTH=900>
<TR>
<TD colspan=9 align=center>Disposisi</TD>
</TR>

<TR>
<TD>No</TD>
<TD>Nomor Disposisi</TD>
<TD>Nomor Agenda</TD>
<TD>Nomor Surat</TD>
<TD>Kepada</TD>
<TD>Keterangan</TD>
<TD>Status Surat</TD>
<TD>Tanggapan</TD>
<TD>OPTION</TD>
</TR>

<?php
include ("koneksi.php");
$no = 1;
$query = mysql_query("select * from disposisi");
while($ayam = mysql_fetch_array($query)){
?>

<tr>
<td><?php echo $no; ?></td>
<td><?php echo $ayam['no_disposisi']; ?></td>
<td><?php echo $ayam['no_agenda']; ?></td>
<td><?php echo $ayam['no_surat']; ?></td>
<td><?php echo $ayam['kepada']; ?></td>
<td><?php echo $ayam['keterangan']; ?></td>
<td><?php echo $ayam['status_surat']; ?></td>
<td><?php echo $ayam['tanggapan']; ?></td>
<td align="CENTER"><a href="edit_disposisi.php?id=<?php echo 
	$ayam ['no_disposisi'];?>">EDIT </a>| <a href="delete_disposisi.php? 
	id=<?php echo $ayam ['no_disposisi']; ?>" onClick='return confirm("Anda Yakin mau Menghapus???");'>
	DELETE</a></td>
</tr>
<?php
$no++;
} ?>

</table>
</body>
</html>

</TABLE>
</BODY>
</HTML>
<tr><TD colspan=6 ><a href=disposisi.html>Back</a></td>
</tr>