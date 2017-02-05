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
<h3><?php
        print "<a class='easyui-linkbutton' easyui-linkbutton' iconCls='icon-add' href=" . $this->config->site_url() . "/admin/c_user/tambahdata1/>Tambah User</a>";
        ?></h3>
<table align="center" id="dg" title="DATA MAHASISWA" class="easyui-datagrid" style="height:300px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
    <?php
    if(empty($hasil)){
        echo "Tidak ada data";
    }
    else{
    ?>
    <thead>
			<tr>
            
				
				<th field="npm" width="15">NPM</th>
				<th field="nama_lengkap" width="50">Nama Lengkap</th>
                <th field="kelas" width="15">Kelas</th>
                <th field="jurusan" width="15">Jurusan</th>
                <th field="alamat" width="30">Alamat</th>
                <th field="no_hp" width="20">No. HP</th>
                 <th field="keterangan" width="50">Keterangan</th>
			</tr>
          
  </thead>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            
            <td><?php echo $data->npm ;?></td>
            <td><?php echo $data->nama_lengkap ;?></td>
            <td><?php echo $data->kelas ;?></td>
            <td><?php echo $data->jurusan ;?></td>
            <td><?php echo $data->alamat ;?></td>
            <td><?php echo $data->no_hp ;?></td>
            <td align="center">&nbsp;<a class="easyui-linkbutton" iconCls="icon-edit" href="updatedata1/<?php echo $data->npm;?>">
                Update</a> |
                  <a class="easyui-linkbutton" iconCls="icon-remove" href="deletedata1/<?php echo $data->npm;?>">
                Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
 
    <?php
    }
    ?>
 
</body>
</html>