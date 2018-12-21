$(document).ready(function () {
            
$('#enviar').click(function () {    
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    var mensaje = document.getElementById('mensaje').value;

    var ruta = "&nombre="+nombre+"&email="+email+"&telefono="+telefono+"&mensaje="
+mensaje;


if (nombre!=""  && email!="" && telefono!="" && mensaje!="") {
    console.log("Si, "+ nombre+" HAY ALGO");
    $("#enviar").html("Mensaje Enviado");
    $("#enviar").css({"background-color": "#ed5434","border-radius":"5px","border":"#ed5434" ,"color":"#fff", "font-size": "170%"});

    $.ajax({
        url:location.origin + '/app/controlador/correo-comsis.php',
         type:'POST',
         data:ruta,
     })
     .done(function (res) {
         $("#respuesta").html(res)
     })
    
}else{
    $("#respuesta").html("Por favor completa los campos");
}


});/* cierre de funcion enviar*/ 



});/**Cierre de funcion ready */