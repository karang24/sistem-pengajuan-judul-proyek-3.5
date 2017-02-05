<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/default/easyui.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/icon.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('jquery_easyui/themes/style.css')?>"/>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.easyui.min.js')?>"/></script>
<script type="text/javascript" src="<?php echo base_url('libs_js/user.js')?>"/></script>
</head>

<body>
<h2>OLAH DATA USER</h2>
<div class="info"  style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
</div>
<?php
        print "<a class='easyui-linkbutton' easyui-linkbutton' iconCls='icon-add' href=" . $this->config->site_url() . "/admin/c_user/tambahdata/>Tambah User</a>";
        ?>
<table id="dg" title="DATA USER" class="easyui-datagrid" style="height:250px"
			
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
            
				<th field="Username" width="50">USERNAME</th>
				<th field="nm_user" width="50">PASSOWRD</th>
				<th field="level" width="50">LEVEL</th>
                <th field="keterangan" width="50"></th>
                <th field="keterangan1" width="50"></th>
			</tr>
          
  </thead>
          <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            <td><?php echo $data->username ;?></td>
            <td><?php echo $data->password ;?></td>
            <td><?php echo $data->level;?></td>
            <td><a class="easyui-linkbutton" iconCls="icon-edit" href="updatedata/<?php echo $data->id_user;?>/<?php echo $data->username ;?>">
                Update </a>
          </td>
                <td>
                 <a class="easyui-linkbutton" iconCls="icon-remove" href="deletedata/<?php echo $data->id_user;?>">
                Delete</a>
            </td>
        </tr>
          
        <?php
        }
        ?>
        <tr>
              <?php
    echo form_open('admin/c_user/tambahdata');
    ?>
            
           
            <?php echo form_close(); ?></td>
            
        </tr>
</table>

 
		
		
	</div>
    

</body>
</html>