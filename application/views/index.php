<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN SISTEM INFORMASI PENGAJUAN JUDUL PROJECT IT</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Sistem</title>
 <link rel="stylesheet" href="<?php echo base_url('mycss/login.css')?>"/>
<link rel="stylesheet" href="<?php echo base_url('mycss/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('mycss/style.css')?>"/>
<script type="text/javascript" src="<?php echo base_url('jquery_easyui/jquery.min.js')?>"></script>
<script type="text/jscript" src="<?php echo base_url('../libs_js/login.js')?>"></script>

</head>
<link rel="shortcut icon" href="<?php echo base_url('mycss/images/logo_poltekpos.ico')?>">
<body>
<div id="wrapper">
<div id="wrapper" class="lg-container">
<h1>LOGIN</h1>
<p align="center"> Sistem Informasi Pengajuan Judul Project</p>
<br />

<?php echo form_open("auth/cek_login"); ?>

		  <div align="center">
		<input align="middle" type="text" name="username" placeholder="Username" required>
		</div>
		  <div align="center">
          <br>
		<input align="middle" type="password" name="password" required placeholder="Password"></p></div>
		<p align="center">
		  <button type="submit" id="login">Login</button></p>
		<?php echo form_close(); ?>
        <br />
        <p align="center">&copy; Created By :<strong> JaLu</strong></p>
  </div>
</div>
<div id="message"></div>
           <footer >
             <p align="center"> <span class="fontfooter">&copy; photo by: Novaldi&Logo by : Frianti</span> </p></footer>
     

</body>
</html>
