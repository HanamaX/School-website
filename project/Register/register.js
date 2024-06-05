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


function sty(){
  var b=document.getElementsByClassName("sin");
  var m=document.getElementsByClassName("sig");
  var n=document.getElementsByClassName("sog");
  b[0].classList.add("show");
  m[0].classList.add("hid");
  n[0].classList.add("hid");

}

function remv(){
  var c=document.getElementsByClassName("sin");
  var m=document.getElementsByClassName("sig");
  var n=document.getElementsByClassName("sog");
  c[0].classList.remove("show");
  m[0].classList.remove("hid");
  n[0].classList.remove("hid");
}

function stym(){
  var a=document.getElementsByClassName("sim");
  var m=document.getElementsByClassName("sig");
  var n=document.getElementsByClassName("sog");
  a[0].classList.add("show");
  m[0].classList.add("hid");
  n[0].classList.add("hid");

}

function remvm(){
  var d=document.getElementsByClassName("sim");
  var m=document.getElementsByClassName("sig");
  var n=document.getElementsByClassName("sog");
  d[0].classList.remove("show");
  m[0].classList.remove("hid");
  n[0].classList.remove("hid");
}


