<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes procesar los datos, como enviarlos por correo electrónico o guardarlos en una base de datos.
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Correo: " . htmlspecialchars($correo) . "<br>";
    echo "Mensaje: " . htmlspecialchars($mensaje) . "<br>";

    // Ejemplo de redirección a una página de agradecimiento.
    // header('Location: gracias.html');
} else {
    echo "Método no permitido.";
}
?>
