<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Juan", "Maria");
//Empty 
//Es una forma de ver si el arreglo esta vació o no
//Verdadero si esta vació, falso si no lo esta
var_dump( empty($clientes));
var_dump( empty($clientes3));
echo "<br>";

//Inset
//Revisa si un arreglo esta creado o una propiedad esta definida

var_dump(isset($clientes4));




include 'includes/footer.php';