<?php
    include_once("koneksi.php");
    $sql = "SELECT * FROM mhs INNER JOIN fakultas ON mhs.id_fakultas = fakultas.id_fakultas INNER JOIN jurusan ON mhs.id_jurusan = jurusan.id_jurusan;";
    $hasil = mysqli_query($con, $sql);

    $row = mysqli_fetch_all($hasil);
    echo json_encode($row);
