<?php include 'includes/header.php';

$carrito = ["Tablet" ,"Teléfono", "Television"];

//in_array buscar elementos en un arreglo
var_dump(in_array("Tablet", $carrito));
var_dump(in_array("Audífonos", $carrito));

//Ordenar elementos de un arreglo
$numero = array(1,5,9,46,3,5,58,12);
sort($numero);//de menor a mayor
rsort($numero);//de mayor a menor 
echo "<pre>";
var_dump($numero);
echo "</pre>";


//Ordenar arreglo asociativo
$clientes = [
    "saldo" => 200,
    "tipo" => "Premium",
    "nombre" => "Juan"
];
echo "<pre>";
var_dump($clientes);
echo "</pre>";

asort($clientes);//Ordena por valores (números y luego orden alfabético)
ksort($clientes);//Ordena por llaves (números y luego orden alfabético)



echo "<pre>";
var_dump($clientes);
echo "</pre>";
include 'includes/footer.php';