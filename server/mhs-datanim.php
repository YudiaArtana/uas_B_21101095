<?php
    $output["error"] = true;
    if(isset($_GET["nim"])){
        include_once("koneksi.php");
        $nim = $_GET["nim"];
        $sql = "SELECT * FROM mhs WHERE nim = '".$nim."';";
        $hasil = mysqli_query($con, $sql);

        $output["isi"] = mysqli_fetch_all($hasil);
        $output["error"] = false;
    }
    echo json_encode($output);
    