<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en PHP</title>
</head>
<body>
    <h1>Variables y constantes en PHP</h1>
    <?php
        //Las variables se representa exponiendo el simbolo $ a la palabra que se use como variable
        //PHP es sensitive case
        //Las variables no pueden empezar con un numero 
        //En php no es necesario especificar el tipo de variable, pero si se debe saber cuando utilizar las comillas, para el caso de variables de tipo cadena o string

        //Asignamos a la variable a el valor de 5
        $a = 5;

        //Asignamos a la variable b el valor 7 como cadena
        $b = "7";

        echo "<h2>Variables</h2>";

        //mostrar el valor de la varible a
        echo ($a);

        echo "<br>";

        //mostrar el valor de la valor de la variable b
        echo ($b);

        echo "<br>";

        echo "<h2>Constante</h2>";

        /* El valor de uan constante no cambia o se mantiene fijo durante la ejecucion de una pagina  */
        /* la forma de definir las constantes en php, es mediante el uso de la intruccion define */

        // creamos una constante llamada capital_colombia cuyo valor es bogota
        define("capital_colombia","Bogota");


    ?>
</body>
</html>
