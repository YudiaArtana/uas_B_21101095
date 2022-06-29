<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE dsn(
        nidn varchar(20) PRIMARY KEY, 
        nama_dsn varchar(50),
        no_telp varchar(20),
        alamat varchar(50),
        id_jurusan varchar(20)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Dosen Berhasil Dibuat <br>";
    }else{
        echo "Tabel Dosen Gagal Dibuat <br>";
    }
    mysqli_close($con);

