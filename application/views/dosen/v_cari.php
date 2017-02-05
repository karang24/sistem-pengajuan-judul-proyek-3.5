<html>
<head>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/default/easyui.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/icon.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/style.css')?>"/>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.easyui.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('libs_js/user.js')?>"/></script>
    <title>Membaca Data</title>
</head>
<body>
    
    
    <h3>Baca Data</h3>
	<?php
    if(empty($cari)){
        echo "Tidak ada data";
    }
    else{
    ?>
    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
        <form method="post" action="<?php echo site_url('c_cari_data/bimbingan'); ?>">
</form>
<table align="center" id="dg" title="DATA MAHASISWA" style="height:300px" class="easyui-datagrid"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
 
    <thead>
			<tr>
            
				
				<th field="npm" width="15">NPM</th>
				<th field="judul" width="50">Judul</th>
                <th field="kelas" width="15">file</th>
                <th field="jurusan" width="15">Type_file</th>
                
                
                 <th field="keterangan" width="50">Keterangan</th>
			</tr>
            <?php 
  $no = 1;
  foreach ($cari as $tes) {
?>
  </thead>
       
        <tr>
            
            <td> <?php echo $tes->npm; 

?></td><td> <?php echo $tes->judul; 
?></td>
            <td><?php echo $tes->file ;?></td>
  <td><?php echo $tes->type_file ;?></td>
            <td> <a class='easyui-linkbutton' iconCls='icon-edit' href='bimbingan1/<?php echo $tes->npm;?>'>
                bimbingan</a>
                <input hidden <?php echo $tes->type_file ;}?>>
            </td>
        </tr>
		<?php
        }
        ?>
</table>
</body>
</html>