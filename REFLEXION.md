# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
Mi $codigo es 2542c567 y, aunque parezca un número, gettype() me confirma que es un string. Esto pasa porque lo generé usando substr(), una función que corta texto y siempre devuelve cadenas, sin importar si el resultado solo tiene números. Mi punto ciego sería tratar de sumarlo: si intento hacer $codigo + 5, PHP lo coerciona a 0 o falla en modo estricto, porque no es un entero válido.

## Pregunta 2

Cuando revisé $precio con gettype(), me salió double en vez de float. Es un detalle histórico de PHP por herencia de C, internamente son lo mismo. Sobre 0.1 + 0.2 == 0.3 siendo false, es un problema de hardware: las PCs no guardan decimales exactos en binario y hay una pérdida de precisión minúscula. Por otro lado, $n1 es un integer. La diferencia con la división normal (/) es que intdiv() descarta los decimales y te da solo la parte entera del cociente.


## Pregunta 3

La diferencia entre define() y const es de tiempo de ejecución: const se define en tiempo de compilación y exige un valor escalar fijo, mientras que define() corre en tiempo de ejecución y permite valores dinámicos. Cuando intenté redefinir SEMILLA_LAB8 con @define(), el resultado fue false, porque PHP protege las constantes y no permite sobrescribirlas. Todo esto lo validé en mi entorno local corriendo PHP 8.2.12 sobre el servidor web Apache 2.4.58.