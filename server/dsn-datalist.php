<?php
    include_once("koneksi.php");
    $sql = "SELECT * FROM dsn INNER JOIN jurusan ON dsn.id_jurusan = jurusan.id_jurusan;";
    $hasil = mysqli_query($con, $sql);

    $row = mysqli_fetch_all($hasil);
    echo json_encode($row);
