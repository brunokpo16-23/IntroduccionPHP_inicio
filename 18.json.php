<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Television 42 pulgadas",
        "precio" => 1500,
        "disponibilidad" => true
    ],

    [
        "nombre" => "Celular Samsung",
        "precio" => 1200,
        "disponibilidad" => true
    ],

    [
        "nombre" => "Monitor curvo 32 pulgadas",
        "precio" => 800,
        "disponibilidad" => false
    ]
];

echo "<pre>";
var_dump($productos);
//El json_encode sirve para convertir un arreglo en un string para que lo podamos leer con otras lenguajes como js, angular, react, etc 
//También funciona si estamos creando una aplicación para Movil 
$json = json_encode($productos);
//El json_decode sirve para convertir un string en un arreglo 
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';