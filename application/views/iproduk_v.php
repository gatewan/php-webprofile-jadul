
<form method="post" action="<?php echo base_url() ?>main/simpan">
<table>
	<tr>
		<td> Nama </td>
		<td><input type="text" name="nama" value ="<?php echo $this->input->post('nama')?>" size="25" /></td>
	</tr>
	<tr>
		<td> Jenis </td>
		<td><input type="text" name="jenis" value ="<?php echo $this->input->post('jenis')?>" size="8" /></td>
	</tr>
	<tr>
		<td> Stok </td>
		<td><input type="text" name="stock" value ="<?php echo $this->input->post('stock')?>" size="2" /></td>
	</tr>
	<tr>
		<td> Harga </td>
		<td><input type="text" name="harga" value ="<?php echo $this->input->post('harga')?>" size="15" /></td>
	</tr>
	<tr>
		<td> Merk </td>
		<td><input type="text" name="merk" value ="<?php echo $this->input->post('merk')?>" size="12" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="simpan" /></td>
	</tr>
</table>
</form>