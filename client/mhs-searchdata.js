let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const nim = urlParams.get("nim");

let urltarget = new URL ("http://localhost/WEBPROG/UAS/server/mhs-datanim.php");
urltarget.searchParams.set("nim", nim);

const jsonDataNIM = new XMLHttpRequest();
jsonDataNIM.open("GET", urltarget)
jsonDataNIM.send()

jsonDataNIM.onload=function(){
    const myData = JSON.parse(this.responseText)
    console.log(myData["isi"])
    for(i=0;i<myData["isi"].length;i++){
        document.getElementById("txNIMLAMA").value=myData["isi"][i][0]
        document.getElementById("txNIM").value=myData["isi"][i][0]
        document.getElementById("txNAMA").value=myData["isi"][i][1]
        document.getElementById("txJK").value=myData["isi"][i][2]
        document.getElementById("txFAK").value=myData["isi"][i][3]
        document.getElementById("txJUR").value=myData["isi"][i][4]
        document.getElementById("txAKT").value=myData["isi"][i][5]
    }
}