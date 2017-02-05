<h3 class="text-info" style="text-align: center">VIEW DATA BARANG Webservise</h3>
	
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>NO</th>
		<th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat<th>
		<th>No. HP<th>
        <th class="span2">
            <a href="#modalAddBarang" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">
                <i class="icon-plus-sign icon-white"></i> PRINT
            </a>
        </th>
    </tr>
    </thead>
    <tbody>

<?php $i=1; 
	 if(isset($items)){
		 foreach($items as $brg){ ?>
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
</tbody>
</table>
<!-- <style>
	tr, td{
		padding:3px 8px 3px 10px;
	}
</style> 
<h1>Web Service</h1> -->
<?php //echo anchor('rest_client_barang/form_add_barang', '<h3>Input</h3>')?>
<!--<table border="1" style="border-collapse:collapse" width="50%">
	<tr>
		<td>No.</td>
		<td>ID BARANG</td>
		<td>NAMA BARANG</td>
		<td>STOK</td>
		<td>KETERANGAN</td>
		<td colspan="2">Kelola</td>
	</tr>
	<?php //$i=1; 
	 //if(isset($items)){
		// foreach($items as $brg){ ?>
	<tr>
		<td><?php //echo $i++?></td>
		<td><?php //echo $brg->Id_items;?></td>
		<td><?php //echo $brg->name;?></td>
		<td><?php //echo $brg->quantity_on_hand;?></td>
		<td><?php //echo $brg->remarks;?></td>
		
	</tr>
	<?php //} 
	// }
	?>
</table> -->