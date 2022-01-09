<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT JADWAL</title>
</head>

<body>
    <h2>EDIT JADWAL</h2>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $sql = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'");
        while($data = mysqli_fetch_array($sql)){
    ?>
    <form method="post" action="aksi_edit_jadwal.php">
        <table>
            <tr>
                <td><label for="id">ID Jadwal</label></td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $data['id'];?>" readonly></td>
            </tr>
            <tr>
                <td><label for="kode_dosen">Kode Dosen</label></td>
                <td>:</td>
                <td>
                    <select name="kode_dosen" id="kode_dosen">
                    <option value="<?php echo $data['kode_dosen'];?>"><?php echo $data['kode_dosen'];?></option>
                        <?php
                        $sqlDosen = mysqli_query($koneksi, "SELECT kode_dosen FROM dosen");

                        while($dataDosen = mysqli_fetch_array($sqlDosen)){
                        ?>
                        <option value="<?php echo $dataDosen['kode_dosen'];?>"><?php echo $dataDosen['kode_dosen'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="kode_matakuliah">Kode Matakuliah</label></td>
                <td>:</td>
                <td>
                    <select name="kode_matakuliah" id="kode_matakuliah">
                    <option value="<?php echo $data['kode_matakuliah'];?>"><?php echo $data['kode_matakuliah'];?></option>
                        <?php
                        $sqlMatkul = mysqli_query($koneksi, "SELECT kode_matakuliah FROM matakuliah");

                        while($dataMatkul = mysqli_fetch_array($sqlMatkul)){
                        ?>
                        <option value="<?php echo $dataMatkul['kode_matakuliah'];?>"><?php echo $dataMatkul['kode_matakuliah'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="ruang">Ruang</label></td>
                <td>:</td>
                <td><input type="text" name="ruang" value="<?php echo $data['ruang'];?>"></td>
            </tr>
            <tr>
                <td><label for="waktu">Waktu</label></td>
                <td>:</td>
                <td><input type="text" name="waktu" value="<?php echo $data['waktu'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='jadwal_list.php'"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>