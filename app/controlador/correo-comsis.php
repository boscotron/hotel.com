<?php
function correo_comsis($d=[]){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://comsis.mx/api/oka/mail/ws.php');
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,["datos"=>base64_encode(json_encode($d))]);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $r= curl_exec($ch);
    $o['outa'] = $r;
    $o['out'] = json_decode($r,1);
    curl_close($ch);
    return $o;
}
$out = correo_comsis([
    "user"=>"CorreosJuan", 
    "password"=>"0lakace", 
    "nombre"=>"Juanito", 
    "email"=>"jm@comsis.mx", 
    "telefono"=>"5529056979", 
    "asunto"=>"Hola k ace ".date("Y-m-d"), 
    "mensaje"=>"TEST", 
    "destinatario"=>"juanmtz1988@gmail.com", 
    "smtpHost"=>"mail.comsis.mx", 
    "smtpUsuario"=>"no-reply@comsis.mx", 
    "smtpClave"=>"", 
    "port"=>"25"
]);
$jmyWeb ->pre(['p'=>$out,'t'=>'Estado correo']);
?>