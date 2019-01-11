$(document).ready(function () {
console.log("desde js");
 /*            
$('#enviar').click(function () {
    console.log("desde funcion");
    alert("tengo input " + $("input[name='nombre']","#nombre").length + " inputs");

    
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    var mensaje = document.getElementById('mensaje').value;
    
   
    var ruta = "&nom="+nombre+"&ema="+email+"&tel="+telefono+"&men="
+mensaje;

    $.ajax({
        url:location.origin + '/templet/back.php',
        type:'post',
        data:ruta,
    })
    .done(function (res) {
        $("#respuesta").html(res)
    })

});

$('#borrar').click(function () {
    $('#respuesta').empty();

});


$('#sumar').click(function () {
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num2').value;
    $("input[name='nombre']").val("Juan");
    var num1 = Number(num1);
    var num2 = Number(num2);
    var resultado = num1+num2;   
    $('#respuesta').wrap("<div class='row justify-content-center alert alert-success' role='alert'><div class='col-4'> </div></div>").append("<br>La suma de "+num1+" + "+num2+" es "+resultado);

});
 */


});


/* 
.wrap("<div class='row justify-content-center alert alert-primary' role='alert'><div class='col-4'> </div></div>")
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