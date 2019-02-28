<?php 

if($_POST['pruebacesar']!=''){
    $var ["pruebacesar"]=$jmy->ver([
        "TABLA"=>"pruebacesar",
        "ID"=>$_POST['pruebacesar'],
        "COL"=>["email","password","direccion","direccion2","ciudad","estado"], 
    ]);
}


if(count($_POST)>0){
    $var["ID"]=($_POST['ID']!='')?$_POST['ID']:uniqid();
    if($_POST['email']!='' && $_POST['password']!=''&& $_POST['direccion']!=''&& $_POST['direccion2']!=''&& $_POST['ciudad']!=''&& $_POST['estado']!=''){
        //$var ["guardar"]=
        $jmy->guardar([
            "TABLA"=>"pruebacesar",
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
    "TABLA"=>"pruebacesar",
    "ID"=>$_POST['ID'],
   "COL"=>["email","password","direccion","direccion2","ciudad", "estado"],   
]);
 

$var["post"]=$_POST;

echo "desde ws";
echo json_encode(
    ["POST"=>$_POST,/* "GET"=>$_GET,"var"=>$var */]
);


?>
