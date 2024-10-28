<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comentarios</title>
    <link rel="stylesheet" href="comentario.css">
</head>
<body>

<div class="comment-section">
    <h2>Deja un Comentario</h2>
    
    <!-- Formulario para enviar comentarios -->
    <form action="" method="POST" class="comment-form">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <textarea name="comentario" placeholder="Escribe tu comentario aquí..." required></textarea>
        <button type="submit" name="submit">Enviar Comentario</button>
    </form>

    <!-- Mostrar comentarios -->
    <div class="comments">
        <h3>Comentarios:</h3>
        <?php
        // Archivo de comentarios
        $file = "comentarios.txt";

        // Guardar el comentario en el archivo
        if (isset($_POST['submit'])) {
            $nombre = htmlspecialchars($_POST['nombre']);
            $comentario = htmlspecialchars($_POST['comentario']);
            $nuevo_comentario = "<strong>$nombre</strong>: $comentario\n";
            file_put_contents($file, $nuevo_comentario, FILE_APPEND);
        }

        // Leer y mostrar los comentarios guardados
        if (file_exists($file)) {
            $comentarios = file($file);
            foreach ($comentarios as $c) {
                echo "<div class='comment'>$c</div>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
