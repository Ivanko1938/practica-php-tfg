<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Operaciones web </title>
</head>

<body>

    <h1>Ejercicio 3 - Operaciones </h1>

    <!-- Este formulario enviara los datos a el archivo datos_operaciones.php, para ello usa el método POST -->

    <form action="datos_operaciones.php" method="post">

        Introduzca el primer numero:
        <input type="number" name="numero1" required>
        <br><br>

        Introduzca el segundo número:
        <input type="number" name="numero2" required>
        <br><br>

        <strong> Seleccione la operación: </strong>

        <!-- creo los botones con los valores que harán referencia a sus funcionalidades -->
        <input type="radio" name="operacion" value="suma" required> Suma
        <input type="radio" name="operacion" value="resta" required> Resta
        <input type="radio" name="operacion" value="producto" required> Producto
        <input type="radio" name="operacion" value="cociente" required> Cociente
        <br><br>

        <button type="submit"> Enviar Datos 📝</button>

    </form>

</body>

</html>