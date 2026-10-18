<?php
declare(strict_types=1);

// 3.1 Constantes
define('SEMILLA_LAB8', 'WEB2026-L8');
const LAB_NUMERO = 8;
define('ZETA_LAB8', 'ok');

require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();
$cedula = $est['cedula'];

// 3.2 Valores únicos
$huella = hash('sha256', $cedula . '|' . SEMILLA_LAB8);
$codigo = substr($huella, 0, 8);
$n1 = (hexdec(substr($huella, 8, 2)) % 90) + 10;
$n2 = (hexdec(substr($huella, 10, 2)) % 90) + 10;
$precio = round(hexdec(substr($huella, 12, 4)) / 100, 2);
$activo = ($n1 % 2 === 0);

$suma = $n1 + $n2;
$division = round($n1 / $n2, 2);
$resto = $n1 % $n2;
$cociente = intdiv($n1, $n2);

$nulo = null;
$lista = [1, 2, 3];

// 3.3 Tipos de datos y conversión
var_dump($codigo, $n1, $precio, $activo, $nulo, $lista);

$suma_str = "5" + "10";
$concat = "5" . "10";
$cast_int = (int) "12abc";
$float_eq = (0.1 + 0.2 == 0.3);
$loose = ("10" == "1e1");
$strict = ("10" === "1e1");

// 3.4 Salida final
$tipos = [
    'codigo' => gettype($codigo),
    'n1' => gettype($n1),
    'precio' => gettype($precio),
    'activo' => gettype($activo),
    'nulo' => gettype($nulo),
    'lista' => gettype($lista),
];

$juggling = [
    'suma_str' => $suma_str,
    'concat' => $concat,
    'cast_int' => $cast_int,
    'float_eq' => $float_eq,
    'loose' => $loose,
    'strict' => $strict,
];

$redefinir = @define('SEMILLA_LAB8', 'otra');

$constantes = [
    'SEMILLA_LAB8' => constant('SEMILLA_LAB8'),
    'LAB_NUMERO' => LAB_NUMERO,
    'redefinir' => $redefinir,
];

$resultado = [
    'codigo' => $codigo,
    'n1' => $n1,
    'n2' => $n2,
    'suma' => $suma,
    'division' => $division,
    'resto' => $resto,
    'cociente' => $cociente,
    'precio' => $precio,
    'activo' => $activo,
    'tipos' => $tipos,
    'juggling' => $juggling,
    'constantes' => $constantes,
];

echo "\n##JSON## " . json_encode($resultado) . "\n";