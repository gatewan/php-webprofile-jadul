<form method="post" action="<?php echo base_url() ?>main/simpan">
<input type ="hidden" name ="id_produk" value="<?php echo $p->id_produk?>"/>
<table>
	<tr>
		<td> Nama </td>
		<td><input type="text" name="nama" value ="<?php echo $p->nama?>" size="25" /></td>
	</tr>
	<tr>
		<td> Jenis </td>
		<td><input type="text" name="jenis" value ="<?php echo $p->jenis?>" size="8" /></td>
	</tr>
	<tr>
		<td> Stok </td>
		<td><input type="text" name="stock" value ="<?php echo $p->stock?>" size="2" /></td>
	</tr>
	<tr>
		<td> Harga </td>
		<td><input type="text" name="harga" value ="<?php echo $p->harga?>" size="15" /></td>
	</tr>
	<tr>
		<td> Merk </td>
		<td><input type="text" name="merk" value ="<?php echo $p->merk?>" size="12" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="edit" /></td>
	</tr>
</table>
</form>