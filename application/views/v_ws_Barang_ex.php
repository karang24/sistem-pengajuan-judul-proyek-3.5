 <style>
	tr, td{
		padding:3px 8px 3px 10px;
	}
</style> 
<h1>Web Service</h1> 
<?php //echo anchor('rest_client_barang/form_add_barang', '<h3>Input</h3>')?>
<table border="1" style="border-collapse:collapse" width="50%">
	<tr>
		<td>No.</td>
		<td>Nama Lengkap</td>
		<td>Kelas</td>
		<td>Jurusan</td>
		<td>Alamat</td>
		<td>No. HP</td>
	</tr>
	<?php $i=1; 
	 if(isset($dataws)){
		foreach($dataws as $brg){ ?>
	<tr>
		<td><?php echo $i++?></td>
		<td><?php echo $brg->nama_lengkap;?></td>
		<td><?php echo $brg->kelas;?></td>
		<td><?php echo $brg->jurusan;?></td>
		<td><?php echo $brg->alamat;?></td>
		<td><?php echo $brg->no_hp;?></td>
	</tr>
	<?php } 
	 }
	?>
</table>