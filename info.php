<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$usuarios = [[
    "Cedula" => 123432362,
    "Nombre" => "Ana ",
    "Apellido" => " Petro",
    "Direccion" => "calle 26n 36",
    "Telefono" => "036666",
    "Edad" => 36
],
[
    "Cedula" => 123124545,
    "Nombre" => "jesus ",
    "Apellido" => " Petro",
    "Direccion" => "Calle 62n 35-695",
    "Telefono" => "035555",
    "Edad" => 6
]
,
[
    "Cedula" => 13265512456,
    "Nombre" => "paola ",
    "Apellido" => " Petro",
    "Direccion" => "Calle 3512 n 66124mn",
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