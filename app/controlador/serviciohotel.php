
<?php 

$jmyWeb->cargar(["pagina"=>"serviciohotel"]);
$jmyWeb ->cargar_js(["url"=>$jmyWeb ->url_templet(["return"=>true])."js/serviciohotel.js"]);
$jmyWeb ->cargar_vista(["url"=>"serviciohotel.php"]);

?>