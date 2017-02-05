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
  <div align="justify" class="panel-heading"><b>From Approval Proposal</b></div>
  <div  align="justify" class="panel-body">
	 <form  action="<?php echo site_url('kordinator/c_kordinator_proposal/updatedata'); ?>" method="post" >
<?php
    echo form_open('kordinator/c_kordinator_proposal/updatedata'.$hasil->id_proposal);
    ?>
	<table class="table table-striped" align="center">
  
        <thead>
			<tr align="center">
				<th field="judul" style="width:55%;" align="center">Judul Proposal</th>
                <td><div class="col-sm-15"><input name="id_proposal" value="<?php echo $hasil->id_proposal?>"  type="hidden" size="8">
           <div class="col-sm-15"><textarea class="form-control"  name="judul1"  maxlength="100" class="textarea-none-resize" readonly><?php echo $hasil->judul;?></textarea><input type="hidden" name="judul" value="<?php echo $hasil->judul;?>" class="form-control">
            </div> </td><tr>
				<th field="d_update" >Tanggal Update</th><td><div class="col-sm-20">
              <input disabled type="text" name="D_acc1" value="<?php echo  date("Y/m/d");?>" class="form-control">
            <input type="hidden" name="D_update" value="<?php echo  date("Y/m/d");?>" size="8"></div></td></tr>
            <tr>
				<th field="d_acc" >Tanggal_ACC</th>   <td><input type="hidden" name="D_acc" value="<?php echo $hasil->D_acc?>" size="8">
          <input disabled type="text" name="D_acc1" value="<?php echo  date("Y/m/d");?>" class="form-control"></td></tr>
          <tr>
                <th field="d_upload" >Tanggal_upload</th> <td><input name="D_proposal" value="<?php echo $hasil->D_proposal;?>"  readonly size="25" type="hidden"><input disabled type="text" name="D_acc1" value="<?php echo  date("Y/m/d");?>" class="form-control"></td>
            </tr>
            <tr>
                <th field="file" >File</th> <td><input type="hidden" name="file" value="<?php echo $hasil->file;?>"  size="8"><input disabled type="text" name="D_acc1" value="<?php echo $hasil->file;?>" class="form-control"></td></tr>
                <tr>
				 <th field="type_file" >Type</th>
                 <td>
          <input type="hidden" name="type_file" value="<?php echo $hasil->file;?>"  size="8"><input disabled type="text" name="D_acc1" value="<?php echo $hasil->type_file;?>" class="form-control"></td></tr>
          <tr>
				 <th field="npm" >Mahasiswa</th> <td><input type="hidden" name="npm" value="<?php echo $hasil->npm;?>"  readonly size="8"><input disabled type="text" name="D_acc1" value="<?php echo $hasil->npm;?>" class="form-control"></td>
            
           </tr>
           <tr>
				 <th field="nik" >Dosen Pembimbing</th> 
		  <td> <div class="col-sm-20"><select name="nik" style="width:140px;" class="form-control" required="true">
          <option value="312112">Rolly Awangga</option>
          <option value="10378069">Roni Habibi, S.Kom., M.T</option>
          <option value="10579081">Woro Isti Rahayu, ST., MT</option>
		  <option value="11380159">M.Nurkamal, ST., MT.</option>
          <option value="21388097">Roni A, ST., M.Kom</option>
          <option value="21388109">M. Harry K Saputra, ST.</option>
		  <option value="21388110">Syafrial Fahrie Pane, ST.</option>
        </select></div></td></tr>
        <tr>
				 <th field="ket" >Keterangan</th><td><div class="col-sm-20"><select name="ket" style="width:140px;" class="form-control" required="true">
          <option value="disetujui">Disetuju</option>
          <option value="ditolak">Ditolak</option>
          <option value="revisi">Revisi</option>
        </select></div></td></tr>
				 
			
			</thead>
        <tr>
		
          <td height="70"><?php echo form_submit('submit','Update', 'id="submit"');?></td>
        </tr>
        
        </table>
		
<?php echo form_close(); ?>
       

     <?php form_close(); ?>
	 </form>
</body>
</html>