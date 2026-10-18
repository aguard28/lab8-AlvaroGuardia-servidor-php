<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Lab 8</title>
</head>
<body>
    <h1>Formulario de Prueba</h1>
    <form action="procesar.php" method="POST">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Edad: <input type="number" name="edad" min="18" required></label><br>
        <label>Mensaje: <textarea name="mensaje" required></textarea></label><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>