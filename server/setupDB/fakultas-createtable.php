<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE fakultas(
        id_fakultas varchar(20) PRIMARY KEY, 
        nama_fakultas varchar(50)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Fakultas Berhasil Dibuat <br>";
    }else{
        echo "Tabel Fakultas Gagal Dibuat <br>";
    }

    // INSERT DATA KE TABEL FAKULTAS SEBAGAI DATA YANG DIPAKAI PADA SAAT TAMBAH DATA MAHASISWA
    $sqlINSERT = "INSERT INTO fakultas VALUES
    ('FAK01', 'Teknologi dan Informatika'),
    ('FAK02', 'Desain dan Bisnis Kreatif');";

    $hasilINSERT = mysqli_query($con, $sqlINSERT);
    if($hasilINSERT){
        echo "Data Berhasil Diinsert <br>";
    }else{
        echo "Data Gagal Diinsert <br>";
    }

    mysqli_close($con);
    