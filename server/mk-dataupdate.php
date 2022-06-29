<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["kd"])){
        $kdlama = $_POST["kdlama"];
        $kd = $_POST["kd"];
        $nama = $_POST["nama"];
        $sks = $_POST["sks"];
        $smt = $_POST["smt"];

        $sql = "UPDATE mk SET
                kode_mk = '".$kd."',
                nama_mk = '".$nama."',
                sks = '".$sks."',
                semester = '".$smt."'
                WHERE kode_mk = '".$kdlama."';";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);