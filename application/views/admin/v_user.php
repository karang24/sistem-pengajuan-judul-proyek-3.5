<html>
<head>
    <title>Membaca Data</title>
</head>
<body>
    <h3><?php echo anchor('admin/c_user/tambahdata','Tambah data') ?></h3>
    <h3><?php echo anchor('admin/c_admin','Kembali') ?></h3>
    <h3>Baca Data</h3>
    <?php
    if(empty($hasil)){
        echo "Tidak ada data";
    }
    else{
    ?>
    <table border='1'>
        <tr>
            <td>ID User</td>
            <td>Username</td>
            <td>Password</td>
            <td>Level</td>
            <td>Opsi</td>
        </tr>
        <?php
        $no = 1;
        foreach($hasil as $data) {
        ?>
        <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $data->username ;?></td>
            <td><?php echo $data->password ;?></td>
            <td><?php echo $data->level;?></td>
            <td><a href="updatedata/<?php echo $data->id_user;?>/<?php echo $data->username ;?>">
                Update</a>
                </td>
                <td>
                 <a href="deletedata/<?php echo $data->id_user;?>">
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