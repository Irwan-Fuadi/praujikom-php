<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH MATKUL</title>
</head>

<body>
    <h2>TAMBAH MATAKULIAH</h2>
    <form method="post" action="aksi_add_matkul.php">
        <table>
            <tr>
                <td><label for="kode_matakuliah">Kode Matakuliah</label></td>
                <td>:</td>
                <td><input type="text" name="kode_matakuliah" placeholder="Masukkan kode matkul" required></td>
            </tr>
            <tr>
                <td><label for="nama_matakuliah">Nama Matakuliah</label></td>
                <td>:</td>
                <td><input type="text" name="nama_matakuliah" placeholder="Masukkan nama matkul" required></td>
            </tr>
            <tr>
                <td><label for="alamat">SKS</label></td>
                <td>:</td>
                <td><input type="text" name="sks" placeholder="Masukkan SKS" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='matkul_list.php'"></td>
            </tr>
        </table>
    </form>
</body>

</html>