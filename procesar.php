<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Procesar los datos, como enviarlos por correo
    mail('paolagonzaleslobo87@gmail.com', 'Nuevo Mensaje de Contacto', "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje");

    echo "¡Mensaje enviado!";
}
?>

