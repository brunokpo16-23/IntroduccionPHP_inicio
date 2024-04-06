<?php

declare(strict_types=1); //Con esto podremos asegurarnos que le estamos colocando los aumentos correctos a nuestras funciones
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0)
//Con el int delante del nombre aremos que solo detecte números enteros, también lo podremos cambiar por los siguientes tipos de datos:
//arrays, float, bool.
{  //Entre los () van los parámetros
    //Al agregarle = 0 le estamos agregando parámetros por default, en caso de que falte algún paramento va a tomar los que le coloquemos por default
    echo $numero1 + $numero2;
};


sumar(10, 30); //Dentro de estos () van los argumentos 
echo "<br>";
sumar(25);

include 'includes/footer.php';
