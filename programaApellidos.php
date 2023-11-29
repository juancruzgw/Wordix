<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE  LOS INTEGRANTES *******/
/**************************************/


/* 
Apellido, Nombre            **   Legajo   **   Carrera  **               Correo                  **   Usuario Github
----------------------------**------------**------------**---------------------------------------**------------------
Antueno, Pablo Sebastián    **  FAI-4973  **    TUDW    **  pablo.antueno@est.fi.uncoma.edu.ar   **   /psantueno
----------------------------**------------**------------**---------------------------------------**------------------
Geslowski, Juan Cruz        **  FAI 4881  **    TUDW    **  juan.geslowski@est.fi.uncoma.edu.ar  **   /juancruzgw
----------------------------**------------**------------**---------------------------------------**------------------
Martinez Sepulveda, Lucio D **  FAI-4901  **    TUDW    **  lucio.martinez@est.fi.uncoma.edu.ar  **   /luciomartinez
----------------------------**------------**------------**---------------------------------------**------------------
*/



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/** ***COMPLETADO***
 * Obtiene una colección de palabras (estructura de 20 palabras)
 * @return array
 */
function cargarColeccionPalabras()

{
    // array $coleccionPalabras
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "CEBRA", "LAPIZ", "PLUMA", "DELTA", "MANGO"
    ];

    return ($coleccionPalabras);
}


/** ***Completado***
 * Almacena valores de partidas jugadas (estructura de tipo asociativo)
 * @return array
 */
function cargarColeccionPartidas()
{
    //array $coleccionPartidas
    $coleccionPartidas = [

        ["palabraWordix" => "CASAS", "jugador" => "juan", "intentos" => 4, "puntaje" => 13],
        ["palabraWordix" => "LAPIZ", "jugador" => "lucas", "intentos" => 5, "puntaje" => 12],
        ["palabraWordix" => "PIANO", "jugador" => "pao", "intentos" => 0, "puntaje" => 0],
        ["palabraWordix" => "CEBRA", "jugador" => "estefi", "intentos" => 6, "puntaje" => 10],
        ["palabraWordix" => "YUYOS", "jugador" => "pao", "intentos" => 3, "puntaje" => 15],
        ["palabraWordix" => "HUEVO", "jugador" => "juan", "intentos" => 2, "puntaje" => 13],
        ["palabraWordix" => "QUESO", "jugador" => "pao", "intentos" => 2, "puntaje" => 14],
        ["palabraWordix" => "PISOS", "jugador" => "felix", "intentos" => 4, "puntaje" => 12],
        ["palabraWordix" => "NAVES", "jugador" => "juan", "intentos" => 1, "puntaje" => 17],
        ["palabraWordix" => "FUEGO", "jugador" => "sofi", "intentos" => 3, "puntaje" => 11],
        ["palabraWordix" => "DELTA", "jugador" => "alejo", "intentos" => 5, "puntaje" => 11],
        ["palabraWordix" => "TINTO", "jugador" => "rama", "intentos" => 4, "puntaje" => 14],
        ["palabraWordix" => "GATOS", "jugador" => "tania", "intentos" => 0, "puntaje" => 0],
        ["palabraWordix" => "RASGO", "jugador" => "lucio", "intentos" => 6, "puntaje" => 11],
        ["palabraWordix" => "MUJER", "jugador" => "seba", "intentos" => 4, "puntaje" => 12],
    ];

    return ($coleccionPartidas);
}



/**
 * jugador, partidas, puntaje, victorias, intento1, intento2, intento3, intento4, intento5, intento6.
 * Obtiene una colección resumenes de jugadores
 * @return array
 */
