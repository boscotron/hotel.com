<?php 
$habitacion= $_POST['habitacion'];
$familia= $_POST['familia'];
$personas= $_POST['personas'];

echo "desde juanws";


if($_POST['pruebajc']!=''){
    $var ["pruebajc"]=$jmy->ver([
        "TABLA"=>"pruebajc",
        "ID"=>$_POST['pruebajc'],
        "COL"=>["habitacion","personas","familia"], 
    ]);
}


if(count($_POST)>0){
    $var["ID"]=($_POST['ID']!='')?$_POST['ID']:uniqid();
    if($_POST['habitacion']!='' && $_POST['personas']!=''&& $_POST['familia']!=''){
        //$var ["guardar"]=
        $jmy->guardar([
            "TABLA"=>"pruebajc",
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
    "TABLA"=>"pruebajc",
    "ID"=>$_POST['ID'],
   "COL"=>["habitacion","personas","familia"],   
]);
 

$var["post"]=$_POST;

echo "desde ws";
echo json_encode(
    ["POST"=>$_POST,/* "GET"=>$_GET,"var"=>$var */]
);


?>