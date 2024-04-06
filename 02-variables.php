<?php include "includes/header.php";

$nombre = "Juan";

echo $nombre; //Este solo muestra el nombre. Este lo vamos a utilizar si queremos imprimir un resultado 

var_dump($nombre);// Mientras que este te muestra mucha mas información de la variable 

define("constante", "Este es el valor de la constante");//Esta es una variable que no se puede reasignar

echo constante;//Con esta podremos mostrar los valores de las constantes que tienen un define






























include "includes/footer.php";