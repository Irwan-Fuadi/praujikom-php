<?php
    include "koneksi.php";

    $kode_dosen = $_POST['kode_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE dosen SET kode_dosen='$kode_dosen',nama_dosen='$nama_dosen',alamat='$alamat' WHERE kode_dosen='$kode_dosen'");

    header("location:dosen_list.php");
?>