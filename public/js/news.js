var Today = new Date();
var yy = Today.getFullYear();
var mm = Today.getMonth() + 1;
var dd = Today.getDate();
var h = Today.getHours();
var m = Today.getMinutes();
var s = Today.getSeconds();
// document.getElementById("mday").innerHTML = yy+" "+mm+" "+dd+" ";
if (mm < 10) {
    if (dd < 10) {
        document.getElementById("mday").innerHTML = yy + ".0" + mm + ".0" + dd;
        document.getElementById("mday2").innerHTML = yy + ".0" + mm + ".0" + dd;
        document.getElementById("mday3").innerHTML = yy + ".0" + mm + ".0" + dd;
        document.getElementById("mday4").innerHTML = yy + ".0" + mm + ".0" + dd;
    }
    else {
        document.getElementById("mday").innerHTML = yy + ".0" + mm + "." + dd;
        document.getElementById("mday2").innerHTML = yy + ".0" + mm + "." + dd;
        document.getElementById("mday3").innerHTML = yy + ".0" + mm + "." + dd;
        document.getElementById("mday4").innerHTML = yy + ".0" + mm + "." + dd;
    }
} else {
    if (dd < 10) {
        document.getElementById("mday").innerHTML = yy + "." + mm + ".0" + dd;
        document.getElementById("mday2").innerHTML = yy + "." + mm + ".0" + dd;
        document.getElementById("mday3").innerHTML = yy + "." + mm + ".0" + dd;
        document.getElementById("mday4").innerHTML = yy + "." + mm + ".0" + dd;
    }
    else {
        document.getElementById("mday").innerHTML = yy + "." + mm + "." + dd;
        document.getElementById("mday2").innerHTML = yy + "." + mm + "." + dd;
        document.getElementById("mday3").innerHTML = yy + "." + mm + "." + dd;
        document.getElementById("mday4").innerHTML = yy + "." + mm + "." + dd;
    }
}
