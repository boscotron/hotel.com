


/* $(document).ready(function () {
            
   
    $('#enviar').click(function () {

        console.log("hola desde funcion");
        
            let nombre=document.getElementById('nombre').value
            let email=document.getElementById('email').value
            let telefono=document.getElementById('telefono').value
            let mensaje=document.getElementById('mensaje').value
        
            
        
            $.ajax({
        
                type:"post",
                url: location.origin + '/templet/back2.php',
                data:{nombre:nombre, email:email,telefono:telefono, mensaje:mensaje},
        
                success:function(datos){
                    $("#respuesta").html(datos);
                }
        
            }
            )
        
        });
 
}); */


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