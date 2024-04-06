<?php include 'includes/header.php';

$nombreCliente = "  Bruno Spinsanti  ";

//Conocer extension de string 
echo strlen($nombreCliente);
echo "<br/>";
var_dump($nombreCliente);
echo "<br/>";

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br/>";

//Convertir a mayúsculas
echo strtoupper($nombreCliente);
echo "<br/>";

//Convertir a minúsculas
echo strtolower($nombreCliente);
echo "<br/>";

//Modificar el valor de una variable 
echo str_replace("Bruno", "B", $nombreCliente);
echo "<br/>";

//Revisar si un string existe o no 
echo strpos($nombreCliente, "Bruno");
echo "<br/>";

//Template strings o concatenar 
$tipoCliente = "Premium";
echo "El cliente" . $nombreCliente . "es" . $tipoCliente;






include 'includes/footer.php';