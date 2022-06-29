<?php
    include_once("koneksi.php");
    
    $h["error"] = true;
    if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $sql = "DELETE FROM mhs WHERE nim = '$nim'";
        $hasil = mysqli_query($con, $sql);

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);