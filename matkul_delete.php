<?php
    include "koneksi.php";

    $kode_matkul = $_GET['kode_matakuliah'];

    mysqli_query($koneksi, "DELETE FROM matakuliah WHERE kode_matakuliah='$kode_matkul'");

    header("location:matkul_list.php");
?>


