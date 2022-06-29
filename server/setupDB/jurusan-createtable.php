<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE jurusan(
        id_jurusan varchar(20) PRIMARY KEY, 
        id_fakultas varchar(20),
        nama_jurusan varchar(50)
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel Jurusan Berhasil Dibuat <br>";
    }else{
        echo "Tabel Jurusan Gagal Dibuat <br>";
    }

    // INSERT DATA KE TABEL JURUSAN SEBAGAI DATA YANG DIPAKAI PADA SAAT TAMBAH DATA MAHASISWA
    $sqlINSERT = "INSERT INTO jurusan VALUES
    ('JUR101', 'FAK01', 'TI - Manajemen Data dan Informasi (MDI)'),
    ('JUR102', 'FAK01', 'TI - Pariwisata'),
    ('JUR103', 'FAK01', 'TI - Komputer Akuntansi dan Bisnis (KAB)'),
    ('JUR104', 'FAK01', 'TI - Desain Grafis dan Multimedia (DGM)'),
    ('JUR105', 'FAK01', 'Sistem Komputer (SK)'),
    ('JUR106', 'FAK02', 'Bisnis Digital'),
    ('JUR107', 'FAK02', 'Desain Komunikasi Visual');";

    $hasilINSERT = mysqli_query($con, $sqlINSERT);
    if($hasilINSERT){
        echo "Data Berhasil Diinsert <br>";
    }else{
        echo "Data Gagal Diinsert <br>";
    }

    mysqli_close($con);
    