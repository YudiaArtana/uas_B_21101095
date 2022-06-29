<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE mk(
        kode_mk varchar(20) PRIMARY KEY, 
        nama_mk varchar(50),
        sks varchar(5),
        semester varchar(5)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Mata Kuliah Berhasil Dibuat <br>";
    }else{
        echo "Tabel Mata Kuliah Gagal Dibuat <br>";
    }
    mysqli_close($con);
    