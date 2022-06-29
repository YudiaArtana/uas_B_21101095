let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const id = urlParams.get("id");

let urltarget = new URL ("http://localhost/WEBPROG/UAS/server/krs-datafromid.php");
urltarget.searchParams.set("id", id);

const jsonData = new XMLHttpRequest();
jsonData.open("GET", urltarget)
jsonData.send()

jsonData.onload=function(){
    const myData = JSON.parse(this.responseText)
    console.log(myData["isi"])
    for(i=0;i<myData["isi"].length;i++){
        document.getElementById("txID").value=myData["isi"][i][0]
        document.getElementById("txMK").value=myData["isi"][i][1]
        document.getElementById("txDSN").value=myData["isi"][i][2]
        document.getElementById("txKLS").value=myData["isi"][i][3]
        document.getElementById("txMULAI").value=myData["isi"][i][4]
        document.getElementById("txSELESAI").value=myData["isi"][i][5]
    }
}