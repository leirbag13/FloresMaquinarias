$(document).ready(inicializarEventos);

function inicializarEventos(){
  $(".unBtnRedes").click(presionBoton)
  $("#reproductor").click(presionBoton)
  $(".txtBtnsVarios").click(presionBoton)
  $("#txtDeporte").click(presionBoton)
}

function presionBoton(){
  alert("Próximamente!");
}