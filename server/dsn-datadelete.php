<?php
    include_once("koneksi.php");
    
    $h["error"] = true;
    if(isset($_POST["nidn"])){
        $nidn = $_POST["nidn"];
        $sql = "DELETE FROM dsn WHERE nidn = '".$nidn."';";
        $hasil = mysqli_query($con, $sql);

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);