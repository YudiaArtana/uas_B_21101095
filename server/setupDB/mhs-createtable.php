<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE mhs(
        nim varchar(20) PRIMARY KEY, 
        nama_mhs varchar(50),
        jk enum('L','P'),
        id_fakultas varchar(20),
        id_jurusan varchar(20),
        angkatan varchar(5)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Mahasiswa Berhasil Dibuat <br>";
    }else{
        echo "Tabel Mahasiswa Gagal Dibuat <br>";
    }
    mysqli_close($con);