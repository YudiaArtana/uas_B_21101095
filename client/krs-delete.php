<div class="mb-3 d-sm-flex justify-content-between bg-white rounded-2 border-0 shadow-none p-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <div>
        <h4 class="my-sm-4 my-2 mx-3">Hapus Data KRS</h4>
    </div>

    <div class="pt-1">
        <ol class="breadcrumb my-2 my-sm-4 mx-3">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="index.php?p=krs">Data KRS</a></li>
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
<form class="mx-md-5" method="POST" onsubmit = "return hapus()">
        <div class="mb-3 row">
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                        <?php
                            // Menampilkan ID KRS sesuai DB MySQL
                            include_once("../server/koneksi.php");
                            $sql = "SELECT MAX(id) as maxID FROM krs_kelas";
                            $hasil = mysqli_query($con, $sql);
                            $data = mysqli_fetch_array($hasil);
                            $id = $data["maxID"];
                            $id++;
                        ?>
                    <input type="hidden" class="form-control" id="txID" value="<?=$id?>" placeholder="Masukkan Alamat lengkap" readonly required>
                </div>
            </div>
        </div>
    
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Nama Matkul</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group"> 
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txMK" class="form-select" required disabled>
                        <option value="" selected disabled>--Pilih Mata Kuliah--</option>
                        <?php
                            // Menampilkan Mata Kuliah sesuai DB MySQL
                            include_once("../server/koneksi.php");
                            $sql = "SELECT * FROM mk";
                            $hasil = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($hasil))
                            {
                                echo '<option value="'.$data["kode_mk"].'">'.$data["nama_mk"].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>   

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Pengajar</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group"> 
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txDSN" class="form-select" required disabled>
                        <option value="" selected disabled>--Pilih Pengajar--</option>
                        <?php
                            // Menampilkan Dosen sesuai DB MySQL
                            include_once("../server/koneksi.php");
                            $sql = "SELECT * FROM dsn INNER JOIN jurusan ON jurusan.id_jurusan = dsn.id_jurusan";
                            $hasil = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($hasil))
                            {
                                echo '<option value="'.$data["nidn"].'">'.$data["nama_dsn"]." [ ".$data["nama_jurusan"]." ]".'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Kelas</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <input type="text" class="form-control" id="txKLS" placeholder="Masukkan Nama Kelas" disabled>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Jam Mulai</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <input type="time" class="form-control" id="txMULAI" disabled>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Jam Selesai</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <input type="time" class="form-control" id="txSELESAI" disabled>
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

    <script src="krs-searchdata.js"></script>
    <script src="krs-deletedata.js"></script>
    <script>
        document.getElementById("sukses").style.display="none";
        document.getElementById("gagal").style.display="none";
    </script>

    