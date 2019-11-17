<HTML>
<HEAD>
<TITLE>Surat Masuk</TITLE>
</HEAD>
<BODY BGCOLOR=YELLOW>
<TABLE BORDER=1 WIDTH=900>
<TR>
<TD colspan=10 align=center>Surat Masuk</TD>
</TR>

<TR>
<TD>No</TD>
<TD>Nomor Agenda</TD>
<TD>ID</TD>
<TD>Jenis Surat</TD>
<TD>Tanggal Kirim</TD>
<TD>Tanggal Masuk</TD>
<TD>Nomor Surat</TD>
<TD>Pengirim</TD>
<TD>Perihal</TD>
<TD>OPTION</TD>
</TR>

<?php
include ("koneksi.php");
$no = 1;
$query = mysql_query("select * from surat_masuk");
while($ayam = mysql_fetch_array($query)){
?>

<tr>
<td><?php echo $no; ?></td>
<td><?php echo $ayam['no_agenda']; ?></td>
<td><?php echo $ayam['id']; ?></td>
<td><?php echo $ayam['jenis_surat']; ?></td>
<td><?php echo $ayam['tanggal_kirim']; ?></td>
<td><?php echo $ayam['tanggal_terima']; ?></td>
<td><?php echo $ayam['no_surat']; ?></td>
<td><?php echo $ayam['pengirim']; ?></td>
<td><?php echo $ayam['perihal']; ?></td>
<td align="CENTER"><a href="edit_suratmasuk.php?id=<?php echo 
	$ayam ['no_agenda'];?>">EDIT </a>| <a href="delete_suratmasuk.php? 
	id=<?php echo $ayam ['no_agenda']; ?>" onClick='return confirm("Anda Yakin mau Menghapus???");'>
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
<tr><TD colspan=6 ><a href=suratmasuk.html>Back</a></td>
</tr>