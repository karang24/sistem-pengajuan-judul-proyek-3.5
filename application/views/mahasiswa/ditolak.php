<!DOCTYPE html>
<html lang="en">
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
  <div align="justify" class="panel-heading"><b>Form Upload Proposal</b></div>
  <div  align="justify" class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form  action="<?php echo site_url('mahasiswa/upload/insert'); ?>" method="post" enctype="multipart/form-data">
     <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
       <table class="table table-striped" align="center">
<tr>
          <td style="width:55%;">Judul Proposal</td>
          <td>
            <div class="col-sm-15"><textarea class="form-control"  name="judul"  maxlength="100" class="textarea-none-resize"></textarea>
            </div>
            </td>
         </tr>
            <div class="col-sm-10">
                <input type="hidden" name="update" value="<?php echo  date("Y-m-d");?>" class="form-control">
            </div>
            <div class="col-sm-10">
                <input type="hidden" name="npm" value="<?php print $session_id;?>" class="form-control">
            </div>
            <div class="col-sm-10">
                <input disabled type="hidden" name="tglacc"  class="form-control">
            </div>
         <tr>
          <td style="width:55%;">Tanggal Upload</td>
          <td>
            <div class="col-sm-20">
              <input disabled type="text" name="tgl_proposal" value="<?php echo  date("Y/m/d");?>" class="form-control">
                <input type="hidden" name="tgl" value="<?php echo date("Y-m-d");?>" class="form-control">
            </div>
            </td>
         </tr>
         <?php $this->load->helper('date');
		 $sekarang = time();
		 $gmt = local_to_gmt($sekarang) ;
		  $format = 'DATE_W3C';
		 $waktu = time($gmt);
		 ;?>
            <div class="col-sm-10">
                <input  type="hidden" name="tgl_acc"  class="form-control" value="<?php echo standard_date($format, $waktu);?>">
            </div>
         <tr>
          <td style="width:15%;">File Proposal</td>
          <td>
            <div class="col-sm-35">
                <input type="file" name="file" class="form-control">
            </div>
            </td>
         </tr>
                    <tr>
          <td style="width:15%;">Keterangan</td>
          <td>
            <div class="col-sm-20">
                <p>
                  <select class="form-control" name="textket" style="width:120px;" required="true">
                    <option value="proposal1">proposal 1</option>
                    <option value="proposal2">proposal2</option>
                    <option value="proposal3">proposal3</option>
                    <option value="revisi">revisi proposal</option>
                  </select>
                </p>
               
                
            </div>
            </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
            
       </table>
     </form>
   
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->



</body>
</html>
