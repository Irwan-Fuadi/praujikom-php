<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH JADWAL</title>
</head>

<body>
    <h2>TAMBAH JADWAL</h2>
    <form method="post" action="aksi_add_jadwal.php">
        <table>
            <tr>
                <td><label for="kode_dosen">Kode Dosen</label></td>
                <td>:</td>
                <td>
                    <select name="kode_dosen" id="kode_dosen" required>
                    <option value="-1">Pilih Kode Dosen</option>
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT kode_dosen FROM dosen");

                        while($data = mysqli_fetch_array($sql)){
                        ?>
                        <option value="<?php echo $data['kode_dosen'];?>"><?php echo $data['kode_dosen'];?></option>
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
                    <select name="kode_matakuliah" id="kode_matakuliah" required>
                    <option value="-1">Pilih Kode Matakuliah</option>
                        <?php
                        $sql2 = mysqli_query($koneksi, "SELECT kode_matakuliah FROM matakuliah");

                        while($data2 = mysqli_fetch_array($sql2)){
                        ?>
                        <option value="<?php echo $data2['kode_matakuliah'];?>"><?php echo $data2['kode_matakuliah'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="ruang">Ruang</label></td>
                <td>:</td>
                <td><input type="text" name="ruang" placeholder="Masukkan Ruangan" required></td>
            </tr>
            <tr>
                <td><label for="waktu">Waktu</label></td>
                <td>:</td>
                <td><input type="text" name="waktu" placeholder="Masukkan Waktu" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='jadwal_list.php'"></td>
            </tr>
        </table>
    </form>
</body>

</html>