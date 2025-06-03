<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manioulacion de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>funcion substr()</h2>

    <?php
    //Extrae una parte de la cadena 

    $texto = "Hola mundo";
    $subcadena = substr($texto, 5); // Desde la posición 5 hasta el final
    echo $subcadena; // Resultado: "mundo"

    ?>

    <h2>funcion ord()</h2>

    <?php
    // Devuelve el valor ASCII de un carácter
    $caracter = "A";
    $ascii = ord($caracter);
    echo $ascii; // Resultado: 65

    ?>

    <h2>Funcion printf()</h2>

    <?php
    // Imprime una cadena con formato
    $nombre = "Ana";
    $edad = 30;
    printf("Hola, mi nombre es %s y tengo %d años.", $nombre, $edad);
    // Resultado: Hola, mi nombre es Ana y tengo 30 años.

    ?>

    <h2>Funcion sprintf()</h2>
    
    <?php
    //Devuelve una cadena con formato (no la imprime directamente
    $precio = 10.5;
    $texto = sprintf("El precio es: $%.2f", $precio);
    echo $texto; // Resultado: El precio es: $10.50

    ?>

    <h2>Funcion strtolower()</h2>
    <?php
    // Convierte una cadena a minúscula
    $texto = "HOLA MUNDO";
    $minusculas = strtolower($texto);
    echo $minusculas; // Resultado: hola mundo

    ?>

    <h2>Funcion strtoupper</h2>
    <?php
    // Convierte una cadena a mayúsculas
    $texto = "hola mundo";
    $mayusculas = strtoupper($texto);
    echo $mayusculas; // Resultado: HOLA MUNDO

    ?>

    <h2>funcion ereg()</h2>
    <?php

   $cadena = "Hola123";

   // Verifica si la cadena contiene al menos un número
   if (preg_match("/[0-9]+/", $cadena)) 
   {
       echo "Contiene números.";
   } 
   else 
   {
       echo "No contiene números.";
   }
   // Resultado: Contiene números.
   
   ?>
    

    <h2>funcion eregi()</h2>
    <?php
    //Igual que ereg(), pero insensible a mayúsculas/minúsculas.   
    $cadena = "Hola";
    if (preg_match("/hola/i", $cadena)) 
    {
        echo "Coincidencia encontrada.";
    }
    
    ?>

</body>
</html>