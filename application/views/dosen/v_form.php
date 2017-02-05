<html>
<head>
<title>Mencari Data</title>
</head>
<body>
<form method="get" action="<?php echo site_url('dosen/c_cari_data/cariDosen'); ?>">
<table>
 <?php $this->load->library('session');
	  $session_id = $this->session->userdata('username');
	  ?>
<td></td><td><input type="hidden" name="cari" value="<?php echo $session_id; ?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Tampilkan biodata"></td>
</tr>
</table>
</form>
</body>
</html>