<html>
<head>
    <title>Membaca Data</title>
</head>
<body>
    <h3><?php echo anchor('admin/c_user/tambahdata','Tambah data') ?></h3>
    <h3><?php echo anchor('dosen/c_dosen/index','Kembali') ?></h3>
    <h3>Baca Data</h3>
    <?php
    if(empty($hasil)){
        echo "Tidak ada data";
    }
    else{
    ?>
    <table border='1'>
        <tr>
			<td>ID</td>
            <td>Tanggal</td>
            <td>Uraian</td>
            <td>TTD</td>
        </tr>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $data->d_bimbingan;?></td>
            <td><?php echo $data->uraian;?></td>
            <td><?php echo $data->ttd;?></td>         
            <td><a href="updatedata/<?php echo $data->d_bimbingan;?>">
                Update</a>
                </td>
                <td>
                 <a href="deletedata/<?php echo $data->d_bimbingan;?>">
                Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </table>
 
    <?php
    }
    ?>
</body>
</html>