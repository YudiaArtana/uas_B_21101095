<?php
include_once("dbkoneksi.php");

if($con){
    $sql = "CREATE DATABASE instiki;";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Database Berhasil Dibuat <br>";
    }else{
        echo "Database Gagal Dibuat <br>";
    }
    mysqli_close($con);
}
