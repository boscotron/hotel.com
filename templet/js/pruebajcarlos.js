$(document).ready(function () {

    $('#enviar').click(function () {

        var email = document.getElementById('email').value;
        var nombre = document.getElementById('nombre').value;
        var direccion = document.getElementById('direccion').value;
        var ciudad = document.getElementById('ciudad').value;
        var selecciono = document.getElementById('selecciono').value;


       let ruta = "&email="+email+"&nombre="+nombre+"&direccion="+direccion+"&ciudad="+ciudad+"&selecciono="+selecciono;

       $.ajax({
        url:location.origin + '/templet/back.php',
        type:'post',
        data: ruta,
         })    
        .done(function(res){
        $("#respuesta").html(res)
        })
    
    }); 

});        
/* $('#miId').serialize() {habitacion:habitacion,personas:personas, familia:familia} ,*/

/* $('body').empty().append('<p> Soy un parrafo</p>').after('<h3>Soy un h3 </h3>'); */

/*$('p').wrap('<div class="envoltura"></div>')*/

/* $(':input').val("Juan"); */
/* $('body').append('<input type="text" value="soy un valor" />').val(); */


/* let cuantos = 0; */
/* cuantos = $(':input').filter(':radio').length; */
/* 
alert("tengo input " + $("input[name='nombre']","#miId").length + " inputs"); */
/* $(':input').filter(':radio').addClass('nueva').end().val(2); */
/* 
$(':input').filter(':radio').end().length;
/*alert("tienes " + cuantos + " input de radio");*/
/*alert("hola soy el Id = " + $("ul #dos").prev().attr('id') + " XD");
 */
  /*           
$('#enviar').click(function () {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    var mensaje = document.getElementById('mensaje').value;

    var ruta = "&nom="+nombre+"&ema="+email+"&tel="+telefono+"&men="
+mensaje;

$.ajax({
    url:location.origin + '/templet/back.php',
    type:'POST',
    data:ruta,
})
.done(function (res) {
    $("#respuesta").html(res)
})

});
 */




/* 
function enviar_datos_ajax(){
    let n=document.getElementById('nombre').value
    let ema=document.getElementById('email').value
    let tel=document.getElementById('telefono').value
    let men=document.getElementById('mensaje').value

    var url= "procesar_datos.php";

    $.ajax({

        type:"post",
        url:url,
        data:{nombre:n, email:ema,telefono:tel, mensaje:men},

        success:function(datos){
            $("#mostrardatos").html(datos);
        }

    }
    )
}
});
 */
/* function objetoAjax() {
    var xmlhttp=false;
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch (E){
            xmlhttp = false;
        }
       
    }                    
    if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
    xmlhttp = new XMLHttpRequest();
    }
     return xmlhttp;
} 

function Enviar() {
    valor = document.getElementsById('nombre').value;
    console.log(valor);
};

function sumarNumeros(a, b) {
    let resultado = (a) + (b);     
    return console.log(resultado);  
 };
 sumarNumeros(5, 20);



 
 function multiplicacion(a , b, f){
     let res = a * b + f;
     return console.log(res);
 };
 multiplicacion(5, 7 , 10);




 
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
 suma();
 */