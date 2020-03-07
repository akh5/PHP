var imgs = document.getElementsByClassName("images");

var left = document.getElementsByClassName("left")[0];
var right = document.getElementsByClassName("right")[0];

var len = imgs.length;
var current = 0;

function flip() {
    left.onclick = function () {
        current--;
        for(var i=0;i<imgs.length;i++){
            imgs[i].className='images';
        }
        if(current<0){
            current=imgs.length-1;
        }
        imgs[current].className='images active';
    }
    right.onclick = function () {
        current++;
        for(var i=0;i<imgs.length;i++){
            imgs[i].className='images';
        }
        if(current>imgs.length-1){
            current=0;
        }
        imgs[current].className='images active';
    }
}
flip();
setInterval(function () {
    current++;
    for(var i=0;i<imgs.length;i++){
        imgs[i].className='images';
    }
    if(current>imgs.length-1){
        current=0;
    }
    imgs[current].className='images active';
},3500)