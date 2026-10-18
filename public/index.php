<?php
// 1. Cargar los datos de estudiante.json
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

# 2. Configurar la zona horaria para Panamá
date_default_timezone_set('America/Panama');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - <?php echo $est['apellido']; ?></title>
</head>
<body>
    <?php
    /* 
       3. Bloque de comentarios de bloque.
       Aquí imprimimos el encabezado principal.
    */
    ?>
    
    <!-- 4. Etiqueta HTML para el nombre completo -->
    <h1><?php echo $est['nombre'] . ' ' . $est['apellido']; ?></h1>
    
    <!-- 5. Mostrar la versión de PHP usando print -->
    <p>Versión de PHP: <?php print PHP_VERSION; ?></p>
    
    <!-- 6. Mostrar la fecha y hora actual -->
    <p>Fecha y hora: <?php echo date('d/m/Y H:i'); ?></p>
    
    <?php
    // 7. Comentario de línea simple de prueba
    # 8. Otro comentario de línea simple de prueba
    ?>
</body>
</html>