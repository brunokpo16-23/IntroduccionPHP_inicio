<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Juan",
    "Saldo" => 200,
    "Información" => [
        "tipo" => "Premium"
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente ["nombre"];
echo "<br>";

//Acceder a arreglos dentro de arreglos 
echo $cliente ["Información"]["tipo"];


include 'includes/footer.php';
