
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
<link rel="shortcut icon" href="<?php echo base_url('/mycss/images/logo_poltekpos.ico')?>">
<body>
<div id="wrapper">
<div id="header" align="center" style="background-color:#7190E0"> <img src="<?php echo base_url('mycss/images/sistem.png')?>"width="491" height="120" /></div>
<br />
<div id="navigasi">
<div style="width:200px;height:auto;padding:5px;float:left; margin-right:10px;background:#7190E0;">
<div class="easyui-panel" title="AKSES" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-shop" plain="true" onClick="addTab('proposal','tampil3')">Pengajuan Proposal</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-f" plain="true" onClick="addTab('Biodata Mahasiswa','tampil7')">Biodata</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report2" plain="true" onClick="addTab('Ganti Password','tampil10')">Ganti Password</a><br/>
</div>
<br />
<div id="wrapper" class="easyui-panel" title="AKSES" collapsed="true" collapsible="true" style="width:200px;height:auto;padding:10px;">

<a class="easyui-linkbutton" iconCls="icon-logout" plain="true" href="<?php echo site_url('mahasiswa/c_mahasiswa'); ?>">kembali</a>
</div></div>

</div>
</div>
</div>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
 <div class="col-sm-10">
                <input type="hidden" name="npm" value="<?php print $session_id;?>" class="form-control">
            </div>
<div id="isi">
<div id="tt" class="easyui-tabs" style="height:600px;">
<div id="wrapper" title="Home" style="padding-top:20px; text-align:center; background-image:url(mycss/images/logo1.png); background-repeat:no-repeat;background-color:#FFF;">
 <img src="<?php echo base_url('mycss/images/logo1.png')?>"width="491" height="491" />
</div>
</div>
</div>
</div>


<div id="footer">
</div>
</body>
</html>