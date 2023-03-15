//modal icones//
var button = document.getElementById("edit");
var modal = document.getElementById("imagempop");
var span = document.getElementsByClassName("material-symbols-outlined")[0];

button.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

