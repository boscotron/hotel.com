<?php
echo "<br><br>";
    echo "Desde archivo<b> back.php </b><br><br>";
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $selecciono = $_POST['selecciono'];

    echo "Hola tus datos son ";
    echo "<br><br>";
    echo "<b>Tu email es :</b> "." ".$email;
    echo "<br>";
    echo "<b>Tu nombre es :</b> "." ".$nombre;
    echo "<br>";
    echo "<b>Tu direccion es :</b> "." ".$direccion;
    echo "<br>";
    echo "<b>Tu ciudad es :</b> "." ".$ciudad;
    echo "<br>";
    echo "<b>Tu estado es :</b> "." ".$selecciono;
    echo "<br>";
?>