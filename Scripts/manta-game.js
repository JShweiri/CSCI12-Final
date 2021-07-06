var canvas = document.getElementById('gc');
var ctx = canvas.getContext('2d');

var count=0;

var image = new Image();
image.src = '/CS12/Images/art-manta.png';

var image2 = new Image();
image2.src = '/CS12/Images/finger.png';

image.onload = function(){  ctx.drawImage(image, canvas.width/2-110, 0);};
image2.onload = function(){  ctx.drawImage(image2, canvas.width/2-150, 120);};

function fingerUp(){
ctx.clearRect(0, 0, canvas.width, canvas.height);
ctx.drawImage(image, canvas.width/2-110, 0);
ctx.drawImage(image2, canvas.width/2-150, 120);

ctx.font = "30px Arial";
ctx.fillText("Score: "+count,canvas.width/2+100,200);
}

function fingerDown(){
ctx.clearRect(0, 0, canvas.width, canvas.height);
ctx.drawImage(image, canvas.width/2-110, 0);
ctx.drawImage(image2, canvas.width/2-150, 120, 500, 1070);
count+=1;

ctx.font = "30px Arial";
ctx.fillText("Score: "+count,canvas.width/2+100,200);
}

canvas.addEventListener("mousedown", mouseDown);
canvas.addEventListener("mouseup", mouseUp);

function mouseDown() {
    fingerDown();
}

function mouseUp() {
    fingerUp();
}