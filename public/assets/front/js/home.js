var mainimg=document.querySelector('.mainimg')
var images= [
    '/assets/front/images/qocaadam.jpg',
    '/assets/front/images/fotograf.jpeg',
  '/assets/front/images/gemi.jpeg',
    '/assets/front/images/petra.jpeg',
    '/assets/front/images/cay.jpeg'
];
var num=0;
const IntervalTime=1000;
let slideInterval

function next(){
    console.log('Next button clicked');
    num++
    if(num>=images.length){
        num=0;
        mainimg.src=images[num]
    }else{
        mainimg.src=images[num]
    }
}

function back(){
    console.log('Next button clicked');
    num--
    if(num<0){
        num=images.length-1
        mainimg.src=images[num]
    }else{
        mainimg.src=images[num]
    }
}




var mainimgs = document.querySelector('.mainimgs');
var images = [
    '/assets/front/images/fotograf.jpeg',
    '/assets/front/images/gemi.jpeg',
    '/assets/front/images/petra.jpeg',
    '/assets/front/images/cay.jpeg',
    '/assets/front/images/qocaadam.jpg'

];
var num = 0;

function nexts() {
    console.log('Next button clicked');
    num++;
    if (num >= images.length) {
        num = 0;
    }
    mainimgs.src = images[num];
}

function backs() {
    console.log('Back button clicked');
    num--;
    if (num < 0) {
        num = images.length - 1;
    }
    mainimgs.src = images[num];
}


