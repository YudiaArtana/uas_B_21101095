function batal(){
    location.replace("index.php?p=mhs")
}

function update(){

    let nimlama = document.getElementById("txNIMLAMA").value;
    let nim = document.getElementById("txNIM").value;
    let nama = document.getElementById("txNAMA").value;
    let jk = document.getElementById("txJK").value;
    let fak = document.getElementById("txFAK").value;
    let jur = document.getElementById("txJUR").value;
    let akt = document.getElementById("txAKT").value;
    
    let data = "nimlama="+nimlama+"&nim="+nim+"&nama="+nama+"&jk="+jk+"&fak="+fak+"&jur="+jur+"&akt="+akt;
    console.log(data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/mhs-dataupdate.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(()=>{
                window.location.href="index.php?p=mhs";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    };

    return false;
 }

