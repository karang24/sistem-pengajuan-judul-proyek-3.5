<html>
<head>
    <title>Mengupdate Data</title>
</head> <meta charset="utf-8">
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
     <form  action="<?php echo site_url('c_cari_data/updatedata/'.$cari->npm); ?>" method="post" enctype="multipart/form-data">
<body>
    
    <table class="table table-striped" align="center">
    <?php
    echo form_open('c_cari_data/updatedata/'.$cari->npm);
    ?>
       <tr>
            <td>NPM</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="npm" value="<?php echo $cari->npm; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="nama_lengkap" value="<?php echo $cari->nama_lengkap; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><div class="col-sm-5"><select class="form-control" name="kelas" style="width:120px;" required="true">
                    <option value="2A">2A</option>
                    <option value="2B">2B</option>
                    <option value="2C">2C</option>
                    <option value="2D">2D</option>
                    
                    <option value="3A">3A</option>
                    <option value="3B">3B</option>
                    
                  </select></div></td>
        </tr>
       <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><div class="col-sm-10"><select class="form-control" name="jurusan" style="width:120px;" required="true">
                    <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                    
                  </select></div></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="alamat" value="<?php echo $cari->alamat; ?>" class="form-control"></div></td>
        </tr>
		<tr>
            <td>No. HP</td>
            <td>:</td>
            <td><div class="col-sm-5"><input type="text" name="no_hp" value="<?php echo $cari->no_hp; ?>" class="form-control"></div></td>
        </tr>
        <tr>
            <td><?php echo form_submit('submit','Update', 'id="submit"');?></td>
        </tr>
        </table>
        <?php form_close(); ?>
        </form>
</body>
</html>