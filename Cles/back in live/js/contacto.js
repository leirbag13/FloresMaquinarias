$(document).ready(function(){validar();});
var mensajes = {
	nombre: "",
	mail: { required: "", email: ""},
	consulta: ""
}
var reglas = {
	nombre: "required",
	mail: { required: true, email: true },
	consulta: "required"
}
function enviarConsulta(){
	$("#formContacto").submit();
}
function limpiar(){
	$('#IDnombre').attr('value', "");
	$('#IDmail').attr('value', "");
	$('#IDconsulta').attr('value', "");
	$('#IDtelefono').attr('value', "");
}
function validar(){
	$("#formContacto").validate({
		rules: reglas,
		messages: mensajes,
		submitHandler: function(form){
			document.getElementById("resultado").innerHTML = "Aguarde mientras se envia el mail.";
			var datos = "nombre="+$('#IDnombre').val()+"&mail="+$('#IDmail').val()
				+"&consulta="+$('#IDconsulta').val()+"&telefono="+$('#IDtelefono').val();
			$.ajax({ 
				type: "POST",
				url: "mail.php",
				data: datos,
				success: function(respuesta){
       			  if(respuesta == 1){
						document.getElementById("resultado").innerHTML = "La consulta ha sido realizada.";
						limpiar();
					}else{
						document.getElementById("resultado").innerHTML = "Ocurri&oacute; un error. Intentelo m&aacute;s tarde";
					}
		        }
			});
		}
	});
}