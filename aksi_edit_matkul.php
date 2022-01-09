<?php
    include "koneksi.php";

    $kode_matkul = $_POST['kode_matakuliah'];
    $nama_matkul = $_POST['nama_matakuliah'];
    $sks = $_POST['sks'];

    mysqli_query($koneksi, "UPDATE matakuliah SET kode_matakuliah='$kode_matkul',nama_matakuliah='$nama_matkul',sks='$sks' WHERE kode_matakuliah='$kode_matkul'");

    header("location:matkul_list.php");
?>