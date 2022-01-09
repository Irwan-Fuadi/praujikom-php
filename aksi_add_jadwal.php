<?php
    include "koneksi.php";

    $kode_dosen = $_POST['kode_dosen'];
    $kode_matkul = $_POST['kode_matakuliah'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];

    mysqli_query($koneksi, "INSERT INTO jadwal (kode_dosen, kode_matakuliah, ruang, waktu) VALUES('$kode_dosen','$kode_matkul','$ruang','$waktu')");

    header("location:jadwal_list.php");
?>