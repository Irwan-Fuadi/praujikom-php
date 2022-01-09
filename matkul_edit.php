<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT MATKUL</title>
</head>

<body>
    <h2>EDIT MATAKULIAH</h2>
    <?php
        include 'koneksi.php';
        $kode_matakuliah = $_GET['kode_matakuliah'];
        $sql = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE kode_matakuliah='$kode_matakuliah'");
        while($data = mysqli_fetch_array($sql)){
    ?>
    <form method="post" action="aksi_edit_matkul.php">
        <table>
            <tr>
                <td><label for="kode_matakuliah">Kode matakuliah</label></td>
                <td>:</td>
                <td><input type="text" name="kode_matakuliah" value="<?php echo $data['kode_matakuliah'];?>" readonly></td>
            </tr>
            <tr>
                <td><label for="nama_matakuliah">Nama matakuliah</label></td>
                <td>:</td>
                <td><input type="text" name="nama_matakuliah" value="<?php echo $data['nama_matakuliah'];?>"></td>
            </tr>
            <tr>
                <td><label for="sks">SKS</label></td>
                <td>:</td>
                <td><input type="text" name="sks" value="<?php echo $data['sks'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='matkul_list.php'"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>

</html>