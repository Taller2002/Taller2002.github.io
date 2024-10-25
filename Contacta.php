<?php
if ($_POST) {
    // Recibir información Método POST
    $nombre = $_POST['txtNombre']; // Cambié $_POS por $_POST
    echo "Hola " . htmlspecialchars($nombre); 
    $apellido = $_POST['txtapellido']; // Cambié $_POS por $_POST
    
    echo " " . htmlspecialchars($apellido);// Usar htmlspecialchars para evitar problemas de seguridad
    $emai = $_POST['txtemail']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($email);
    $DNI = $_POST['txtDNI']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($DNI);
    $emai = $_POST['txtTELOFONO']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($telefono);
    $emai = $_POST['txtciudad']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($ciudad);
    


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
          <a href="index.html">Inicio</a>
          <a href="Acercade.html">Acerca de</a>
          <a href="Referencia.html">Referencia</a>
          <a href="Servicios.html">Servicios</a>
          <a href="Contacta.php">Contacto</a>
    
        </nav>
        <section class="texto-header">
          <h1>Taller de Soldadura El Shaday</h1>
          <h2>Forjando Calidad, Soldanto Confianza</h2>
    
    
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-33.57,99.00 C-2.54,13.14 349.20,-49.98 504.22,62.48 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #FFFFFF;"></path></svg></div>  </header>
    </header>

    <h2 class="titulo">¿Está interesado en nuestros servicios?
        ¡Estamos aquí para ayudar!</h2> 


    <div class="container">
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <br>
        Apellido:
        <input type="text" name="txtapellido" id="">
        <br/>
        <br>
        Email:
        <input type="text" name="txtemail" id="">
        <br/>
        <br>
        DNI:
        <input type="text" name="txtDNI" id="">
        <br/><br>
        Telefono:
        <input type="text" name="txttelefono" id="">
        <br/><br>
        Ciudad:
        <input type="text" name="txtciudad" id="">
        <br/><br>
        

        <input type="submit" value="Enviar">
    </form>
    </div>

    <br><br><br>
    <div class="banner">
        <h1>Estructuras Metálicas El Shaday</h1>
        <p>Horario: Lunes a Sábado de 8:00 AM a 4:00 PM</p>
        <p>Lugar: Barrio el Calvario <br>
        El paraíso,El paraíso , Honduras </p>
        <a href="tel:504 97006669" class="contact">Contáctanos:  9700 6669</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>