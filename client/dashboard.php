<?php
    include_once("../server/koneksi.php");
    $sql = "SELECT * FROM mhs";
    $hasil1 = mysqli_query($con, $sql);
    $jmlMHS = mysqli_num_rows($hasil1);
    
    $sql = "SELECT * FROM dsn";
    $hasil2 = mysqli_query($con, $sql);
    $jmlDSN = mysqli_num_rows($hasil2);

    $sql = "SELECT * FROM mk";
    $hasil3 = mysqli_query($con, $sql);
    $jmlMK = mysqli_num_rows($hasil3);

    $sql = "SELECT * FROM krs_kelas";
    $hasil4 = mysqli_query($con, $sql);
    $jmlKRS = mysqli_num_rows($hasil4)
?>

<div class="row">
    <div class="col">
        <div class="card rounded-2 border-0">
            <h4 class="m-4">Dashboard</h4>
        </div>
    </div>
</div>
                    

                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card border-0">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row my-5">
                                            <div class="col-md-4">
                                                <div class="bg-primary d-inline rounded-3 px-3 py-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-md-0 mt-4">
                                                <h6 class="text-muted fw-semibold">Data Mahasiswa</h6>
                                                <h6 class="fw-bold mb-0">
                                                    <?php
                                                        echo number_format($jmlMHS,0,",",".");
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 me-1 bi bi-info-circle text-info" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                        <a href="index.php?p=mhs">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card border-0">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row my-5">
                                            <div class="col-md-4">
                                                <div class="bg-warning d-inline rounded-3 px-3 py-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-md-0 mt-4">
                                                <h6 class="text-muted fw-semibold">Data Dosen</h6>
                                                <h6 class="fw-bold mb-0">
                                                    <?php
                                                        echo number_format($jmlDSN,0,",",".");
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 me-1 bi bi-info-circle text-info" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                        <a href="index.php?p=dsn">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card border-0">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row my-5">
                                            <div class="col-md-4">
                                                <div class="bg-success d-inline rounded-3 px-3 py-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-md-0 mt-4">
                                                <h6 class="text-muted fw-semibold">Data Mata Kuliah</h6>
                                                <h6 class="fw-bold mb-0">
                                                    <?php
                                                        echo number_format($jmlMK,0,",",".");
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 me-1 bi bi-info-circle text-info" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                        <a href="index.php?p=mk">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card border-0">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row my-5">
                                            <div class="col-md-4">
                                                <div class="bg-info d-inline rounded-3 px-3 py-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mt-md-0 mt-4">
                                                <h6 class="fw-semibold">Data Kelas KRS</h6>
                                                <h6 class="fw-bold mb-0">
                                                    <?php
                                                        echo number_format($jmlKRS,0,",",".");
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 me-1 bi bi-info-circle text-info" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                        <a href="index.php?p=krs">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>

            