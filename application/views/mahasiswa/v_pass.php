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
        <form method="get" action="<?php echo site_url('c_cari_data/updatedata1'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input class='easyui-linkbutton' easyui-linkbutton iconCls='icon-add' type="submit" value="Tampilkan biodata"></td>
</tr>
</table>
</form>
<table align="center" id="dg" title="DATA MAHASISWA" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
  <?php foreach ($cari as $cari1) {
?>
    <thead>
			<tr>
            
				
				<th field="npm" width="15">Username</th>
				<th field="password" width="10">Password</th>
				<th field="level" width="10">Level</th>
				<th field="keterangan" width="10">Keterangan</th>
			</tr>
          
  </thead>
       
        <tr>
            
            <td> <?php echo $cari1->username; 
}
?></td>
            <td><?php echo $cari1->password;?></td>
           <td><?php echo $cari1->level;?></td>
            <td align="center">&nbsp;<a class="easyui-linkbutton" iconCls="icon-edit" href="updatedata1/<?php echo $cari1->username;?>">
                Update</a>
                  
            </td>
        </tr>
</table>
</body>
</html>