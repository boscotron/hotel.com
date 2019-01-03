<?php 

$jmyWeb->cargar(["pagina"=>"contacto"]); //Carga de datos de la pagina
$jmyWeb ->cargar_js(["url"=>$jmyWeb ->url_templet(["return"=>true])."js/contacto.js"]);
$jmyWeb->cargar_js(["url"=>"../app/js/jmy/contacto.js"]); // carga de funciones de cotnacto
 
$jmyWeb ->cargar_vista(["url"=>"contacto.php"]);

?>