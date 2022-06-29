
<div class="mb-3 d-sm-flex justify-content-between bg-white rounded-2 border-0 shadow-none p-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <div>
        <h4 class="my-sm-4 my-2 mx-3">Tambah Data Dosen</h4>
    </div>

    <div class="pt-1">
        <ol class="breadcrumb my-2 my-sm-4 mx-3">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="index.php?p=dsn">Data Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </div>
</div>

<div class="alert alert-primary border-0 border-start rounded-0 border-primary border-5 overflow-auto m-0" role="alert" id="sukses">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill me-1 mb-1" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
    </svg>
    Data Berhasil Ditambahkan
</div>
<div class="alert alert-danger border-0 border-start rounded-0 border-danger border-5 overflow-auto m-0" role="alert" id="gagal">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-1 mb-1" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    Data Gagal Ditambahkan
</div>

<div class="card rounded-2 border-0 p-4 p-md-5 shadow-none">
    <form class="mx-md-5" method="POST" onsubmit = "return simpan()">
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">NIDN</label>
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
                    <input type="text" class="form-control" id="txNIDN" placeholder="Masukkan NIDN" required>
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
                    <input type="text" class="form-control" id="txNAMA" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">No Telp</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    </span>
                    <input type="number" class="form-control" id="txTELP" placeholder="Masukkan Nomor Telepon">
                </div>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Alamat</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    </span>
                    <input type="text" class="form-control" id="txALAMAT" placeholder="Masukkan Alamat lengkap">
                </div>
            </div>
        </div>

        

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Mengampu</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group"> 
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <select id="txJUR" class="form-select" required>
                        <option value="" selected disabled>--Jurusan--</option>
                        <?php
                            // Menampilkan Jurusan sesuai DB
                            include_once("../server/koneksi.php");
                            $sql = "SELECT * FROM jurusan";
                            $hasil = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($hasil))
                            {
                                echo '<option value="'.$data["id_jurusan"].'">'.$data["nama_jurusan"].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div> 
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold"></label>
            <div class="col-sm-8 col-lg-9">
                <button type="button" onclick = "batal()" class="btn btn-danger px-4">Batal</button>
                <button class="btn btn-primary px-3" name="txEDIT">Simpan</button>
            </div>
        </div>         
    </form>
</div>


    <script src="dsn-adddata.js"></script>

    <script>
        document.getElementById("sukses").style.display="none";
        document.getElementById("gagal").style.display="none";
    </script>