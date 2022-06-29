<?php
    include_once("koneksi.php");
    
    $h["error"] = true;
    if(isset($_POST["kd"])){
        $kode = $_POST["kd"];
        $sql = "DELETE FROM mk WHERE kode_mk = '".$kode."';";
        $hasil = mysqli_query($con, $sql);

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);