
    <div id="konten"></div>

    <script>
        const jsonData = new XMLHttpRequest()

        jsonData.open("GET","../server/mhs-datalist.php")
        jsonData.send()

        jsonData.onload = function(){
            const myData = JSON.parse(this.responseText)
            console.log(myData)

            let hasil = '<div class="mb-3 d-sm-flex justify-content-between bg-white rounded-2 border-0 shadow-none p-2" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">'
            hasil += "   <div>"
            hasil += "        <h4 class='my-sm-4 my-2 mx-3'>Daftar Data Mahasiswa</h4>"
            hasil += "    </div>"
            hasil += "    <div class='pt-1'>"
            hasil += "        <ol class='breadcrumb my-2 my-sm-4 mx-3'>"
            hasil += "            <li class='breadcrumb-item'><a href='index.php'>Dashboard</a></li>"
            hasil += "            <li class='breadcrumb-item active' aria-current='page'>Data Mahasiswa</li>"
            hasil += "        </ol>"
            hasil += "    </div>"
            hasil += "</div>"

            hasil += "<div class='card table-responsive rounded-2 border-0 shadow-none p-3 overflow-auto'>"
            hasil += "  <div class='card-header mb-3 align-middle p-0 bg-white border-0'>"
            hasil += "      <a class='btn btn-primary' href='index.php?p=mhs&act=add'><b class='px-2 py-1'>Tambah Data</b></a>"
            hasil += "  </div>"
            hasil += "  <table class='table table-striped table-borderless align-middle'>"
            hasil += "      <thead class='table-danger'>"
            hasil += "          <tr>"
            hasil += "              <th scope='col'class='py-3'>No</th>"
            hasil += "              <th scope='col'class='py-3'>NIM</th>"
            hasil += "              <th scope='col'class='py-3'>Nama</th>"
            hasil += "              <th scope='col'class='py-3'>Jenis Kelamin</th>"
            hasil += "              <th scope='col'class='py-3'>Fakultas</th>"
            hasil += "              <th scope='col'class='py-3'>Jurusan</th>"
            hasil += "              <th scope='col'class='py-3'>Angkatan</th>"
            hasil += "              <th scope='col'class='py-3 text-center'>Aksi</th>"
            hasil += "          </tr>"
            hasil += "      </thead>"
            hasil += "      <tbody>"

            let no = 1
            for(i=0; i<myData.length; i++){

                let jk ;
                if(myData[i][2] == "L")
                    jk = "Laki - Laki";
                else if(myData[i][2] == "P")
                    jk = "Perempuan";
                else{
                    jk = "";
                }

                hasil += "<tr>"
                hasil += "  <td>"+no+"</td>"
                hasil += "  <td>"+myData[i][0]+"</td>"
                hasil += "  <td>"+myData[i][1]+"</td>"
                hasil += "  <td>"+jk+"</td>"
                hasil += "  <td>"+myData[i][7]+"</td>"
                hasil += "  <td>"+myData[i][10]+"</td>"
                hasil += "  <td>"+myData[i][5]+"</td>"
                hasil += "  <td class='text-center'><a class='badge bg-success px-3 py-1' href='index.php?p=mhs&act=update&nim="+myData[i][0]+"'>EDIT</a><a class='badge bg-danger py-1' href='index.php?p=mhs&act=delete&nim="+myData[i][0]+"'>HAPUS</a></td>"
                hasil += "</tr>"

                no++

            }
                
            
            hasil += "  </tbody>"
            hasil += "</table>"
            hasil += "</div>"
            

            

            document.getElementById("konten").innerHTML = hasil;
            

        }
    </script>


    