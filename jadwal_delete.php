<?php
    include "koneksi.php";

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM jadwal WHERE id='$id'");

    header("location:jadwal_list.php");
?>


