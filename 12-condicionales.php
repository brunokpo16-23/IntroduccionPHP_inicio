<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado && $admin) {
    echo "El usuario a sido autenticado correctamente";
} else {
    echo "Usuario no autenticado, iniciar sesión";
}
echo "<br>";

//If anidados
$clientes = [
    "nombre" => "Bruno",
    "saldo" => 159700,
    "información" => [
        "tipo" => "admin"
    ]
];

if (!empty($clientes)) {
    echo "El Arreglo de cliente no esta vació";
    echo "<br>";
    if ($clientes["saldo"] > 0) {
        echo "El Saldo del cliente esta disponible";
    } else {
        echo "No hay saldo";
    }
};
echo "<br>";
//else if
if ($clientes["saldo"] > 0) {
    echo "El Cliente tiene saldo";
} else if ($clientes["información"]["tipo"] === "admin") {
    echo "El cliente es admin";
} else {
    echo "No hay cliente definido o no es usuario admin";
};
echo "<br>";

//Switch
//Mientras mas condiciones tengas es mas fácil usar esta forma 

$tecnologias = "HTML";

switch ($tecnologias) {
    case "PHP":
        echo "PHP, El mejor lenguaje";
        break;
    case "JavaScript":
        echo "JavaScript, un buen lenguaje";
        break;
    case "HTML":
        echo "HTML, es una buena forma de comenzar a aprender";
        break;
}

include 'includes/footer.php';
