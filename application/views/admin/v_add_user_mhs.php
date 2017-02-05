<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap.min.css"')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_3_2_0/css/bootstrap-theme.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/hovernav/hovernav.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap_datepicker/css/datepicker.css')?> rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css')?> rel="stylesheet">
    <title>form mahasiswa</title> <!-- variabel diambil dari controller -->
    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
<style>

    body{
        margin:20px 10%;
    }
</style>

</head>
<body>
<div id="wrapper">
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div align="justify" class="panel panel-default">
<h3>Tambah Mahasiswa</h3>  <div  align="justify" class="panel-body">
     <form  action="<?php echo site_url('admin/c_user/tambahdata1'); ?>" method="post" enctype="multipart/form-data">
    <?php
    echo form_open('admin/c_user/tambahdata1');
    ?>
 <table class="table table-striped" align="center">
       <tr>
        <td>NPM</td>
        <td>:</td>
        <td> <div class="col-sm-10">
         <input type="text" name="username" class="form-control">
            </div></td>
    </tr>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><div class="col-sm-10">
         <input type="text" name="nama_lengkap" class="form-control">
            </div></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><div class="col-sm-10">
         <input type="text" name="kelas" class="form-control">
            </div></td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><div class="col-sm-10">
         <input type="text" name="jurusan" class="form-control">
            </div></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><div class="col-sm-10">
         <input type="text" name="alamat" class="form-control">
            </div></td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>:</td>
        <td><div class="col-sm-10">
         <input type="text" name="no_hp" class="form-control">
            </div></td>
    </tr>
     <td>Password</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="password1" value="12345" type="password" readonly class="form-control">
<input name="password" value="12345" type="hidden"></div></td>
    </tr>
     <td>Level</td>
        <td>:</td>
        <td><div class="col-sm-10"><input name="level1" value="mahasiswa" type="text" readonly class="form-control">
<input name="level" value="mahasiswa" type="hidden"></div></td>
    </tr>
    <tr>
        <td><?php echo form_submit('submit','Simpan','id="submit"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>
</body>
</html>