<html>
<head>
    <title>Mengupdate Data</title>
</head>
<body>
    <h3>Update Data</h3>
    <table border='1'>
    <?php
    echo form_open('c_cari_data/updatedata1/'.$cari->username);
    ?>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
			<?php echo form_input('username', $cari->username);?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="password" value="<?php echo $cari->password;?>"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td><?php echo form_input('level', $cari->level);?></td>
        </tr>
        <tr>
            <td><?php echo form_submit('submit','Update', 'id="submit"');?></td>
        </tr>
        </table>
        <?php form_close(); ?>
        </form>
</body>
</html>