
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Definir el correo destinatario
    $destinatario = "paolagonzaleslobo87@gmail.com"; // Cambia esto por tu correo

    // Asunto del correo
    $asunto = "Nuevo Mensaje de Contacto";

    // Cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "¡Mensaje enviado exitosamente!";
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
}
?>


