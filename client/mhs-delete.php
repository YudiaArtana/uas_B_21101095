<div class="mb-3 d-sm-flex justify-content-between bg-white rounded-2 border-0 shadow-none p-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <div>
        <h4 class="my-sm-4 my-2 mx-3">Hapus Data Mahasiswa</h4>
    </div>

    <div class="pt-1">
        <ol class="breadcrumb my-2 my-sm-4 mx-3">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="index.php?p=mhs">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hapus Data</li>
        </ol>
    </div>
</div>

<div class="alert alert-warning border-0 border-start rounded-0 border-warning border-5 overflow-auto m-0" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-1 mb-1" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    Mohon Cek Data Yang Akan Dihapus Terlebih Dahulu
</div>

<div class="card rounded-2 border-0 p-4 p-md-5 shadow-none">
    <form method="POST">
        <div class="mb-3 row">
            <div class="col-sm-8 col-lg-9">
                <input type="hidden" class="form-control" id="txNIMLAMA">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">NIM</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                        <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                        <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                        <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                        <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                        <path d="M12 9h2V8h-2v1Z"/>
                    </svg>
                    </span>
                    <input type="text" class="form-control" id="txNIM" disabled placeholder="Masukkan NIM" required>   
                </div>
            </div>
        </div>   
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Nama</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    </span>
                    <input type="text" class="form-control" id="txNAMA" placeholder="Masukkan Nama Lengkap" disabled>
                </div>
            </div>
        </div> 
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Jenis Kelamin</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">   
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-ambiguous" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"/>
                    </svg>
                    </span>
                    <select id="txJK" class="form-select" disabled>
                        <option value="" selected disabled>--Jenis Kelamin--</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
        </div> 
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Fakultas</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group"> 
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txFAK" class="form-select" name="nmFAK" onchange="showJur()" required disabled>
                        <option value="" selected disabled>--Fakultas--</option>
                        <?php
                            // Menampilkan Fakultas sesuai DB
                            include_once("../server/koneksi.php");
                            $sqlFAKULTAS = "SELECT * FROM fakultas";
                            $hasilFAKULTAS = mysqli_query($con, $sqlFAKULTAS);
                            while ($data = mysqli_fetch_array($hasilFAKULTAS))
                            {
                                echo '<option value="'.$data["id_fakultas"].'">'.$data["nama_fakultas"].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>  

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Jurusan</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txJUR" name="nmJUR" class="form-select" required disabled>
                        <option value="" selected disabled>--Pilih Fakultas Dahulu--</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Angkatan</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txAKT" class="form-select" disabled>
                        <option value="" selected disabled>--Angkatan--</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold"></label>
            <div class="col-sm-8 col-lg-9">
                <button type="button" onclick = "batal()" class="btn btn-success px-4">Batal</button>
                <button type="button" data-bs-toggle="modal" href="#validasi" class="btn btn-danger px-3">Hapus</button>
            </div>
        </div>

       
        <!-- <button type="button" onclick = "batal()" class="btn btn-outline-secondary">Kembali</button>
        <button type="button" data-bs-toggle="modal" href="#validasi" class="btn btn-danger">Hapus</button>         -->
    </form>
</div>


<!-- Modal Notifikasi Yakin Akan Menghapus -->
<div class="modal fade border-0" id="validasi" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Hapus Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-exclamation-circle text-danger" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
                <h5 class="mb-2 mt-4">Yakin Akan Menghapus Data?</h5>
                <p class="mb-0">Data Tidak Akan Bisa Dipulihkan Kembali Setelah Dihapus.</p>
            </div>
            <div class="modal-footer flex-nowrap p-0 overflow-auto">
                <button type="button" onclick = "hapus()" data-bs-target="#notif" data-bs-toggle="modal" class="btn p-4 btn-lg btn-danger fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Ya, saya yakin</strong></button>
                <button onclick = "batal()" type="button" class="btn p-4 btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Notifikasi Setelah Hapus -->
<div class="modal fade" id="notif" aria-hidden="true" aria-labelledby="notif" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="alert alert-success border-0 m-0" role="alert" id="sukses">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="my-3 d-block mx-auto bi bi-check-circle text-success" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                    <h4 class="alert-heading text-center">BERHASIL</h4>
                    <p class="text-center">Data Berhasil Dihapus</p>
                </div>
                <div class="alert alert-danger border-0 m-0" role="alert" id="gagal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="my-3 d-block mx-auto bi bi-x-circle text-danger" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <h4 class="alert-heading text-center">GAGAL!</h4>
                    <p class="text-center">Data Gagal Dihapus</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="mhs-searchdata.js"></script>
    <script src="mhs-deletedata.js"></script>
    <script>
        document.getElementById("sukses").style.display="none";
        document.getElementById("gagal").style.display="none";
    </script>

    