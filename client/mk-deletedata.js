function batal(){
    location.replace("index.php?p=mk")
}

function hapus(){

    let kode = document.getElementById("txKD").value;
    
    let data = "kd="+kode;
    console.log(kode);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/mk-datadelete.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(() => {
                window.location.href="index.php?p=mk";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    }
 }