function cargarColeccionResumenDeJugador()
{
    $coleccionResumenDeJugador = [

        ["jugador" => "juan", "partidas" => 7, "puntaje" => 55, "victorias" => 4, "intento1" => 1, "intento2" => 0, "intento3" => 2, "intento4" => 0, "intento5" => 1, "intento6" => 0],
        ["jugador" => "pao", "partidas" => 12, "puntaje" => 153, "victorias" => 8, "intento1" => 2, "intento2" => 1, "intento3" => 3, "intento4" => 0, "intento5" => 1, "intento6" => 1],
        ["jugador" => "lucas", "partidas" => 10, "puntaje" => 96, "victorias" => 7, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 6],
        ["jugador" => "majo", "partidas" => 3, "puntaje" => 25, "victorias" => 1, "intento1" => 0, "intento2" => 0, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["jugador" => "felix", "partidas" => 8, "puntaje" => 47, "victorias" => 2, "intento1" => 0, "intento2" => 1, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["jugador" => "lucio", "partidas" => 7, "puntaje" => 119, "victorias" => 11, "intento1" => 2, "intento2" => 0, "intento3" => 3, "intento4" => 2, "intento5" => 1, "intento6" => 3],
        ["jugador" => "seba", "partidas" => 7, "puntaje" => 68, "victorias" => 6, "intento1" => 0, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 6],
        ["jugador" => "pepe", "partidas" => 7, "puntaje" => 88, "victorias" => 9, "intento1" => 1, "intento2" => 0, "intento3" => 0, "intento4" => 2, "intento5" => 2, "intento6" => 4],
        ["jugador" => "rama", "partidas" => 7, "puntaje" => 130, "victorias" => 7, "intento1" => 2, "intento2" => 4, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["jugador" => "tania", "partidas" => 7, "puntaje" => 215, "victorias" => 14, "intento1" => 4, "intento2" => 2, "intento3" => 3, "intento4" => 3, "intento5" => 0, "intento6" => 2],
        ["jugador" => "tomy", "partidas" => 7, "puntaje" => 121, "victorias" => 5, "intento1" => 1, "intento2" => 3, "intento3" => 1, "intento4" => 0, "intento5" => 0, "intento6" => 0],
        ["jugador" => "oscar", "partidas" => 7, "puntaje" => 38, "victorias" => 2, "intento1" => 1, "intento2" => 0, "intento3" => 0, "intento4" => 1, "intento5" => 0, "intento6" => 0],
        ["jugador" => "sofi", "partidas" => 7, "puntaje" => 144, "victorias" => 13, "intento1" => 0, "intento2" => 0, "intento3" => 3, "intento4" => 1, "intento5" => 1, "intento6" => 8],
        ["jugador" => "alejo", "partidas" => 22, "puntaje" => 105, "victorias" => 12, "intento1" => 0, "intento2" => 2, "intento3" => 3, "intento4" => 1, "intento5" => 2, "intento6" => 4],
        ["jugador" => "anita", "partidas" => 7, "puntaje" => 77, "victorias" => 6, "intento1" => 1, "intento2" => 0, "intento3" => 1, "intento4" => 1, "intento5" => 2, "intento6" => 1],

    ];

    return ($coleccionResumenDeJugador);
}


/** ***COMPLETADO***
 * averigua si la palabra fue utilizada anteriormente
 * @param string $palabraElegida
 * @param string $jugador
 * @param string $coleccionPartida
 * @return boolean
 */
function palabraYaUtilizada($palabraElegida, $jugador, $coleccionPartidas)
{

    foreach ($coleccionPartidas as $partida) {
        if ($partida["palabraWordix"] == $palabraElegida && $partida["jugador"] == $jugador) {
            $rta = true;
        }
    }

    $rta = false;

    return $rta;
}


/** ***COMPLETADO***
 * Almacena una partida en la coleccion de partidas.
 * @param array $partidaParaGuardar
 * @param array $coleccionPartidas
 * @return array Devuelve un array con todas las partidas guardadas.
 */
function guardarPartida($partidaParaGuardar, $coleccionPartidas)
{
    $coleccionPartidas = [...$coleccionPartidas, $partidaParaGuardar];
    echo "\nLa partida se ha guardado correctamente.\n";
    return $coleccionPartidas;
}


/**
 * Elige una palabra aleatoria de coleccionPalabras y verifica si el jugador ya jugó con esa palabra.
 * @param array $coleccionPalabras
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return string|[] Devuelve la palabra seleccionada o un arreglo vacío si el jugador ya jugó con todas las palabras.
 */
function elegirPalabraAleatoria($coleccionPalabras, $coleccionPartidas, $jugador)
{
    // array $palabrasJugadas, $palabrasDisponibles
    $palabrasJugadas = [];
    $palabrasDisponibles = [];


    foreach ($coleccionPartidas as $partida) {
        if ($partida['jugador'] === $jugador) {
            $palabrasJugadas[] = $partida['palabraWordix'];
        }
    }

    $palabrasDisponibles = array_diff($coleccionPalabras, $palabrasJugadas);

    if (count($palabrasDisponibles) > 0) {
        $palabraSeleccionada = $palabrasDisponibles[array_rand($palabrasDisponibles)];
    } else {
        $palabraSeleccionada = null;
    }

    return $palabraSeleccionada;
}



/**
 * Muestra los detalles de una partida específica.
 * @param int $nroPartida
 * @param int $indice
 * @param array $coleccionPartidas
 */
function mostrarPartida($nro, $coleccionPartidas)
{
    $totalPartidas = count($coleccionPartidas);

    while ($nro < 1 || $nro > $totalPartidas) {
        echo "Error: El número de partida ingresado no existe. Por favor, elija un número de partida válido entre 1 y $totalPartidas: ";
        $nro = intval(trim(fgets(STDIN)));
    }

    $indice = $nro - 1;
    $partida = $coleccionPartidas[$indice];

    echo "\n******************************************************";
    echo "\nPartida WORDIX $nro: palabra {$partida['palabraWordix']}\n";
    echo "Jugador: {$partida['jugador']}\n";
    echo "Puntaje: {$partida['puntaje']} puntos\n";

    $intentos = $partida['intentos'];

    if ($intentos != 0) {
        echo "Intento: Adivinó la palabra en $intentos intento(s).\n";
        echo "********************************************************\n";
    } else {
        echo "Intento: No adivinó la palabra.";
        echo "********************************************************\n";
    }
}


/**
 * Muestra la primer partida ganadora de un jugador.
 * @param string $jugador
 * @param array $coleccionPartidas
 */
function mostrarPrimerPartidaGanadora($jugador, $coleccionPartidas)
{
    $partidaEncontrada = false;
    $indice = 0;
    $totalPartidas = count($coleccionPartidas);

    while (!$partidaEncontrada && $indice < $totalPartidas) {
        $partida = $coleccionPartidas[$indice];

        if ($partida['jugador'] === $jugador && $partida['puntaje'] > 0) {
            $partidaEncontrada = true;
            $nroPartida = $indice + 1;
            echo "\n******************************************************";
            echo "\nPartida WORDIX $nroPartida: palabra {$partida['palabraWordix']}\n";
            echo "Jugador: " . $partida['jugador'] . "\n";
            echo "Puntaje: " . $partida['puntaje'] . " puntos\n";
            echo "Intento: Adivinó la palabra en " . $partida['intentos'] . " intento(s).\n";
            echo "********************************************************\n";
        }

        $indice++;
    }

    if (!$partidaEncontrada) {
        echo "\nEl jugador $jugador no ganó ninguna partida.\n";
    }
}



/**
 * Muestra información detallada de un jugador.
 * @param string $jugador
 * @param array $coleccionResumenDeJugador
 */
function mostrarInformacionJugador($jugador, $coleccionResumenDeJugador)
{
    $jugadorInfo = null;
    $indice = 0;

    while ($indice < count($coleccionResumenDeJugador) && $coleccionResumenDeJugador[$indice]['jugador'] !== $jugador) {
        $indice++;
    }

    if ($indice < count($coleccionResumenDeJugador)) {
        $jugadorInfo = $coleccionResumenDeJugador[$indice];
    }

    if ($jugadorInfo === null) {
        echo "El jugador $jugador no ha jugado ninguna partida.\n";
        return;
    }

    $totalPartidas = $jugadorInfo['partidas'];
    $totalPuntaje = $jugadorInfo['puntaje'];
    $totalVictorias = $jugadorInfo['victorias'];

    $intentosAdivinados = array_slice($jugadorInfo, 4, 6);
    $porcentajeVictorias = ($totalVictorias / $totalPartidas) * 100;

    echo "\n****************************************";
    echo "\nJugador: $jugador\n";
    echo "Partidas: $totalPartidas\n";
    echo "Puntaje Total: $totalPuntaje\n";
    echo "Victorias: $totalVictorias\n";
    echo "Porcentaje Victorias: " . round($porcentajeVictorias, 2) . "%\n";
    echo "Adivinadas:\n";
    for ($i = 1; $i <= 6; $i++) {
        echo "-Intento $i: " . ($intentosAdivinados["intento$i"] ?? 0) . "\n";
    }
    echo "****************************************\n";
}


// Función de comparación para ordenar por jugador y palabra
function compararPorJugadorPalabra($partida1, $partida2)
{
    // Primero, comparar por jugador usando el operador ==
    if ($partida1['jugador'] == $partida2['jugador']) {
        $resultado = 0;
    } else if ($partida1['jugador'] < $partida2['jugador']) {
        $resultado = -1;
    } else {
        $resultado = 1;
    }

    // Si los jugadores son iguales, comparar por palabra
    if ($resultado === 0) {
        $resultado = ($partida1['palabraWordix'] == $partida2['palabraWordix']) ? 0 : (($partida1['palabraWordix'] < $partida2['palabraWordix']) ? -1 : 1);
    }
    return $resultado;
}

/**
 * Muestra el listado de partidas ordenadas alfabéticamente por jugador y por palabra.
 * Utiliza la función uasort de PHP para ordenar la estructura.
 * @param array $coleccionPartidas
 */
function listadoOrdenadoDePartidas($coleccionPartidas)
{

    // uasort — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices.
    uasort($coleccionPartidas, 'compararPorJugadorPalabra');

    // print_r — Imprime información legible para humanos sobre una variable
    echo "\n***Listado ordenado por jugador y palabra***\n";
    print_r($coleccionPartidas);
}


/**
 * Agrega una palabra de 5 letras a la colección de palabras en Wordix.
 * Utiliza la función leerPalabra5Letras para obtener la palabra del usuario.
 * @param array $coleccionPalabras
 * @return array La colección de palabras actualizada.
 */
function agregarPalabraWordix($coleccionPalabras)
{
    // Obtener una palabra de 5 letras del usuario
    $nuevaPalabra = leerPalabra5Letras();

    // Agregar la palabra a la colección
    $coleccionPalabras[] = $nuevaPalabra;

    echo "La palabra se ha agregado correctamente a la colección de palabras Wordix.\n";

    return $coleccionPalabras;
}




/* ****COMPLETAR***** */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

// $partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);

$coleccionPalabras = cargarColeccionPalabras();
$coleccionPartidas = cargarColeccionPartidas();
$coleccionResumenDeJugador = cargarColeccionResumenDeJugador();


do {

    $opcion = seleccionarOpción();

    switch ($opcion) {

        case 1:

            $usuario = solicitarJugador();
            escribirMensajeBienvenida($usuario);

            do {
                echo "\nSeleccione un número de palabra para jugar (entre 1 y " . count($coleccionPalabras) . "): \n";
                $numero = solicitarNumeroEntre(1, count($coleccionPalabras));

                $palabraElegida = $coleccionPalabras[$numero - 1];

                $palabraYaUtilizada = palabraYaUtilizada($palabraElegida, $usuario, $coleccionPartidas);

                if ($palabraYaUtilizada) {
                    echo "La palabra ya fue utilizada por el jugador. Elija otra palabra.\n";
                }
            } while ($palabraYaUtilizada);

            $partida = jugarWordix($palabraElegida, $usuario);

            $partidasGuardadas = guardarPartida($partida, $coleccionPartidas);

            //print_r($partidasGuardadas);

            break;

        case 2:

            $usuario = solicitarJugador();
            escribirMensajeBienvenida($usuario);

            $palabraAleatoria = elegirPalabraAleatoria($coleccionPalabras, $coleccionPartidas, $usuario);

            if (!$palabraAleatoria) {
                echo "\n/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////";
                echo "\n//  Estimado jugador, ya no quedan palabras disponibles para jugar. Pronto actualizaremos nuestra base de datos. Le pedimos disculpas.    //\n";
                echo "//  Atte.                                                                                                                                //\n";
                echo "//  EQUIPO DE DESARROLLO.                                                                                                               //\n";
                echo "/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////\n";
                break;
            }

            $partida = jugarWordix($palabraAleatoria, $usuario);

            $partidasGuardadas = guardarPartida($partida, $coleccionPartidas);

            //print_r($partidasGuardadas);

            break;

        case 3:

            echo "\nIngrese el número de partida que desea ver: ";
            $nroPartida = trim(fgets(STDIN));
            mostrarPartida($nroPartida, $coleccionPartidas);

            do {
                echo "\n¿Desea ver otra partida? (SI/NO): ";
                $interactivo = strtoupper(trim(fgets(STDIN)));

                if ($interactivo === "SI") {
                    echo "\nIngrese el número de partida que desea ver: ";
                    $nroPartida = trim(fgets(STDIN));
                    mostrarPartida($nroPartida, $coleccionPartidas);
                } else if ($interactivo != "NO" && $interactivo != "SI") {
                    echo "Respuesta inválida. Ingrese 'SI' si desea ver otra partida o 'NO' si desea volver al menu principal.\n";
                }
            } while ($interactivo != "NO");

            break;

        case 4:

            $usuario = solicitarJugador();
            mostrarPrimerPartidaGanadora($usuario, $coleccionPartidas);

            do {

                echo "\n¿Desea consultar otra partida ganadora? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));

                if ($respuesta === "SI") {
                    $usuario = solicitarJugador();
                    mostrarPrimerPartidaGanadora($usuario, $coleccionPartidas);
                } else if ($respuesta != "NO" && $respuesta != "SI") {
                    echo "Respuesta inválida. Ingrese 'SI' si desea consultar otra partida ganadora o 'NO' si desea volver al menú principal.\n";
                }
            } while ($respuesta !== "NO");

            break;

        case 5:

            $jugador = solicitarJugador();
            mostrarInformacionJugador($jugador, $coleccionResumenDeJugador);

            do {
                echo "\n¿Desea consultar el resumen de otro jugador? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));

                if ($respuesta === "SI") {
                    $jugador = solicitarJugador();
                    mostrarInformacionJugador($jugador, $coleccionResumenDeJugador);
                } else if ($respuesta != "NO" && $respuesta != "SI") {
                    echo "Respuesta inválida. Ingrese 'SI' si desea consultar otro resumen o 'NO' si desea volver al menú principal.\n";
                }
            } while ($respuesta !== "NO");

            break;

        case 6:

            listadoOrdenadoDePartidas($coleccionPartidas);
            break;

        case 7:

            agregarPalabraWordix($coleccionPalabras);

            do {
                echo "\n¿Desea agregar otra palabra a la colección? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));

                if ($respuesta === "SI") {
                    agregarPalabraWordix($coleccionPalabras);
                } else if ($respuesta != "NO" && $respuesta != "SI") {
                    echo "Respuesta inválida. Ingrese 'SI' si desea agregar una nueva palabra o 'NO' si desea volver al menú principal.\n";
                }
            } while ($respuesta !== "NO");

            break;

        case 8:

            echo "Saliendo del programa. ¡Hasta la próxima! \n";
            break;
    }
} while ($opcion != 8);
