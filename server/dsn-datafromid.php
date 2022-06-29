<?php
    $output["error"] = true;
    if(isset($_GET["nidn"])){
        include_once("koneksi.php");
        $nidn = $_GET["nidn"];
        $sql = "SELECT * FROM dsn WHERE nidn = '".$nidn."';";
        $hasil = mysqli_query($con, $sql);

        $output["isi"] = mysqli_fetch_all($hasil);
        $output["error"] = false;
    }
    echo json_encode($output);
    