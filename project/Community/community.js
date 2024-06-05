window.addEventListener("scroll",active);

function active(){
  var a= document.querySelectorAll('.reveal');

  for (var i = 0; i < a.length; i++) {
    var innerHeight= window.innerHeight;
    var con= 200;
    var topclass=a[i].getBoundingClientRect().top;

    if(topclass<innerHeight-con){
      a[i].classList.add('activate');
    }
    else{
      a[i].classList.remove('activate');
    }
  }
}

function ddp(){
  var a=document.getElementsByClassName("dp");
  var b=document.getElementsByClassName("hdp");
  a[0].classList.add("ddp");
  b[0].classList.add("hhdp");
}

function hdp(){
  var a=document.getElementsByClassName("dp");
  var b=document.getElementsByClassName("hdp");
  b[0].classList.remove("hhdp");
  a[0].classList.remove("ddp");
}
