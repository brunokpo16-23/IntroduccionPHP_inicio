<?php include 'includes/header.php';

//Arreglos indexados
$carrito = ["Tablet", "Television", "Celular"];

//Acceder a un elemento del arreglo
echo $carrito[1];

//Agregar un nuevo elemento en el lugar 3
$carrito[3] = "Nuevo proyecto";

//Añadir un nuevo elemento al final...
array_push($carrito, "Audífonos");

//Añadir un nuevo elemento al principio..
array_unshift($carrito, "Patinete");

//Mostrar mejor formato los arreglos
echo "<pre>";
var_dump($carrito);
echo "</pre>";
include 'includes/footer.php';