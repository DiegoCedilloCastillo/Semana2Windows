<?php
// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de usuario y contraseña
    $usuario_correcto = "Diego";
    $contraseña_correcta = "contraseña";

    // Obtener datos del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Verificar si las credenciales son correctas
    if ($usuario == $usuario_correcto && $contraseña == $contraseña_correcta) {
        // Redireccionar a la página de éxito con el nombre de usuario como parámetro GET
        header("Location: mensaje.php?usuario=" . urlencode($usuario));
        exit;
    } else {
        $mensaje_error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body style="background-color: #f0f0f0;">
    <h2 style="color: #007bff;">Iniciar Sesión</h2>
    <?php if(isset($mensaje_error)) { ?>
        <p style="color: #ff0000;"><?php echo $mensaje_error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="usuario" style="color: #333;">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <div>
            <label for="contraseña" style="color: #333;">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <div>
            <button type="submit" style="background-color: #007bff; color: #fff;">Iniciar Sesión</button>
        </div>
    </form>
</body>
</html>
