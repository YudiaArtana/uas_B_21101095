<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["kode"])){
        $kode = $_POST["kode"];
        $nama = $_POST["nama"];
        $sks = $_POST["sks"];
        $smt = $_POST["smt"];

        $sql = "INSERT INTO mk VALUES ('".$kode."', '".$nama."', '".$sks."', '".$smt."');";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);