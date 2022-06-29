<?php
    include_once("../konfigurasi.php");

    $con = mysqli_connect(DBHOST, DBUSER, DBPASSCODE) or die("Koneksi ke DBMS MySQL GAGAL<br>");
    echo "Koneksi ke DBMS MySQL SUKSES <br>";