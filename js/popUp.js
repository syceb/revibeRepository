var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

//Ikkuna aukeaa kun painetaan tekstiä
btn.onclick = function() {
  modal.style.display = "block";
}
// Ikkuna sulkeutuu kun painetaan (x)
span.onclick = function() {
  modal.style.display = "none";
}
// Kun käyttäjä klikkaa mihin tahansa ikkunan ulkopuolelle ikkuna sulkeutuu
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
