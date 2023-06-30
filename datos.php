<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados desde el formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Realizar acciones con los datos recibidos (por ejemplo, guardarlos en una base de datos, enviar un correo electrónico, etc.)
    // En este ejemplo, simplemente los mostraremos en pantalla
    echo "Nombre: " . $name . "<br>";
    echo "Correo electrónico: " . $email . "<br>";
    echo "Mensaje: " . $message . "<br>";
}
?>
