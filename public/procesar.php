<?php
declare(strict_types=1);
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

// Tu punto ciego: Validar que sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acceso no permitido.");
}

// Sanitizar para evitar XSS
$nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$edad = (int) $_POST['edad'];
$mensaje = htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesado - Lab 8</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    <p>Estudiante: <?php echo $est['nombre'] . ' ' . $est['apellido']; ?></p>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Edad: <?php echo $edad; ?></p>
    <p>Mensaje: <?php echo $mensaje; ?></p>
    <a href="formulario.php">Volver</a>
</body>
</html>