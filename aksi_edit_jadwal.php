<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $kode_dosen = $_POST['kode_dosen'];
    $kode_matkul = $_POST['kode_matakuliah'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];

    mysqli_query($koneksi, "UPDATE jadwal SET kode_dosen='$kode_dosen',kode_matakuliah='$kode_matkul',ruang='$ruang',waktu='$waktu' WHERE id='$id'");

    header("location:jadwal_list.php");
?>