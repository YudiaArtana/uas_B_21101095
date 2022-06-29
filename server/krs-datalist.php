<?php
    include_once("koneksi.php");
    $sql = "SELECT * FROM krs_kelas INNER JOIN mk ON mk.kode_mk = krs_kelas.kode_mk INNER JOIN dsn ON dsn.nidn = krs_kelas.nidn;";
    $hasil = mysqli_query($con, $sql);

    $row = mysqli_fetch_all($hasil);
    echo json_encode($row);
