function batal(){
    location.replace("index.php?p=krs")
}

function simpan(){
    let id = document.getElementById("txID").value;
    let mk = document.getElementById("txMK").value;
    let dsn = document.getElementById("txDSN").value;
    let kls = document.getElementById("txKLS").value;
    let mulai = document.getElementById("txMULAI").value;
    let selesai = document.getElementById("txSELESAI").value;
    
    let data = "id="+id+"&mk="+mk+"&dsn="+dsn+"&kls="+kls+"&mulai="+mulai+"&selesai="+selesai;
    console.log(data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/krs-dataadd.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(()=>{
                window.location.href="index.php?p=krs";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    };
    
    return false;
 }

