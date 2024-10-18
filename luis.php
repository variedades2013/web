<?php
if ($_POST) {
    // Recibir información Método POST
    $nombre = $_POST['txtNombre']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($nombre); // Usar htmlspecialchars para evitar problemas de seguridad
    $apellido = $_POST['txtapellido']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($apellido); // Usar htmlspecialchars para evitar problemas de seguridad
    $telefono = $_POST['txttelefono']; // Cambié $_POS por $_POST
    echo " " . htmlspecialchars($telefono); // Usar htmlspecialchars para evitar problemas de seguridad
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <div class="container">
    <form action="luis.php" method="post">
        <b>Nombre:</b>
        <input type="text" name="txtNombre" id="we">
        <br/>
        <b>Apellido:</b>
        <input type="text" name="txtapellido" id="we">
        <br>
        <b>Teléfono:</b>
        <input type="text" name="txttelefono" id="we">
        <br>
        <input type="submit" value="Enviar" class="boton">
    </form>
    </div>
</center>
</body>
</html>