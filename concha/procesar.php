<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h2>Información procesada</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campos = array_keys($_POST);

        echo "<table>";
        echo "<tr><th>Campo</th><th>Valor</th></tr>";

        $lastname = $_POST['lastname'];
        echo "<tr><td>Apellidos</td><td>$lastname</td></tr>";
        $name = $_POST['name'];
        echo "<tr><td>Nombre</td><td>$name</td></tr>";
        $mail = $_POST['mail'];
        echo "<tr><td>Dirección de correo electrónico</td><td>$mail</td></tr>";
        $country = $_POST['country'];
        echo "<tr><td>País</td><td>$country</td></tr>";
        $phone = $_POST['phone'];
        echo "<tr><td>Teléfono móvil</td><td>$phone</td></tr>";
        $category = $_POST['category'];
        echo "<tr><td>Categoría seleccionada</td><td>$category</td></tr>";
        $order = $_POST['order'];
        echo "<tr><td>Pedido</td><td>$order</td></tr>";
        $message = $_POST['message'];
        echo "<tr><td>Mensaje</td><td>$message</td></tr>";
        $file = $_POST['file'];
        echo "<tr><td>Archivo adjunto</td><td>$file</td></tr>";

        echo "</table>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

</body>
</html>