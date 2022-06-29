<?php
    include_once("../koneksi.php");


    $sql = "CREATE TABLE krs_kelas(
        id int(11) PRIMARY KEY AUTO_INCREMENT, 
        kode_mk varchar(20),
        nidn varchar(20),
        kelas varchar(10),
        mulai time,
        selesai time
    );";

    $hasil = mysqli_query($con, $sql);
    if($hasil){
        echo "Tabel KRS Berhasil Dibuat <br>";
    }else{
        echo "Tabel KRS Gagal Dibuat <br>";
    }
    mysqli_close($con);