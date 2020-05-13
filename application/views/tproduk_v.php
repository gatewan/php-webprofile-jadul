<a href="<?php echo base_url() ?> main/input">Tambah</a><br>
<a href="http://localhost/showroom/main/input">Tambah</a>
<form action="<?php echo base_url()?>main/cari" method="post"/>
	<select name="cbkategori">
		<option <?php if($this->session->userdata('cbkategori')=="nama") echo 'c' ?> value="nama">Nama</option>
		<option <?php if($this->session->userdata('cbkategori')=="harga") echo 'select' ?> value="harga">Harga</option>
		<option <?php if($this->session->userdata('cbkategori')=="jenis") echo 'select' ?> value="jenis">Jenis</option>
	</select>
	<td><input type="text" value ="<?php echo $this->session->userdata('txtcari')?>" name="txtcari"></td>
	<tr> 
	<td><input type="submit" value="cari" /></td></tr>
</form>


<table border="1">
	<tr>
		<th> No </th>
		<th> Nama </th>
		<th> Jenis </th>
		<th> Merk </th>
		<th> Harga</th>
		<th> Stock </th>
		<th> Kelola </th>
	</tr>
	<?php $no= $this->uri->segment(3, 0)+1; foreach ($produk->result() as $pro){ ?>
	<tr>
		
		<td><?php echo $no++?></td>
		<td><?php echo $pro->nama?></td>
		<td><?php echo $pro->jenis?></td>
		<td><?php echo $pro->merk?></td>
		<td><?php echo $pro->harga?></td>
		<td><?php echo $pro->stock?></td>
		<td>
		<?php echo anchor('main/edit/'.$pro->id_produk,'Edit');?>
		<?php echo anchor('main/hapus/'.$pro->id_produk,'Hapus');?>
		</td>
	</tr>
	<?php } ?>
</table border>

<?php 
	echo $this->pagination->create_links();
	echo ' &nbsp; Total Record : '.$total_rows;
 ?>
