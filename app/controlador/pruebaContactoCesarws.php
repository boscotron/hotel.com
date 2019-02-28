<?php 

if($_POST['pruebacesarcontacto']!=''){
    $var ["pruebacesarcontacto"]=$jmy->ver([
        "TABLA"=>"pruebacesarcontacto",
        "ID"=>$_POST['pruebacesarcontacto'],
        "COL"=>["nombre","email","telefono","telefono1","mensaje"], 
    ]);
}


if(count($_POST)>0){
    $var["ID"]=($_POST['ID']!='')?$_POST['ID']:uniqid();
    if($_POST['nombre']!='' && $_POST['email']!=''&& $_POST['telefono']!=''&& $_POST['telefono1']!=''&& $_POST['mensaje']!=''){
        //$var ["guardar"]=
        $jmy->guardar([
            "TABLA"=>"pruebacesarcontacto",
            "ID"=>$_POST['ID'],
            //"A_D"=>TRUE,
            "FO"=>TRUE,
            "GUARDAR"=>$_POST 
                    
            ]);
        }else{
            $var['error'][]="Faltan campos nombre, precio,proveedor para guardar";
        }
    }

$var ["ver"]=$jmy->ver([
    "TABLA"=>"pruebacesarcontacto",
    "ID"=>$_POST['ID'],
   "COL"=>["nombre","email","telefono","telefono1","mensaje"],   
]);
 

$var["post"]=$_POST;

echo "desde ws";
echo json_encode(
    ["POST"=>$_POST,/* "GET"=>$_GET,"var"=>$var */]
);


?>