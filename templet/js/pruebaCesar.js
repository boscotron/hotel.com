
$(document).ready(function(){

	console.log("prueba js");

$('#enviar').click(function(){

	var nombre = document.getElementById('nombre').value;
	var email = document.getElementById('email').value;
	var telefono = document.getElementById('telefono').value;
	var mensaje = document.getElementById('mensaje').value;

var ruta = "&nom="+nombre+"&ema="+email+"&tel="+telefono+"&men="+mensaje;

$.ajax({
	url:location.origin + '/templet/back.php',
	type:'POST',
	data: ruta,
})

.done(function(res){
	$("#respuesta").html(res)
})

});


$("#borrar").click(function(){
	$("#respuesta").empty();
console.log("Funcion borrar");

});

});













/*console.log("Hola desde js");

function sumarNumeros(a, b) {
	
   let resultado = (a) + (b);     
   return console.log(resultado);  
};
sumarNumeros(5, 20);

function multiplicacion(a , b){
	let res = a * b;
	return console.log(res);
};
multiplicacion(5, 7);

let prueba = function (a, b){
	let resultado = (a) + (b);     
   return console.log(resultado);  
};
prueba(6, 16);

let resta = new Function("a", "b","return a-b");
	
let resultado = resta(56, 12);
console.log(resultado);

function suma(){

};
suma();*/