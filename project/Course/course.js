function sty(){
  var b=document.getElementsByClassName("sin");
  b[0].classList.add("show");
}

function remv(){
  var c=document.getElementsByClassName("sin");
  c[0].classList.remove("show");
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
