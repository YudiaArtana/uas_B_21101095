<?php
    include_once("koneksi.php");
    
    $h["error"] = true;
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $sql = "DELETE FROM krs_kelas WHERE id = '".$id."';";
        $hasil = mysqli_query($con, $sql);

        $hsl = mysqli_query($con, $sql);
        if($hsl){
            $h["error"] = false;
        }
    }
    echo json_encode($h);