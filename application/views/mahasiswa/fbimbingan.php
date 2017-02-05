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
        echo "<script>alert('Anda Belum Pernah Bimbing, Segera Hubungan Pembimbing Anda');history.go(-1);</script>";
    }
    else{
    ?>
    <div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
        <form method="post" action="<?php echo site_url('/mahasiswa/c_user_mhs/uploadlaporan'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="UPLOAD DRAF"></td>
</tr>
</table>
</form>
<table align="center" id="dg" title="DATA PEMBIMBING" style="height:300px" class="easyui-datagrid"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
 
    <thead>
			<tr>
            
				
				<th field="npm" width="15">NPM</th>
				<th field="judul" width="7">Tanggal</th>
                <th field="kelas" width="50">Uraian</th>
                <th field="jurusan" width="15">Keterangan</th>
			</tr>
            <?php 
  $no = 1;
  foreach ($cari as $tes) {
?>
  </thead>
       
        <tr>
            
            <td> <?php echo $tes->npm;?></td>
            <td> <?php echo $tes->d_bimbingan;?></td>
			<td> <?php echo $tes->uraian; ?></td>
  <td><?php echo $tes->ttd;}?></td>

            
           
        </tr>
		<?php
        }
        ?>
</table>
</body>
</html>