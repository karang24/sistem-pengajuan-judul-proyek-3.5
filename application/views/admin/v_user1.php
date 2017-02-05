<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Utama Outlet</title>
<link rel="stylesheet" href="<?php echo base_url('mycss/hormenu.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>

</head>
<body>
<div id="header"><img src="../mycss/images/logo.png" width="491" height="120" /></div>


<div id="container">

  <div id="menu">
  	<span id="icon"><a href="">
    <img src="<?php echo base_url('mycss/images/dosen.png')?>" width="80" height="80" vspace="5" />View dosen</a></span>
    <span id="icon">
    <a href="penjualan/penjualan.php?tb=outlet">
    <img src="<?php echo base_url('mycss/images/mhs.png')?>" width="80" height="80" vspace="5" />
    View Mahasiswa</a>
    </span>
    <span id="icon">
    <a href="<?php echo site_url('admin/c_user/tampil'); ?>">
    <img src="<?php echo base_url('mycss/images/user.png')?>" width="80" height="80" vspace="5" /><br />
    View User</a>
    </span>
    <span id="icon">
    <a href="<?php echo site_url('admin/c_admin'); ?>">
    <img src="<?php echo base_url('mycss/images/arrow-back-1.png')?>" width="80" height="80" vspace="10" /><br />
    Kembali</a>
    </span>
  </div>
</div>
</body>
</html>