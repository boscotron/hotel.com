<?php

$datos = $_POST["d"];

if(is_array($datos)){

	$html = "Se registro un nuevo contacto: <br>";
	for ($i=0; $i <count($datos) ; $i++) { 
		$html = $html."<br> ".$datos[$i]['campo'].": ".$datos[$i]['valor'];
	}

	$to      = 'juancarlos@comsis.mx';
	$subject = "Nuevo contacto" ;
	$header = "From: noreply@templet.comsis.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
	$header.= "X-Priority: 1\r\n"; 

	mail($to, $subject, $html, $header);
	$out['html']=$html;
}	
 


echo json_encode([
	"OUT"=>$out,
	"POST"=>$_POST,
	"GET"=>$_GET,
	"REQUEST"=>$_REQUEST
]);
?> 