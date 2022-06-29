let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const kode = urlParams.get("kd");

let urltarget = new URL ("http://localhost/WEBPROG/UAS/server/mk-datafromid.php");
urltarget.searchParams.set("kd", kode);

const jsonData = new XMLHttpRequest();
jsonData.open("GET", urltarget)
jsonData.send()

jsonData.onload=function(){
    const myData = JSON.parse(this.responseText)
    console.log(myData["isi"])
    for(i=0;i<myData["isi"].length;i++){
        document.getElementById("txKDLAMA").value=myData["isi"][i][0]
        document.getElementById("txKD").value=myData["isi"][i][0]
        document.getElementById("txNAMA").value=myData["isi"][i][1]
        document.getElementById("txSKS").value=myData["isi"][i][2]
        document.getElementById("txSMT").value=myData["isi"][i][3]
    }
}