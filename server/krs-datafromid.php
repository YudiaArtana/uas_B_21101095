<?php
    $output["error"] = true;
    if(isset($_GET["id"])){
        include_once("koneksi.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM krs_kelas WHERE id = '".$id."';";
        $hasil = mysqli_query($con, $sql);

        $output["isi"] = mysqli_fetch_all($hasil);
        $output["error"] = false;
    }
    echo json_encode($output);
    