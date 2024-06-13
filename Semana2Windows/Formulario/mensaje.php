<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado un nombre de usuario
    $usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'Usuario';
    ?>
    <h2 style="color: green;">¡Has ingresado, <?php echo $usuario; ?>!</h2>
</body>
</html>
