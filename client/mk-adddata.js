function batal(){
    location.replace("index.php?p=mk")
}

function simpan(){
    let kode = document.getElementById("txKD").value;
    let nama = document.getElementById("txNAMA").value;
    let sks = document.getElementById("txSKS").value;
    let smt = document.getElementById("txSMT").value;
    
    let data = "kode="+kode+"&nama="+nama+"&sks="+sks+"&smt="+smt;
    console.log(data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/mk-dataadd.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(()=>{
                window.location.href="index.php?p=mk";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    };
    
    return false;
 }

