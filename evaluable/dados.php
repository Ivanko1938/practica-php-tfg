<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: paleturquoise;
        }

        .lanzamiento {
            border: 2px solid #fff;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .dados {
            display: flex;
            /* El ancho de 70px es muy pequeño si hay 5 dados de 100x100px. Lo ajusto a un valor más apropiado o 'auto'. */
            width: auto;
            margin-bottom: 5px;
            gap: 8px;

        }
    </style>
</head>

<body>
    <h1> Lanzamiento de dados </h1>

    <?php

    #numero de lanzamientos será de 5  --- creo variables, inicializadas a "0" acumularan el número de victorias por jugador

    $lanzamiento = 5;
    $victoriasJugador1 = 0;
    $victoriasJugador2 = 0;


    # Creo Array que contendrá el número de victorias por jugador

    $rondasGanadas1 = [];
    $rondasGanadas2 = [];

    # Ejecuto For para el número de lanzamientos, cada ronda tiene 5 lanzamientos 
    # El bucle exterior (Rondas): Controla cuántas partidas completas se juegan.

    for ($j = 0; $j < $lanzamiento; $j++) {

        // Lo encierro dentro de un <div>
        echo "<div class='lanzamiento'>";
        // Muestra la ronda actual (J+1 para empezar desde 1)
        echo "<h2> Ronda " . ($j + 1) . " </h2>";

        // Creo los Arrays vacíos de cada jugador, donde se irán acumulando los lanzamientos de cada jugador
        $jugador1 = [];
        $jugador2 = [];

        // simulo lanzamiento de dados con función rand() --- El bucle interior (Lanzamientos):
        // Controla la acción que ocurre dentro de cada partida (lanzar los dados varias veces).
        for ($i = 0; $i < 5; $i++) {
            $jugador1[$i] = rand(1, 6);
            $jugador2[$i] = rand(1, 6);
        }

        // Muestro los resultados x cada jugador

        // Jugador N1
        echo "<p><strong>Jugador 1:</strong></p>";
        echo "<div class='dados'>";
        foreach ($jugador1 as $dado) { // $dado es cada valor individual dentro del array
            echo "<img src=\"../img/$dado.jpg\" width=100 height=100>";
        }
        echo "</div>";

        // Jugador N2
        echo "<p><strong>Jugador 2:</strong></p>";
        echo "<div class='dados'>";
        foreach ($jugador2 as $dado) {
            echo "<img src=\"../img/$dado.jpg\" width=100 height=100>";
        }
        echo "</div>";

        // llamo a la función array_sum() para sumar los lanzamientos de cada jugador
        $suma1 = array_sum($jugador1);
        $suma2 = array_sum($jugador2);

        echo "<p> Suma jugador 1: <i>$suma1</i></p>";
        echo "<p> Suma jugador 2: <i>$suma2</i></p>";

        // Determino Ganador de cada ronda y añado resultados a el Array $rondasGanadas[]
        if ($suma1 > $suma2) {
            echo "<p style='font-weight: bold; color: green;'>Ha ganado el jugador 1 🥳 esta ronda.</p>";
            $victoriasJugador1++; // Contador jugador1 aumenta si gana
            $rondasGanadas1[] = ($j + 1); // guardo la ronda ganada
        } elseif ($suma2 > $suma1) {
            echo "<p style='font-weight: bold; color: green;'>Ha ganado el jugador 2 🥳 esta ronda.</p>";
            $victoriasJugador2++;
            $rondasGanadas2[] = ($j + 1);
        } else {
            echo "<p style='font-weight: bold; color: blue;'> EMPATE 😅</p>";
        }

        echo "</div>"; // Cierra ronda

    } // CIERRE DEL BUCLE FOR DE RONDAS

    // ----------------------------------------------------------------------------------
    // BLOQUE DE RESULTADOS FINALES (Solo se ejecuta una vez al final)
    // ----------------------------------------------------------------------------------
    echo "<hr>";
    echo "<h2>Resultado Final 🏆</h2>";
    echo "<p>Victorias del jugador 1: <b> $victoriasJugador1</b></p>";
    echo "<p>Victorias del jugador 2: <b> $victoriasJugador2</b></p>";

    // Mostrar qué rondas ganó cada jugador
    //uso función implode() para convertir mi array en una cadena de texto, uniendo sus elementos con un separador
    echo "<h3>Detalle de rondas ganadas:</h3>";
    // Muestra "Ninguna" si no ganó ninguna ronda
    $rondasJ1_str = empty($rondasGanadas1) ? 'Ninguna' : implode(", ", $rondasGanadas1);
    $rondasJ2_str = empty($rondasGanadas2) ? 'Ninguna' : implode(", ", $rondasGanadas2);

    echo "<p><b>Jugador 1 ganó las rondas:</b> " . $rondasJ1_str . "</p>";
    echo "<p><b>Jugador 2 ganó las rondas:</b> " . $rondasJ2_str . "</p>";

    // Mensaje de Ganador Absoluto
    if ($victoriasJugador1 > $victoriasJugador2) {
        echo "<h2 style= 'color:green;'> ✨ Gano finalmente: El jugador 1</h2>";
    } elseif ($victoriasJugador2 > $victoriasJugador1) {
        echo "<h2 style=' color:green;'> ✨ Gano finalmente: El jugador 2</h2>";
    } else {
        echo "<h2 style='color:red;'> UPS! Esto es un empate </h2>";
    }

    ?>

</body>

<!-- El bucle exterior (Rondas): Controla cuántas partidas completas se juegan.
El bucle interior (Lanzamientos): Controla la acción que ocurre dentro de cada partida (lanzar los dados varias veces). 

1. Bucle Exterior (Controla las Rondas)
Este bucle (for ($j = 0; $j < $lanzamiento; $j++)) se repite 5 veces (ya que $lanzamiento = 5). 
Cada repetición representa una ronda completa del juego.

1. . Inicio de una Ronda (Bucle Exterior)
El Bucle Exterior (for ($j = 0; $j < $lanzamiento; $j++) donde $lanzamiento = 5) representa el inicio de una Ronda (o Partida) del juego.

2. . Ejecución de los Lanzamientos (Bucle Interior)
Una vez que comienza la Ronda 1, el Bucle Interior (for ($i = 0; $i < 5; $i++)) se activa y se ejecuta por completo.

Este bucle simula los 5 lanzamientos de dados que realiza cada jugador dentro de esa ronda.


</html>