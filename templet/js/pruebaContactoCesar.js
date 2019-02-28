$(document).ready(function(){


	$('#enviarC').click(function(){
		var nombre = document.getElementById('nombre').value;
		var email = document.getElementById('email').value;
		var telefono = document.getElementById('telefono').value;
		var telefono1 = document.getElementById('telefono1').value;
		var mensage = document.getElementById('mensage').value;

		alert("Tus datos han sido guardados con exito: "+"\n" +nombre+"\n"+email+"\n"+telefono+"\n"+telefono1+"\n"+mensage);


		console.log("Funcion borrar");
		$('#nombre').empty('nombre');
			

		/*$ajax({
			url:location.origin + '/pruebaContactoCesar1ws',
   			type:'POST',
    		dateType: 'json',
    		data: {nombre:nombre, email:email, telefono:telefono, mensage:mensage},

		});*/





	});
});