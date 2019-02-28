<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css" media="screen">
	<link rel="stylesheet" type="text/css" href="templet/css/scesar.css" media="screen">
	<script type="main.js"></script>

	<script  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

	
</head>
<body>
	<br><br><br><br><br><br><br><br>

	
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="1234 Calle principal">
  </div>
  <div class="form-group">
    <label for="direccion2">Dirección 2</label>
    <input type="text" class="form-control" id="direccion2" placeholder="Departmento, estudio, otro">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="ciudad">Ciudad o Pais</label>
      <select id="ciudad" class="form-control">
        <option selected>Escojer</option>
        <option>Mexico</option>
        <option>Dubai</option>
        <option>Canada</option>
        <option>Alemania</option>
        <option>España</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select id="estado" class="form-control">
        <option selected>Escojer</option>
        <option>Monterrey</option>
        <option>Puebla</option>
        <option>Mexico</option>
        <option>Guadalajara</option>
        <option>Cancun</option>
      </select>
    </div>
    
  </div>

<br><br>
	
	<h1>Pon tu numero a traducir</h1>
    <input type="text" onkeyup="mostrarNumero(this)"><br>
    <p> tu numero en letra es:</p>
    <div id="mostrarAca"></div>
    <p id="mostrarAca"></p>

  <br><br>
  
  <button type="button" class="btn btn-primary" id="enviar">Registrarse</button>
</form>





































<!--<p>Preciona el boton de la operacion <br>que quieras hacer </p>
<button id="hsuma">Click para hacer una suma</button><br><br>

<div id="Suma" style="display:none;" class="col-md-6">
					<div class="col-md-6">
						<input type="text" name="num1" type="text" id="num1" placeholder="Primer Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="num2" type="text" id="num2" placeholder="Segundo Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="num3" type="text" id="num3" placeholder="Tercer Numero">
					</div><br>
					<button type="button" id="sumar"> Sumar</button><br><br>
					<div class="col-md-6">
						<input type="text" name="resul" type="text" id="resul" placeholder="El resultado de la operación es?">
					</div><br><br>
					<button class="btn btn-warning" id="ocultar">Ocultar suma</button>
</div><br>


<button id="hresta">Click para hacer una resta</button><br><br>

<div id="Resta" style="display:none;">
					<div class="col-md-6">
						<input type="text" name="nume1" type="text" id="nume1" placeholder="Primer Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="nume2" type="text" id="nume2" placeholder="Segundo Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="nume3" type="text" id="nume3" placeholder="Tercer Numero">
					</div><br>
					<button type="button" id="resta"> Restar</button><br><br>
					<div class="col-md-6">
						<input type="text" name="resulta" type="text" id="resulta" placeholder="El resultado de la operación es?">
					</div><br><br>
					<button class="btn btn-warning" id="ocultar1">Ocultar resta</button>
</div><br>


<button id="hmulti">Click para hacer una multiplicación</button><br><br>

<div id="Multi" style="display:none;">
					<div class="col-md-6">
						<input type="text" name="numer1" type="text" id="numer1" placeholder="Primer Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="numer2" type="text" id="numer2" placeholder="Segundo Numero">
					</div><br>
					<div class="col-md-6">
						<input type="text" name="numer3" type="text" id="numer3" placeholder="Tercer Numero">
					</div><br>
					<button type="button" id="multi"> Multiplicar</button><br><br>
					<div class="col-md-6">
						<input type="text" name="resultad" type="text" id="resultad" placeholder="El resultado de la operación es?">
					</div><br><br>
					<button class="btn btn-warning" id="ocultar2">Ocultar multiplicación</button>
</div><br>



<button class="btn btn-warning" id="ocultar3">Ocultar operación</button>-->

</body>
</html>