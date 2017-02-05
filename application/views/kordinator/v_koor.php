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
			<tr align="center">
            
				
				<th field="judul" width="15">judul</th>
				<th field="update" width="10">update</th>
                <th field="d_acc" width="10">ACC</th>
                <th field="D_upload" width="10">Tanggal_upload</th>
                
                <th field="file" width="12">file</th>
                <th field="type_file" width="10">Type</th>
                 <th field="keterangan" width="10">Keterangan</th>
				 
			</tr>
          
  </thead>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            
            <td><?php echo $data->judul;?></td>
            <td><?php echo $data->D_update ;?></td>
            <td><?php echo $data->D_acc;?></td>
            <td><a href=""><?php echo $data->D_proposal;?></a></td>
            <td><?php echo $data->file;?></td>
            <td><?php echo $data->type_file;?></td>
            
            
            
          <td><a target="_parent" href="<?php echo base_url('assets/uploads/'.$data->file); ?>">file</a><a href="updatedata/<?php echo $data->id_proposal;?>">
                Update</a>
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