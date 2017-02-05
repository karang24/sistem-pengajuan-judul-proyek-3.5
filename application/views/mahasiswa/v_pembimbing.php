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
    <h3><div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukaS
	</h3>

   
    <table align="center" id="dg" title="DATA DOSEN" class="easyui-datagrid" style="height:250px"
			
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
            
				
				<th field="nik" width="15">NIK</th>
				<th field="nama" width="50">Nama Lengkap</th>
              
                
                <th field="no_hp" width="50">No. HP</th>
                 
			</tr>
          
  </thead>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            <td><?php echo $data->nik ;?></td>
            <td><?php echo $data->nama ;?></td>
            <td><?php echo $data->no_hp;?></td>

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