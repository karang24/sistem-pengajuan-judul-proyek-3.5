<html>
<head>
    <title>Mengupdate Data</title>
</head>
<body>
    <h3>Update Data</h3>
    <table border='1'>
    <?php
    echo form_open('admin/c_user/updatedata/'.$hasil->id_user.'/'.$hasil->username);
    ?>
        <tr>
            <td>ID User</td>
            <td>:</td>
            <td><?php echo form_input('id_user', $hasil->id_user);?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo form_input('username', $hasil->username);?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td><select class="easyui-combobox" name="level" style="width:120px;" required="true">
              <option value="admin">admin</option>
              <option value="dosen">dosen</option>
              <option value="mahasiswa">mahasiswa</option>
            </select></td>
        </tr>
        
        <tr>
            <td><?php echo form_submit('submit','Update', 'id="submit"');?></td>
        </tr>
        </table>
        <?php form_close(); ?>
</body>
</html>