var start = document.getElementsByClassName('icon')[0];
var shadow = document.getElementsByClassName('shadow')[0];
var regin = document.getElementsByClassName('regin')[0];
var sign = document.getElementsByClassName('sign')[0];
var close = document.getElementsByClassName('close');
var rsi = document.getElementById('rsi');

start.onclick=function () {
    shadow.style.display='block';
    regin.style.display='block';
}

rsi.onclick = function () {
    regin.style.display='none';
    sign.style.display='block';
}

close[0].onclick = function () {
    shadow.style.display='none';
    regin.style.display='none';
}
close[1].onclick = function () {
    shadow.style.display='none';
    sign.style.display='none';
}