function batal(){
    location.replace("index.php?p=krs")
}

function hapus(){
    let id = document.getElementById("txID").value;
    
    let data = "id="+id;
    console.log(data);

    const jsonData = new XMLHttpRequest();
    jsonData.open("POST","../server/krs-datadelete.php");
    jsonData.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    jsonData.send(data);

    jsonData.onload = function(){
        const myData = JSON.parse(this.responseText);
        console.log(myData);
        if(myData["error"] == false){
            document.getElementById("sukses").style.display="block";
            setTimeout(() => {
                window.location.href="index.php?p=krs";
            },1500)
        }else{
            document.getElementById("gagal").style.display="block";
        }
        
    }
 }

