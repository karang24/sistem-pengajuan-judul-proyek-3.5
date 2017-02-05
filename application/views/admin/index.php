<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Utama Outlet</title>
<link rel="stylesheet" href="<?php echo base_url('mycss/hormenu.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>

</head>
<body>
<div id="header"> <img src="<?php echo base_url('mycss/images/sistem.png')?>"width="491" height="120" /></div>


<div id="container">

  <div id="menu">
  	<span id="icon"><a href="<?php echo site_url('admin/c_user/tampil'); ?>">
    <img src="<?php echo base_url('mycss/images/user.png')?>" width="80" height="80" vspace="5" />
    Kelola Data User</a></span>
    <span id="icon">
    <a href="penjualan/penjualan.php?tb=outlet">
    <img src="<?php echo base_url('mycss/images/kelola_proposal.png')?>" width="80" height="80" vspace="5" />
    Kelola Data Proposal</a>
    </span>
    <span id="icon">
    <a href="cek_stok/cek_stok.php?tb=gudang">
    <img src="<?php echo base_url('mycss/images/kelola_bimbingan.png')?>" width="80" height="80" vspace="5" /><br />
    Kelola Data Bimbingan</a>
    </span>
    <span id="icon">
    <a href="">
    <img src="<?php echo base_url('mycss/images/kelola_draf.png')?>" width="80" height="80" vspace="5" /><br />
    Kelola Data Laporan Proyek</a>
    </span>
     
    <span id="icon">
    <a href="<?php echo site_url('admin/c_admin/logout'); ?>">
    <img src="<?php echo base_url('mycss/images/log-off.png')?>" width="80" height="80" vspace="10" /><br />
    Log Out</a>
    </span>
  </div>
</div>
</body>
</html>