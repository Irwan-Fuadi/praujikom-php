<?php
    include "koneksi.php";

    $kode_dosen = $_GET['kode_dosen'];

    mysqli_query($koneksi, "DELETE FROM dosen WHERE kode_dosen='$kode_dosen'");

    header("location:dosen_list.php");
?>