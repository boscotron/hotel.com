
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


$("#sumar").click(function(){
var nu1 = document.getElementById('nu1').value;
var nu2 = document.getElementById('nu2').value;

console.log(nu1);

var nu1 = Number (nu1);
var nu2 = Number (nu2);

//var suma = parseInt(nu1) + parseInt(nu2);
var resultado = nu1 + nu2;
//var resultado;
//alert("suma" + suma);
document.getElementById('resultado').value=resultado;//dara el resultado en ei input resultado

//$("#resultado").append("la suma de   "+ nu1 + " + " + nu2 + " es " + resultado);

console.log("Funcion sumar");

//.parseInt()

});


	












  

  $("#hsuma").click(function(){
    $("#Suma").fadeIn();

    
  });

  $("#sumar").click(function(){
var num1 = document.getElementById('num1').value;		
var num2 = document.getElementById('num2').value;
var num3 = document.getElementById('num3').value;
//console.log(num1);
var num1 = Number (num1);
var num2 = Number (num2);
var num3 = Number (num3);
//var suma = parseInt(nu1) + parseInt(nu2);
var resul = num1 + num2 + num3;
//var resultado;
//alert("suma" + suma);
document.getElementById('resul').value=resul;//dara el resultado en ei input resultado
console.log("Funcion sumar");
});


$("#hresta").click(function(){
    $("#Resta").fadeIn();

    
  });


$("#resta").click(function(){
var nume1 = document.getElementById('nume1').value;		
var nume2 = document.getElementById('nume2').value;
var nume3 = document.getElementById('nume3').value;
//console.log(num1);
var nume1 = Number (nume1);
var nume2 = Number (nume2);
var nume3 = Number (nume3);
//var suma = parseInt(nu1) + parseInt(nu2);
var resulta = nume1 - nume2 - nume3;
//var resultado;
//alert("suma" + suma);
document.getElementById('resulta').value=resulta;//dara el resultado en ei input resultado
console.log("Funcion restar");
});



$("#hmulti").click(function(){
    $("#Multi").fadeIn();   
  });

$("#multi").click(function(){
var numer1 = document.getElementById('numer1').value;		
var numer2 = document.getElementById('numer2').value;
var numer3 = document.getElementById('numer3').value;
//console.log(num1);
var numer1 = Number (numer1);
var numer2 = Number (numer2);
var numer3 = Number (numer3);
//var suma = parseInt(nu1) + parseInt(nu2);
var resultad = numer1 * numer2 * numer3;
//var resultado;
//alert("suma" + suma);
document.getElementById('resultad').value=resultad;//dara el resultado en ei input resultado
console.log("Funcion multiplicación");
});
//
var ocultar = $("#ocultar");
var ocultar1 = $('#ocultar1');
var ocultar2 = $('#ocultar2');

  ocultar.click(function() {
    	$("#Suma").hide(1000);
  });

  ocultar1.click(function() {
    	$("#Resta").hide(1000);
  });
  ocultar2.click(function() {
    	$("#Multi").hide(1000);
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