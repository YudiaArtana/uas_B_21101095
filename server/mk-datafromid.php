<?php
    $output["error"] = true;
    if(isset($_GET["kd"])){
        include_once("koneksi.php");
        $kode = $_GET["kd"];
        $sql = "SELECT * FROM mk WHERE kode_mk = '".$kode."';";
        $hasil = mysqli_query($con, $sql);

        $output["isi"] = mysqli_fetch_all($hasil);
        $output["error"] = false;
    }
    echo json_encode($output);
    