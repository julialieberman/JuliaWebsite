var slideIndex = [1,1];
var slideId=["fire", "b&w", "nature", "other"];
var dotIndex=[1,1];
var dotId=["fireDot", "b&wDot", "natureDot", "otherDot"];
showDivs(1,0);
showDivs(1,1);
showDivs(0, 2);
showDivs(0, 3);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function currentDiv(n) {
  showDivs(slideIndex[no] = n);
}
function showDivs(n, no) {
var i;
var x = document.getElementsByClassName(slideId[no]);
var dots=document.getElementsByClassName(dotId[no]);
if (n > x.length) {slideIndex[no] = 1}
if (n < 1) {slideIndex[no] = x.length}
for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";
}
for(i=0; i<dots.length; i++){
  dots[i].className=dots[i].className.replace("w3-white", "");
}
x[slideIndex[no]-1].style.display = "block";
dots[slideIndex[no]-1].className+=" w3-white";
}
