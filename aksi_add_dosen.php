<?php
    include "koneksi.php";

    $kode_dosen = $_POST['kode_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO dosen VALUES('$kode_dosen','$nama_dosen','$alamat')");

    header("location:dosen_list.php");
?>