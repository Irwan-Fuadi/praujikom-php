<?php
    include "koneksi.php";

    $kode_matkul = $_POST['kode_matakuliah'];
    $nama_matkul = $_POST['nama_matakuliah'];
    $sks = $_POST['sks'];

    mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('$kode_matkul','$nama_matkul','$sks')");

    header("location:matkul_list.php");
?>