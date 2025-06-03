<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>

    <h2>Aritmeticos</h2>

    <?php
        $x = 9;
        $Y = 3;
        $z = 5;

        $suma = $x + $Y;
        $resta = $x - $z;

        echo" la suma es: ". $suma;

    ?>

    <h2>De comparacion</h2>

    <?php
    $x = 9;
    $Y = 3;

    echo ($x == $Y);
    
    ?>

    <h2>Logicos</h2>

    <?php
        $x = 9;
        $Y = 3;

        if( $x == 9 && $Y == 3)
        { 
            echo "Estas en lo correcto "
        } 
        
    ?>

<h2>De union de cadenas</h2>

<?php
    $nombre = "Angelica";
    $apellidos = "Rodriguez";

    $nombre_completo = $nombre. " ".$apellidos;

    echo $nombre_completo


?>
</body>
</html>