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
        <form method="get" action="<?php echo site_url('c_cari_data/updatedata2'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input class="easyui-linkbutton" "easyui-linkbutton" iconCls='icon-add' type="submit" value="Tampilkan biodata"></td>
</tr>
</table>
</form>
<table align="center" id="dg" title="DATA DOSEN" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
  <?php foreach ($cari as $cari1) {
?>
    <thead>
			<tr>
            
				
				<th field="nik" width="15">NIK</th>
				<th field="nama" width="50">Nama Lengkap</th>
                <th field="no_hp" width="15">Kelas</th>
                 <th field="keterangan" width="50">Keterangan</th>
			</tr>
          
  </thead>
       
        <tr>
            
            <td> <?php echo $cari1->nik; 
}
?></td>
            <td><?php echo $cari1->nama ;?></td>
            <td><?php echo $cari1->no_hp ;?></td>
            <td align="center">&nbsp;<a class="easyui-linkbutton" iconCls="icon-edit" href="updatedata2/<?php echo $cari1->nik;?>">
                Update</a>
                  
            </td>
        </tr>
</table>
</body>
</html>