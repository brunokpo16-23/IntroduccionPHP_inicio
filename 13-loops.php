<?php include 'includes/header.php';

// while 
//Sirve para correr nuestro código hasta que nuestra condición sea evaluada como verdadera o falsa
//Este primero revisa la condición y luego ejecuta el código 
$i = 0; //Inicializador

while ($i <= 10) {

    echo $i . "<br>";

    $i++;
}
echo "<br>";

//Do while
// while 
//Sirve para correr nuestro código hasta que nuestra condición sea evaluada como verdadera o falsa
//Este primero ejecuta el código y luego revisa la conexión 
$i = 0;

do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);
echo "<br>";

//For Loop 
//Sirve para correr nuestro código hasta que nuestra condición sea evaluada como verdadera o falsa
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";

//For Each
//Sirve para recorrer arreglos
$arreglo1 = [
    "Bruno",
    "Juan",
    "Luz",
    "Luciano"
];

foreach ($arreglo1 as $arreglo2) {
    echo $arreglo2 . "<br>";
}

//For Each con arreglos asociativos
$clientes = [
    "nombre" => "Bruno",
    "saldo" => 500,
    "tipo" => "Premium"
];

foreach($clientes as $key => $valor):
echo $key . "-" . $valor . "<br>";
endforeach;






include 'includes/footer.php';
