<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Utama Outlet</title>
<link rel="stylesheet" href="<?php echo base_url('mycss/hormenu.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
 
      <?php $this->load->library('session');
	  $session_id = $this->session->userdata('level');
	  ?>
</head>
<body>

<div align="center" id="header"> <img src="<?php echo base_url('mycss/images/sistem.png')?>"width="491" height="120" />
<h3 align="center">Selamat datang  <?php echo $username; ?>    dihalaman<b> dosen</b></h3>
</div>


<div id="container">

  <div id="menu">
  	 <span id="icon"><a href="<?php echo site_url('dosen/c_bimbingan/tampil'); ?>">
    <img src="<?php echo base_url('mycss/images/icon_web.png')?>" width="80" height="80" vspace="5" />
   </a></span></span>
    <span id="icon">
    <a href="<?php echo site_url('dosen/c_dosen/logout'); ?>">
    <img src="<?php echo base_url('mycss/images/log-off.png')?>" width="80" height="80" vspace="10" /><br />
   </a>
    </span>
    </span>
  </div>
</div>
</body>
</html>