<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DOSEN</title>
</head>

<body>
    <h2>TAMBAH DOSEN</h2>
    <form method="post" action="aksi_add_dosen.php">
        <table>
            <tr>
                <td><label for="kode_dosen">Kode Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="kode_dosen" placeholder="Masukkan kode dosen" required></td>
            </tr>
            <tr>
                <td><label for="nama_dosen">Nama Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="nama_dosen" placeholder="Masukkan nama dosen" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'"></td>
            </tr>
        </table>
    </form>
</body>

</html>