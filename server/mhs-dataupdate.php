<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["nim"])){
        $nimlama = $_POST["nimlama"];
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $fak = $_POST["fak"];
        $jur = $_POST["jur"];
        $akt = $_POST["akt"];


        $sql = "UPDATE mhs SET
                nim = '".$nim."',
                nama_mhs = '".$nama."',
                jk = '".$jk."',
                id_fakultas = '".$fak."',
                id_jurusan = '".$jur."',
                angkatan = '".$akt."'
                WHERE nim = '".$nimlama."';";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);