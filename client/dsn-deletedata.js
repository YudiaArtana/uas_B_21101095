function batal(){
    location.replace("index.php?p=dsn")
}

function hapus(){

    let nidn = document.getElementById("txNIDN").value;
    
    let data = "nidn="+nidn;
    console.log(nidn);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/dsn-datadelete.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(() => {
                window.location.href="index.php?p=dsn";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    }
 }

