var modal = document.getElementById("myModal");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];

btn1.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}