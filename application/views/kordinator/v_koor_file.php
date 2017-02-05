<html>
<head>
    <title>Membaca Data</title>
</head>
<body>

<?php
  $file = 'assets/uploads/'.$data->file;
  $filename = "temp_".$data->file;
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  readfile($file);
?>


</body>
</html>