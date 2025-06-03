<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones en php</title>
</head>
<body>
    <h1> FUNCIONES </h1>
    <p>Una funcionmes es un bloque de codigo que introduciomos en nuestra pagina y que puede ser utilizado a lo largo de de todo nuestro codigo php.
        la principal ventaja de las funciones es que nos permite ahorrar codigo 
    </p>
    <p> para definir funciones se emplea la sentencia function. Ejemplo: function suma ($) </p>
    <p> las funciones pueden recibir tantos arguemntos como sean necesario, se parandolos con comas.</p>

    <?php
        function sumar ($x, $Y)
        {
            $z  = $x + $Y;
            return $z;
        }
        
        //invoco o llamo la funcion sumar 
        $resultado = sumar(x: 5, Y: 12);
        echo "Resultado: ". $resultado;
           


    ?>
</body>
</html>