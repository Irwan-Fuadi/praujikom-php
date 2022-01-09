<?php

class koneksi{
    public function get_koneksi(){
        $connection = mysqli_connect("127.0.0.1","root","admin123","praujikom","3306");

        if(mysqli_connect_errno()){
            echo "Koneksi ke database gagal : ".mysqli_connect_error();
        }

        return $connection;
    }
}

$konek = new koneksi();
$koneksi = $konek->get_koneksi();
?>