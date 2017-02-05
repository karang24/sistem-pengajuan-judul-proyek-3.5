
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem informasi</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('mycss/index.css')?>"/>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('jquery_easyui/themes/default/easyui.css')?>"/>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('jquery_easyui/themes/panel.css')?>"/>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url('jquery_easyui/themes/icon.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>


<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.easyui.min.js')?>"></script>
<script>
function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
	</script>
</head>
<body>
<div id="header">
</div>
<div id="navigasi">
<div style="width:200px;height:auto;padding:5px;float:left; margin-right:10px;background:#7190E0;">
<div class="easyui-panel" title="OLAH DATA USER" collapsed="true" collapsible="true" style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-shop" plain="true" onClick="addTab('user','tampil3')">User</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-f" plain="true" onClick="addTab('Retur Barang Masuk','retur_masuk.php')">Data Dosen</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report2" plain="true" onClick="addTab('Laporan Barang Masuk','laporan/barang_masuk/pilih_lap.php')">Data Mahasiswa</a><br />
</div>
<br />
<div class="easyui-panel" title="AKSES" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="<?php echo site_url('admin/c_admin'); ?>"class="easyui-linkbutton" iconCls="icon-logout" plain="true">Kembali</a>
</div></div><br />

</div>
<br />
</div>
</div>
<div id="isi">
<div id="tt" class="easyui-tabs" style="height:500px;">
<div title="Home" style="padding-top:20px; text-align:center; background-image:url(mycss/images/materials.png); background-repeat:no-repeat;background-color:#FFF;">
</div>
</div>
</div>
<div id="footer">
</div>
</body>
</html>