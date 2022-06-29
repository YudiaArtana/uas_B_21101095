<?php
if(isset($_GET["p"])){
    if($_GET["p"]==="mhs"){
        if(isset($_GET["act"])){
            if($_GET["act"]=="add"){
                $page = "mhs-add.php";
                $active2 = "active";
                $Tpage = "Tambah Data Mahasiswa";
            }else if($_GET["act"]=="update"){
                $page = "mhs-update.php";
                $active2 = "active";
                $Tpage = "Edit Data Mahasiswa";
            }else if($_GET["act"]=="delete"){
                $page = "mhs-delete.php";
                $active2 = "active";
                $Tpage = "Hapus Data Mahasiswa";
            }
        }else{
            $page = "mhs-list.php";
            $active2 = "active";
            $Tpage = "List Data Mahasiswa";
        }
    }else if($_GET["p"]==="dsn"){
        if(isset($_GET["act"])){
            if($_GET["act"]=="add"){
                $page = "dsn-add.php";
                $active3 = "active";
                $Tpage = "Tambah Data Dosen";
            }else if($_GET["act"]=="update"){
                $page = "dsn-update.php";
                $active3 = "active";
                $Tpage = "Edit Data Dosen";
            }else if($_GET["act"]=="delete"){
                $page = "dsn-delete.php";
                $active3 = "active";
                $Tpage = "Hapus Data Dosen";
            }
        }else{
            $page = "dsn-list.php";
            $active3 = "active";
            $Tpage = "List Data Dosen";
        }
    }else if($_GET["p"]==="mk"){
        if(isset($_GET["act"])){
            if($_GET["act"]=="add"){
                $page = "mk-add.php";
                $active4 = "active";
                $Tpage = "Tambah Data Mata Kuliah";
            }else if($_GET["act"]=="update"){
                $page = "mk-update.php";
                $active4 = "active";
                $Tpage = "Edit Data Mata Kuliah";
            }else if($_GET["act"]=="delete"){
                $page = "mk-delete.php";
                $active4 = "active";
                $Tpage = "Hapus Data Mata Kuliah";
            }
        }else{
            $page = "mk-list.php";
            $active4 = "active";
            $Tpage = "List Data Mata Kuliah";
        }
    }else if($_GET["p"]==="krs"){
    if(isset($_GET["act"])){
        if($_GET["act"]=="add"){
            $page = "krs-add.php";
            $active5 = "active";
            $Tpage = "Tambah Data KRS";
        }else if($_GET["act"]=="update"){
            $page = "krs-update.php";
            $active5 = "active";
            $Tpage = "Edit Data KRS";
        }else if($_GET["act"]=="delete"){
            $page = "krs-delete.php";
            $active5 = "active";
            $Tpage = "Hapus Data KRS";
        }
    }else{
        $page = "krs-list.php";
        $active5 = "active";
        $Tpage = "List Data KRS";
    }
}
}else{
    $active1 = "active";
    $page = "dashboard.php";
    $Tpage = "Dashboard";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!----MY CSS---->
    <link rel="stylesheet" href="css/style.css">


    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title><?=$Tpage;?></title>
  </head>
  <body>
        <div class="wrapper">
            <div class="body-overlay"></div>

            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header p-3">
                    <a href="index.php"><img src="img/logo.png" class="img-fluid"/></a>
                </div>

                <ul class="list-unstyled mt-2">
                    <li class="<?php echo $active1; ?>">
                        <a class="" href="index.php">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="ms-2 bi bi-columns-gap" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                        </svg>
                        <span class="ms-2 fw-semibold">Dashboard</span></a>
                    </li>
                </ul>

                <h6 class="ms-3 mt-2">DATA</h6>

                <ul class="list-unstyled">
                    <li class="<?php echo $active2; ?>">
                        <a href="index.php?p=mhs">
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                            </svg>
                            <span class="ms-2 fw-semibold">Data Mahasiswa</span>
                        </a>
                    </li>
                        
                    <li class="<?php echo $active3; ?>">
                        <a href="index.php?p=dsn">
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                            </svg>
                            <span class="ms-2 fw-semibold">Data Dosen</span>
                        </a>
                    </li>

                    <li  class="<?php echo $active4; ?>">
                        <a href="index.php?p=mk">
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                            </svg>
                            <span class="ms-2 fw-semibold">Data Mata Kuliah</span>
                        </a>
                    </li>
                </ul>

                <h6 class="ms-3 mt-2">KRS</h6>


                <ul class="list-unstyled mt-2 ms-2">
                    <li class="<?php echo $active5; ?>">
                        <a class="" href="index.php?p=krs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                        </svg>
                        <span class="ms-2 fw-semibold">KRS</span></a>
                    </li>
                </ul>
            </nav>


            <div id="content">
                <!-- Navbar  -->
                <div class="top-navbar">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">

                            <a type="button" id="sidebarCollapse" class=" rounded-pill d-xl-block d-lg-block d-md-mone d-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="text-white ms-2 my-1 bi bi-justify" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>
                        
                            <!-- Tombol setelah colapse -->
                            <a class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="text-white ms-2 my-1 bi bi-justify" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </a>

                        </div>
                    </nav>
                </div>

                <div class="main-content px-4 py-2">
                    <?php
                        include_once("$page");
                    ?>
                </div>

                <footer class="footer fixed-bottom m-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <p class=" d-flex justify-content-end fw-bold"> &copy 2022
                                    <a class="fw-normal px-1">I Putu Yudia Artana (21101095)</a> UAS Web Programming B
                                </p>
                            </div>
                        </div>
                    </div>
                </footer> 

            </div>
        </div>
    


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    
        <script type="text/javascript">
        $(document).ready(function () {
                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('aktif');
                        $('#content').toggleClass('aktif');
                    });
                    
                    $('.more-button,.body-overlay').on('click', function () {
                        $('#sidebar,.body-overlay').toggleClass('show-nav');
                    });
                    
                });  
        </script>
  </body>
</html>