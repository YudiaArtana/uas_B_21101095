
<div class="mb-3 d-sm-flex justify-content-between bg-white rounded-2 border-0 shadow-none p-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <div>
        <h4 class="my-sm-4 my-2 mx-3">Edit Data Mata Kuliah</h4>
    </div>

    <div class="pt-1">
        <ol class="breadcrumb my-2 my-sm-4 mx-3">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="index.php?p=mk">Data Mata Kuliah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </div>
</div>

<div class="alert alert-primary border-0 border-start rounded-0 border-primary border-5 overflow-auto m-0" role="alert" id="sukses">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill me-1 mb-1" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
    </svg>
    Data Berhasil Diubah
</div>
<div class="alert alert-danger border-0 border-start rounded-0 border-danger border-5 overflow-auto m-0" role="alert" id="gagal">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-1 mb-1" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    Data Gagal Diubah
</div>

<div class="card rounded-2 border-0 p-4 p-md-5 shadow-none">
    <form class="mx-md-5" method="POST" onsubmit = "return update()">
        <div class="mb-3 row">
            <div class="col-sm-8 col-lg-9">
                <input type="hidden" class="form-control" id="txKDLAMA">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Kode</label>
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
                    <input type="text" class="form-control" id="txKD" disabled="disabled" placeholder="Masukkan Kode Mata Kuliah" required>
                </div>
                <div class="form-check m-0 mt-1">
                    <input class="mt-1 form-check-input" id="check" type="checkbox" onclick = "ubahKODE()">
                    <label class="form-check-label" for="flexCheckDefault">
                        Ubah Kode
                    </label>
                </div>
            </div>
        </div>   
        
        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Nama Matkul</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    </span>
                    <input type="text" class="form-control" id="txNAMA" placeholder="Masukkan Nama Matkul">
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Bobot SKS</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    </span>
                    <select id="txSKS" class="form-select">
                        <option value="" selected disabled>--SKS--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-4 col-lg-3 col-form-label fw-bold">Semester</label>
            <div class="col-sm-8 col-lg-9">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 12.5a.5.5 0 0 1-.5.5H1.5A1.5 1.5 0 0 1 0 11.5v-10A1.5 1.5 0 0 1 1.5 0h10A1.5 1.5 0 0 1 13 1.5v6.636a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M16 15.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L6.146 6.854a.5.5 0 1 1 .708-.708L15 14.293V10.5a.5.5 0 0 1 1 0v5z"/>
                    </svg>
                    </span>
                    <input type="number" class="form-control" id="txSMT" placeholder="Masukkan Semenester Mata Kuliah">
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

<script src="mk-searchdata.js"></script>
<script src="mk-updatedata.js"></script>

    <script>
        document.getElementById("sukses").style.display="none";
        document.getElementById("gagal").style.display="none";

        function ubahKODE(){
        let textbox = document.getElementById("txKD");
        textbox.disabled = check.checked ? false : true;
        if (!textbox.disabled){
            textbox.focus();
        }
    }
    </script>