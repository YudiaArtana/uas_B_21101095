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

        $sql = "INSERT INTO krs_kelas VALUES ('".$id."', '".$mk."', '".$dsn."', '".$kls."', '".$mulai."', '".$selesai."');";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);