# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1

Mi código personal es bc0ccdb4. Según gettype es un string, porque substr siempre devuelve texto, aunque los caracteres parezcan números o letras hexadecimales. Si lo usara en una suma, PHP intentaría convertirlo a número y, como empieza con letras, daría un error de tipo o un resultado sin sentido. Por eso este código sirve como identificador, no para operar con él.

## Pregunta 2

El precio aparece como double en gettype() porque, en PHP, float y double son el mismo tipo y gettype() conserva el nombre histórico double, mientras que var_dump() lo muestra como float. La comparación 0.1 + 0.2 == 0.3 da false porque los decimales se guardan en binario y la suma real es 0.30000000000000004. Mi n1 es de tipo integer (20). La función intdiv devuelve solo la parte entera de la división, por eso me dio 0, mientras que el operador / devolvió un decimal (0.83).

## Pregunta 3

La diferencia entre define() y const es que define() se ejecuta en tiempo de ejecución y recibe el nombre como texto, así que se puede usar dentro de condiciones, mientras que const se resuelve al compilar y va en el nivel principal del archivo. En ambos casos el valor no se puede cambiar después. Al intentar redefinir SEMILLA_LAB8 con @define obtuve false, porque la constante ya existía. Lo probé con PHP 8.2.12 sobre Apache 2.4.58 en Windows 11.
