<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento operaciones </title>
</head>

<body>

    <?php
    //1. se reciben los valores enviados por el formulario 
    //Declaro las variables que contendrán los valores

    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    //2. Declaro variable donde se guardara el resultado de la operación
    $resultado = 0;


    //3. Usamos elif para seleccionar revisar que botón (operación) se seleccionó.

    if ($operacion == "suma") {
        $resultado = $num1 + $num2;
    } elseif ($operacion == "resta") {
        $resultado = $num1 - $num2;
    } elseif ($operacion == "producto") {
        $resultado = $num1 * $$num2;
    } elseif ($operacion == "cociente") {

        //si el divisor es 0, salgo del programa: no se puede dividir entre 0

        if ($num2 == 0) {
            echo "<p>No se puede dividir entre cero. </p>";
            exit;
        }
        $resultado = $num1 / $num2;
    }

    //4. Mostrar resultados
    echo "<h2> RESULTADO ✅</h2>";
    echo "<p>El resultado de realizar la <strong> $operacion</strong> de los números
    $num1 y $num2 es : <strong>$resultado</strong></p>";
    ?>

</body>

</html>