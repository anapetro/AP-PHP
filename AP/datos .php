<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$usuarios = [[
    "Cedula" => 1234,
    "Nombre" => "Saul rivera",
    "Direccion" => "calle sin salida",
    "Telefono" => "036666",
    "Edad" => 36
],
[
    "Cedula" => 12345,
    "Nombre" => "Ashley rivera",
    "Direccion" => "Calle llena de vida",
    "Telefono" => "035555",
    "Edad" => 6
]
,
[
    "Cedula" => 123456,
    "Nombre" => "Jimena villadiego",
    "Direccion" => "Calle sin vida",
    "Telefono" => "034444",
    "Edad" => 25
]];

$json= json_encode($usuarios);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $usuarios = ["message"=>"Metodo $method no permitido" ];
    $json= json_encode($usuarios);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>