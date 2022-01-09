<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT DOSEN</title>
</head>

<body>
    <h2>EDIT DOSEN</h2>
    <?php
        include 'koneksi.php';
        $kode_dosen = $_GET['kode_dosen'];
        $sql = mysqli_query($koneksi, "SELECT * FROM dosen WHERE kode_dosen='$kode_dosen'");
        while($data = mysqli_fetch_array($sql)){
    ?>
    <form method="post" action="aksi_edit_dosen.php">
        <table>
            <tr>
                <td><label for="kode_dosen">Kode Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="kode_dosen" value="<?php echo $data['kode_dosen'];?>" readonly></td>
            </tr>
            <tr>
                <td><label for="nama_dosen">Nama Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'];?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $data['alamat'];?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>

</html>