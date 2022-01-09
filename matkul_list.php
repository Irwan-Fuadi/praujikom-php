<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MATAKULIAH</title>
</head>

<body>
    <h2>DATA MATAKULIAH</h2>
    <hr>
    <table>
        <tr>
            <td><a href="matkul_add.php"> <button>+ Tambah Data Matakuliah</button></a></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>no</th>
            <th>kode matkul</th>
            <th>nama matkul</th>
            <th>sks</th>
            <th>aksi</th>
        </tr>
        <?php
            include "koneksi.php";

            $no = 1;
            $sql = mysqli_query($koneksi, "SELECT * FROM matakuliah");

            while($data = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kode_matakuliah']; ?></td>
                    <td><?php echo $data['nama_matakuliah']; ?></td>
                    <td><?php echo $data['sks']; ?></td>
                    <td>
                        <a href="matkul_edit.php?kode_matakuliah=<?php echo $data['kode_matakuliah']; ?>">Edit</a>
                        <a href="matkul_delete.php?kode_matakuliah=<?php echo $data['kode_matakuliah']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </table>
    <br><br>
    <table>
        <tr>
            <a href="admin_dashboard.php"><button>Kembali Ke Menu Utama</button></a>
        </tr>
    </table>
</body>
</html>