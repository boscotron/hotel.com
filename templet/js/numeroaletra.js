$(document).ready(function () {

    
    $('#convertir').click(function () {
        $( "#respuesta" ).empty();
        var person = "";
        var nlargo = "";
        var person = document.getElementById('numero').value;
        //var person = prompt("Ingresa tu numero a convertir");
        //var largo = person.length;
       // console.log(typeof person);
        var nlargo = person.length;
          
        if (person==="" || person === 0) {
            $("#respuesta").append('Por favor, ingresa por lo menos un valor mayor a cero <br/>',);
            
        }
        
        
        //if (n<7) {$("#respuesta").append("Lo lamento, pero el maximo numero a ingresar, es Centenas de MILLON"+n+"<br><br>");}

        var ValoresMenorNueve 	= ["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho", "nueve"];
        var ValoresMenorCinco 	= ["diez","once","doce","trece","catorce","quince"];
        var ValoresMayorSeis  	= ["dieciseis", "diecisiete","dieciocho","diecinueve"];
        var ValoresMayorVeinte  = ["XD","diez","veinte","treinta","cuarenta","cincuenta", "sesenta" , "setenta", "ochenta", "noventa"];
        var ValoresMayorBillon  = ["XD","billon","trillon","cuatrillon"];
        var cien = cien;
        var quinientos = quinientos;
        var ciento = ciento;

        //Se  separa el numero
        var separ = person.split('');
        

        //valor alreves unido
        var alrev = separ.reverse().join(''); 
        $("#respuesta").append("<hr>valor ingresado"+person+"<br/>");
        //$("#respuesta").append("valor ingresado pero alreves XD"+separ+"<br/>");
        //$("#respuesta").append("valor alreves pero sin separacion " +alrev+"<br/>");
       
        var person= Number(alrev);
        

        var res1 = alrev.substr(0, 1); //imprime el primer valor
        var res2 = alrev.substr(1, 1);// imprime el segundo valor
        var res3 = alrev.substr(2, 1);// imprime el tercer valor
        var res4 = alrev.substr(3, 1); //imprime el cuarto valor
        var res5 = alrev.substr(4, 1);// imprime el quinto valor
        var res6 = alrev.substr(5, 1);// imprime el sexto valor



       
        //$("#respuesta").append(" Primer  valor <b>"+res1+ "</b> ");
        //$("#respuesta").append(" Segundo valor <b>"+res2+ "</b> ");
        //$("#respuesta").append(" Tercer valor <b>"+res3+ "</b> ");
        //$("#respuesta").append(" Cuarto valor <b>"+res4+ "</b> ");
        //$("#respuesta").append(" Quinto valor <b>"+res5+ "</b> ");
        //$("#respuesta").append(" Sexto valor <b>"+res6+ "</b> ");


        var res1= Number(res1);
        var res2= Number(res2);
        var res3= Number(res3);
        var res4= Number(res4);
        var res5= Number(res5);
        var res6= Number(res6);
        
        //$("#respuesta").append(typeof res1);

        /* //funcion para imprimir las unidades
        function Unidades(res1,ValoresMenorNueve) {
                if (res1!=0) {
                    if (res1<=9) {
                        return ValoresMenorNueve[res1];
                    }
                }
                if (res1==0) {
                    return ValoresMenorNueve[res1];
                }
        } */

        /* //funcion para imprimir valor menor a 5
        function decenasMenorQuince(res1,ValoresMenorCinco) {
            if (res1<= 5) {
                return ValoresMenorCinco[res1];	
                
            }
            
        } */


/* Funcion imprime el valor ingresado */
        function appendText(result,nlargo) {
            
               
               var nlargo =nlargo--;
               console.log(nlargo);
               console.log(typeof nlargo);
               
              if (nlargo === 0) {

                $("#respuesta").innerHTML("<span>"+result+"</span>");
              }else{
                var n = n-1;
                var result = result + result;
                
              }
            
            
            
            //$("#respuesta").text(result);
          }


/* 
          var update = function() {
            return $(window).width();
          }
          
          $(document).ready(
            function() {
              $('button').click(
                function() {
                  var width = update();
                  $('#width').text(width)
                }
              )
            }
          )
 */

        //funcion para imprimir valor menor a 5


        function decenasMayorSeis(ValoresMayorSeis, res1) {
            var Numdieciseis =0;
            var Numdiecisiete=1;
            var Numdieciocho =2;
            var Numdiecinueve=3;
            if (res1=== 6) {return ValoresMayorSeis[Numdieciseis ];}
            if (res1=== 7) {return ValoresMayorSeis[Numdiecisiete];}
            if (res1=== 8) {return ValoresMayorSeis[Numdieciocho ];}
            if (res1=== 9) {return ValoresMayorSeis[Numdiecinueve];}
        }
        
        $("#respuesta").append(" </br>");
        


        //Centenas de miles
        if (res6 === "" || res6=== 0) {	
        }else if(res6 ===1)
            {
                if (res5===0 && res4 ===0) {
                    $("#respuesta").append(" cien ");
                }else{
                    $("#respuesta").append(" ciento ");
                }
            }else if(res6===5){
                $("#respuesta").append(" quinientos ");
            }else{
                $("#respuesta").append(ValoresMenorNueve[res6]+" cientos ");
               
            }
        //Termina centenas

        // Termina centenas de Miles
       

        //decenas de miles
        if (res5 === "" || res5=== 0) {	

        }else if(res5 <= 1){
                    if (res4==0) {
                        $("#respuesta").append(ValoresMayorVeinte[res5]);
                    }
            }else{
                $("#respuesta").html(ValoresMayorVeinte[res5]);
                    if (res4>0) {
                        $("#respuesta").append(" y ");
                    }
            }
        //Termina decenas de miles

        // res6, res5, res4 , res3  res2 , res1

        //Unidad de Miles
        if (res4 == "" || res4== 0) {	
        }else if (res5===1) 
                {
                        if (res4 <=5 || res4 >1) {
                            $("#respuesta").append(ValoresMenorCinco[res4]);
                        }else{
                            var mayoDieciseis = decenasMayorSeis(ValoresMayorSeis, res4);
                            $("#respuesta").append(mayoDieciseis);
                        }
                }else{
                        if(res4===1){ 
                        }else{
                            $("#respuesta").append(ValoresMenorNueve[res4]);
                        }
                        
                    }


        if (res6 == "" && res5 == "" && res4 == "") {

            }else if(res6 !== "" ||res5 !== "" || res4 !== "" ){
                
                  
                    $("#respuesta").append(" mil ");
            }	
        //Termina Unidad de Miles



        //Centenas
        if (res3 == "" || res3== 0) {	
        }else if(res3 ==1){
                if (res2==0 && res1 ==0) {
                    $("#respuesta").append(" cien ");
                }else{
                    $("#respuesta").append(" ciento ");
                }
            }else if(res3==5){
                $("#respuesta").append(" quinientos ");
            }else{
                $("#respuesta").append(ValoresMenorNueve[res3]+" cientos ");
            }
        //Termina centenas


        //decenas
        if (res2 === "" || res2=== 0) {	

        }else if(res2 <= 1){
                    if (res1==0) {
                        //$("#respuesta").append(ValoresMayorVeinte[res2]);
                        var result = ValoresMayorVeinte[res2] ;
                        appendText(result);
                    }
            }else{
                //$("#respuesta").append(ValoresMayorVeinte[res2]);
                var result = ValoresMayorVeinte[res2] ;
                        appendText(result);
                    if (res1>0) {
                        var result =" y " ;
                        appendText(result);
                        //$("#respuesta").append(" y ");
                    }
            }
        //Termina decenas


        //unidades
        if (res1 == "" || res1== 0) {	
        }else if (res2===1) {
                    if (res1 <=5) {
                        //$("#respuesta").append(ValoresMenorCinco[res1]);
                        var result = ValoresMenorCinco[res1];
                        appendText(result);
                    }else{
                        var result = decenasMayorSeis(ValoresMayorSeis, res1);
                        appendText(result);
                        
                    }
            }else{
                var result = ValoresMenorNueve[res1];
                appendText(result,nlargo);
                //$("#respuesta").append(ValoresMenorNueve[res1]);
                }
        //Termina unidades		


        


      

       
    
    }); 

}); 



