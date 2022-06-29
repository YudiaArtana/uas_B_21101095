<?php
    include_once("koneksi.php");

    $h["error"] = true;
    if(isset($_POST["nim"])){
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $fak = $_POST["fak"];
        $jur = $_POST["jur"];
        $akt = $_POST["akt"];

        $sql = "INSERT INTO mhs VALUES ('".$nim."', '".$nama."', '".$jk."', '".$fak."', '".$jur."', '".$akt."');";

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);