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
        <form method="post" action="<?php echo site_url('c_cari_data/bimbingan'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input class='easyui-linkbutton' easyui-linkbutton' iconCls='icon-add' type="submit" value="Tampilkan biodata"></td>
</tr>
</table>
</form>
<table align="center" id="dg" title="DATA PEMBIMBING" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
 
    <thead>
			<tr>
            
				
				<th field="judul" width="15">Judul</th>
				<th field="ket" width="50">Keterangan</th>
                <th field="npm" width="15">Mahasiswa</th>
                <th field="nik" width="15">Dosen</th>                
                
                
			</tr>
           <?php 
  foreach ($cari as $tes) {
?>
  </thead>
       
        <tr>
            
            <td> <?php echo $tes->judul;;?></td>
			<td><?php echo $tes->ket;?></td>
            <td><?php echo $tes->npm?></td>
			<td><a href="<?php echo site_url('/mahasiswa/c_user_mhs/tampil20/');?>"><?php echo $tes->nik?></a></td>
            <td> 
                  <input type="hidden" value="<?php echo $tes->nik;}?>">
            </td>
        </tr>
	
</table>
</body>
</html>