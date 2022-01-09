<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA JADWAL</title>
</head>

<body>
    <h2>DATA JADWAL</h2>
    <hr>
    <table>
        <tr>
            <td><a href="jadwal_add.php"> <button>+ Tambah Data Jadwal</button></a></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>id</th>
            <th>kode dosen</th>
            <th>kode matkul</th>
            <th>ruang</th>
            <th>waktu</th>
            <th>aksi</th>
        </tr>
        <?php
            include "koneksi.php";

            $no = 1;
            $sql = mysqli_query($koneksi, "SELECT * FROM jadwal");

            while($data = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['kode_dosen']; ?></td>
                    <td><?php echo $data['kode_matakuliah']; ?></td>
                    <td><?php echo $data['ruang']; ?></td>
                    <td><?php echo $data['waktu']; ?></td>
                    <td>
                        <a href="jadwal_edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                        <a href="jadwal_delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
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