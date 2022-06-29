let queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const nidn = urlParams.get("nidn");

let urltarget = new URL ("http://localhost/WEBPROG/UAS/server/dsn-datafromid.php");
urltarget.searchParams.set("nidn", nidn);

const jsonData = new XMLHttpRequest();
jsonData.open("GET", urltarget)
jsonData.send()

jsonData.onload=function(){
    const myData = JSON.parse(this.responseText)
    console.log(myData["isi"])
    for(i=0;i<myData["isi"].length;i++){
        document.getElementById("txNIDNLAMA").value=myData["isi"][i][0]
        document.getElementById("txNIDN").value=myData["isi"][i][0]
        document.getElementById("txNAMA").value=myData["isi"][i][1]
        document.getElementById("txTELP").value=myData["isi"][i][2]
        document.getElementById("txALAMAT").value=myData["isi"][i][3]
        document.getElementById("txJUR").value=myData["isi"][i][4]
    }
}