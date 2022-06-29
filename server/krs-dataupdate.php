<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $mk = $_POST["mk"];
        $dsn = $_POST["dsn"];
        $kls = $_POST["kls"];
        $mulai = $_POST["mulai"];
        $selesai = $_POST["selesai"];


        $sql = "UPDATE krs_kelas SET
                id = '".$id."',
                kode_mk = '".$mk."',
                nidn = '".$dsn."',
                kelas = '".$kls."',
                mulai = '".$mulai."',
                selesai = '".$selesai."'
                WHERE id = '".$id."';";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);