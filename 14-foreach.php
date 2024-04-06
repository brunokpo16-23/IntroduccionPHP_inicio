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

//Con esta forma iteramos en los arreglos 
// Estos símbolos <?php Y ? >  empiezan y terminan las funciones de php 
//Esto se utiliza para no estar usando recursos de php de mas y utilizar los del navegador
foreach($productos as $producto) { ?>
<li>
    <p>Producto: <?php echo $producto["nombre"]; ?> </p>
    <p>Precio: <?php echo "$" . $producto["precio"]; ?> </p>
    <p>Producto: <?php echo ($producto["disponibilidad"]) ? "Disponible" : "Sin Stock"; ?> </p>
</li>
<?php
}





include 'includes/footer.php';
