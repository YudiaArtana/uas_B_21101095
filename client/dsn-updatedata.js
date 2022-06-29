function batal(){
    location.replace("index.php?p=dsn")
}

function update(){

    let nidnlama = document.getElementById("txNIDNLAMA").value;
    let nidn = document.getElementById("txNIDN").value;
    let nama = document.getElementById("txNAMA").value;
    let telp = document.getElementById("txTELP").value;
    let alamat = document.getElementById("txALAMAT").value;
    let jur = document.getElementById("txJUR").value;
    
    let data = "nidnlama="+nidnlama+"&nidn="+nidn+"&nama="+nama+"&telp="+telp+"&alamat="+alamat+"&jur="+jur;
    console.log(data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/dsn-dataupdate.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(()=>{
                window.location.href="index.php?p=dsn";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    };

    return false;
 }

