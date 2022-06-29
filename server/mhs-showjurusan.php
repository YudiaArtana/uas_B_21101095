    <script>
        function showJur(){
            <?php

            include_once("../server/koneksi.php");
            $sqlFAK = "SELECT * FROM fakultas";
            $hasil1 = mysqli_query($con, $sqlFAK);
            while ($data1 = mysqli_fetch_array($hasil1)){
                $idfak = $data1["id_fakultas"];
            ?>
                if(document.mahasiswa.nmFAK.value=="<?php echo $idfak ?>"){
            <?php
                    $sqlJUR = "SELECT * FROM jurusan WHERE id_fakultas='".$idfak."'";
                    $hasil2 = mysqli_query($con, $sqlJUR);
                    $content = "document.getElementById('txJUR').innerHTML = \"";
                    while ($data2 = mysqli_fetch_array($hasil2)){
                        $content .= "<option value='".$data2["id_jurusan"]."'>".$data2["nama_jurusan"].'</option>';
                    }
            $content .= "\"";
            echo $content;
            ?>
            
            }
            <?php 
            }
                ?>
        }
    </script>