"use restrict"

/*function preLoad(){
    imgs=Array("f1.jpg","f2.jpg","f3.jpg","f4.jpg","f5.jpg");
    imgQtde=imgs.lenght;
    for(i=0 ; i<imgQtde ; i++){
        var preloadimg=new Image () ;
        preloadimg.src=imgs[i];
    }
}*/

function startImage(){
    max=5;
    min=1;
    fi=min;
    tr=true;
    loadImage('f'+fi+'.jpg');
    document.getElementById('carousel-slide').addEventListener('transitionend',endTr);
    timer=setInterval(shiftImage,4000);
}

function shiftImage(){
    fi++;
        if(fi>max){
            fi=min;
        }
        loadImage('f'+fi+'.jpg');
}

function endTr(){
    tr=true;
}

function loadImage(image){
    document.getElementById('carousel-slide').style.backgroundImage="url(../slide/img/"+image+")";
}

function next(){
    clearInterval (timer);
    if(tr){
        tr=false;
        fi++;
        if(fi>max){
            fi=min;
        }
        loadImage('f'+fi+'.jpg');
    }
    timer=setInterval(shiftImage,4000);
}

function prev(){
    clearInterval (timer);
    if(tr){
        tr=false;
        fi--;
        if(fi<min){
            fi=max;
        }
        loadImage('f'+fi+'.jpg');
    }
    timer=setInterval(shiftImage,4000);
    
}


