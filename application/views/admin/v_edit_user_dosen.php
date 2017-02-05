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
  <div align="justify" class="panel-heading"><h3>Update Data</h3></div>
  <div  align="justify" class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form  action="<?php echo site_url('admin/c_user/updatedata2/'.$hasil->nik); ?>" method="post" enctype="multipart/form-data">
    

    <?php
    echo form_open('admin/c_user/updatedata2/'.$hasil->nik);
    ?>
     <table class="table table-striped" align="center">
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="nik" value="<?php echo $hasil->nik; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="nama" value="<?php echo $hasil->nama; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="no_hp" value="<?php echo $hasil->no_hp; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td><?php echo form_submit('submit','Update', 'id="submit"');?></td>
        </tr>
        </table>
        <?php form_close(); ?>
        
</body>
</html>