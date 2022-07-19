<h2>Data Mahasiswa</h2>
<form method="post" action="proses-simpan.php">
<table>
<th bgcolor="#eee" width="50">NIM</th>
<th bgcolor="#eee" widht="100">NAMA</th>

<?php
$jum = $_POST['jum'];
for ($i=1; $i<=$jum; $i++)
{
    echo "<tr>
    <td><input type='text' name='nim[]' size='8'></td>
    <td><input type='text' name='nama[]' size='25'></td>
   </tr>";
}
?>
</table>
<input type="submit" name="simpan" value="simpan"/>
<input type="hidden" name="jum" value="<?php echo $jum ?>"/>
</form>