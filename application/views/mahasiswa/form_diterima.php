<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Utama Outlet</title>
<link rel="stylesheet" href="<?php echo base_url('mycss/hormenu.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
 
      <?php $this->load->library('session');
	  $session_id = $this->session->userdata('status_proposal');
	  ?>
</head>
<body>

<div align="center" id="header"> <img src="<?php echo base_url('mycss/images/sistem.png')?>"width="491" height="120" />
<h3 align="center">Selamat datang  <?php echo $this->session->userdata('status_proposal'); ?>    dihalaman <b>Mahasiswa</b></h3>
</div>


<div id="container">

  <div id="menu">
  	<span id="icon"><a href="<?php echo site_url('mahasiswa/c_user_mhs/indexditerima'); ?>">
    <img src="<?php echo base_url('mycss/images/icon_web.png')?>" width="80" height="80" vspace="5" />
   </a></span>
    <span id="icon">
    <a href="<?php echo site_url('mahasiswa/c_mahasiswa/logout'); ?>">
    <img src="<?php echo base_url('mycss/images/log-off.png')?>" width="80" height="80" vspace="10" /><br />
   </a>
    </span>
  </div>
</div>
</body>
</html>