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
    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
        <form method="get" action="<?php echo site_url('c_cari_data/updatedata'); ?>">
</form>
<table align="center" id="dg" title="DATA MAHASISWA" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
  <?php foreach ($cari as $cari1) {
?>
    <thead>
			<tr>
            
				
				<th field="npm" width="15">NPM</th>
				<th field="nama_lengkap" width="50">Nama Lengkap</th>
                <th field="kelas" width="15">Kelas</th>
                <th field="jurusan" width="15">Jurusan</th>
                <th field="alamat" width="50">Alamat</th>
				<th field="no_hp" width="20">No. HP</th>
                 <th field="keterangan" width="50">Keterangan</th>
			</tr>
          
  </thead>
       
        <tr>
            
            <td> <?php echo $cari1->npm; 
}
?></td>
            <td><?php echo $cari1->nama_lengkap ;?></td>
            <td><?php echo $cari1->kelas ;?></td>
            <td><?php echo $cari1->jurusan ;?></td>
            <td><?php echo $cari1->alamat ;?></td>
            <td><?php echo $cari1->no_hp ;?></td>
            <td align="center">&nbsp;<a class="easyui-linkbutton" iconCls="icon-edit" href="updatedata/<?php echo $cari1->npm;?>">
                Update</a>
                  
            </td>
        </tr>
</table>
</body>
</html>