<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["nidn"])){
        $nidnlama = $_POST["nidnlama"];
        $nidn = $_POST["nidn"];
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $alamat = $_POST["alamat"];
        $jur = $_POST["jur"];


        $sql = "UPDATE dsn SET
                nidn = '".$nidn."',
                nama_dsn = '".$nama."',
                no_telp = '".$telp."',
                alamat = '".$alamat."',
                id_jurusan = '".$jur."'
                WHERE nidn = '".$nidnlama."';";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);