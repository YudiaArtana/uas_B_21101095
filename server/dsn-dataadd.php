<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["nidn"])){
        $nidn = $_POST["nidn"];
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $alamat = $_POST["alamat"];
        $jur = $_POST["jur"];

        $sql = "INSERT INTO dsn VALUES ('".$nidn."', '".$nama."', '".$telp."', '".$alamat."', '".$jur."');";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);