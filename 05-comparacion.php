<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

//Con las siguientes sintaxis podremos mostrar si los números son mayores, iguales, mayor o igual, menor o igual
var_dump($numero1 > $numero2);
echo "<br/>";
var_dump($numero1 < $numero2);
echo "<br/>";
var_dump($numero1 >= $numero2);
echo "<br/>";
var_dump($numero1 <= $numero2);
echo "<br/>";

//Con este doble signo == solo va a revisar si los valores son iguales
var_dump($numero3 == $numero4);
echo "<br/>";
//Con este triple signo === va a revisar el valor y el tipo de dato siendo este mas estricto
var_dump($numero3 === $numero4);
echo "<br/>";

//Este operador nos va a retornar -1 si es menor el de la izquierda 
var_dump($numero1 <=> $numero2);
echo "<br/>";
//Nos dará 0 si es igual 
var_dump($numero2 <=> $numero2);
echo "<br/>";
//Y 1 vi el valor de la izquierda es mayor
var_dump($numero2 <=> $numero1);

















include 'includes/footer.php';