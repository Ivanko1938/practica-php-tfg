<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>

<body>

    <h1>Rectángulo con Asteriscos </h1>

    <?php

    #Creo variables ancho y alto, que tendrán un valor rand, cada uno con sus rangos establecidos.
    $alto = rand(5, 12);
    $ancho = rand(4, 12);

    #Imprimo el valor que ha dado rand al las variables

    echo "<p>Ancho: <strong>$ancho</strong> </p>";
    echo "<p> Alto: <strong>$alto</strong></p>";


    #Genero dos bucles for, uno anidado dentro de otro  
    echo "<div>";

    for ($i = 0; $i < $alto; $i++) {
        for ($j = 0; $j < $ancho; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "</div>";

    ?>

</body>

</html>