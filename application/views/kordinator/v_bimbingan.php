<html>
<head>
<style><style type="text/css">
.textarea-resize{
 width: 300px;
 height: 85px;
}

.textarea-none-resize{
 width: 300px;
 height: 85px;
 resize: none;
}</style>
    <title>Membaca Data</title>
</head>
<body>
    <h3></h3>
    <div id="container">
      
    <br>
    
    <form action="<?php echo site_url('dosen/c_bimbingan/tambahdata'); ?>" method="post" enctype="multipart/form-data">
 <table align="center" border="1">
<tr align="center">
            <td>Tanggal</td>
            <td>Uraian</td>
            <td>Tdd</td>
            
        </tr>
       
        <tr align="center">
              <?php $this->load->helper('date');
		 $sekarang = time();
		 $gmt = local_to_gmt($sekarang) ;
		  $format = 'DATE_W3C';
		 $waktu = time($gmt); ?>
            <td><input type="text" name="d_bimbingan" size="11" value="<?php echo  date("Y/m/d");?>"></td>
            <td><textarea name="uraian" class="textarea-none-resize"></textarea></td>
            <td><input type="checkbox" value="validate" name="ttd" size="10"></td>
            
         <button name="submit">Simpan</button>
        </tr>
     
    </table>
    
 </form>
 </div>
</body>
</html>