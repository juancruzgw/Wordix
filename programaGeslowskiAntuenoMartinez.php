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

    $coleccion = [];
    $pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
    $pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
    $pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
    $pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
    $pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
    $pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
    $pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
    $pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
    $pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
    $pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

    array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
    return $coleccion;
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
 * Determina con true o false si la palabra ya fue jugada por el jugador.
 * @param string $palabraElegida
 * @param string $jugador
 * @param array $coleccionPartidas
 * @return boolean
 */
function palabraYaUtilizada($palabraElegida, $jugador, $coleccionPartidas)
{
    $rta = false;
    $numPartidas = count($coleccionPartidas);
    $i = 0;

    while ($i < $numPartidas && !$rta) {
        $partida = $coleccionPartidas[$i];
        
        if ($partida["palabraWordix"] == $palabraElegida && $partida["jugador"] == $jugador) {
            $rta = true;
        }

        $i++;
    }

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
    $coleccionPartidas[] = $partidaParaGuardar;
    echo "\nLa partida se ha guardado correctamente.\n";
    return $coleccionPartidas;
}


/** ***COMPLETADO***    
 * Elige una palabra aleatoria de coleccionPalabras y verifica si el jugador ya jugó con esa palabra.
 * @param array $coleccionPalabras
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return string|[] Devuelve la palabra seleccionada o un arreglo vacío si el jugador ya jugó con todas las palabras.
 */
function elegirPalabraAleatoria($coleccionPalabras, $coleccionPartidas, $jugador)
{
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



/** ***COMPLETADO***    
 * Muestra los detalles de una partida específica.
 * @param int $nro
 * @param array $coleccionPartidas
 */
function mostrarPartida($nro, $coleccionPartidas)
{
    $indice = $nro - 1;
    $partida = $coleccionPartidas[$indice];

    echo "\n******************************************************";
    echo "\nPartida WORDIX $nro: palabra {$partida['palabraWordix']}\n";
    echo "Jugador: {$partida['jugador']}\n";
    echo "Puntaje: {$partida['puntaje']} puntos\n";

    $intentos = $partida['intentos'];

    if ($intentos != 0) {
        echo "Intento: Adivinó la palabra en $intentos intento(s).\n";
        echo "******************************************************\n";
    } else {
        echo "Intento: No adivinó la palabra.\n";
        echo "******************************************************\n";
    }
}



/** ***COMPLETADO***
 * Devuelve el índice de la primera partida ganadora y si el jugador no ganó ninguna partida,devuelve -1. En caso de no registrar partidas jugadas, devuelve -2.
 * @param string $jugador
 * @param array $coleccion
 * @return int
 */
function buscarPrimeraPartidaGanadora($jugador, $coleccion)
{
    $partidaEncontrada = false;
    $partidaNoGanada = false;
    $indice = 0;
    $totalPartidas = count($coleccion);

    while (!$partidaEncontrada && $indice < $totalPartidas) {
        $partida = $coleccion[$indice];

        if ($partida['jugador'] === $jugador && $partida['puntaje'] > 0) {
            $partidaEncontrada = true;
            $indicePartida = $indice;
        } else if ($partida['jugador'] === $jugador && $partida['puntaje'] === 0) {
            $partidaNoGanada = true;
        }

        $indice++;
    }

    if (!$partidaEncontrada && !$partidaNoGanada) {
        $indicePartida = -2;
    } else if ($partidaNoGanada && !$partidaEncontrada) {
        $indicePartida = -1;
    }

    return $indicePartida;
}



/** ***COMPLETADO***
 * Muestra información detallada de un jugador.
 * @param string $jugador
 * @param array $coleccionPartidas
 * @return array $resumenJugador
 */
function mostrarResumenJugador($jugador, $coleccionPartidas)
{
    $totalPartidas = 0;
    $totalPuntaje = 0;
    $totalVictorias = 0;
    $intentosAdivinados = [];

    for ($i = 0; $i <= 6; $i++) {
        $intentosAdivinados[$i] = 0;
    }

    foreach ($coleccionPartidas as $partida) {

        if ($partida['jugador'] === $jugador) {
            $totalPartidas++;

            $totalPuntaje += $partida['puntaje'];

            if ($partida['puntaje'] > 0) {
                $totalVictorias++;
            }

            if ($partida['intentos'] > 0 && $partida['intentos'] <= 6) {
                $intentosAdivinados[$partida['intentos']]++;
            }
        }
    }

    $resumenJugador['jugador'] = $jugador;
    $resumenJugador['partidas'] = $totalPartidas;
    $resumenJugador['puntaje'] = $totalPuntaje;
    $resumenJugador['victorias'] = $totalVictorias;
    $resumenJugador['intento1'] = $intentosAdivinados[1];
    $resumenJugador['intento2'] = $intentosAdivinados[2];
    $resumenJugador['intento3'] = $intentosAdivinados[3];
    $resumenJugador['intento4'] = $intentosAdivinados[4];
    $resumenJugador['intento5'] = $intentosAdivinados[5];
    $resumenJugador['intento6'] = $intentosAdivinados[6];

    return $resumenJugador;
}


/** ***COMPLETADO***
 * Imprime el resumen de un jugador.
 * @param array $resumenJugador
 */
function imprimirResumen($resumenJugador)
{

    if ($resumenJugador['partidas'] > 0) {

        $porcentajeVictorias = ($resumenJugador['victorias'] / $resumenJugador['partidas']) * 100;

        echo "\n************************************\n";
        echo "Jugador: " . $resumenJugador['jugador'] . "\n";
        echo "Partidas: " . $resumenJugador['partidas'] . "\n";
        echo "Puntaje Total: " . $resumenJugador['puntaje'] . "\n";
        echo "Victorias: " . $resumenJugador['victorias'] . "\n";
        echo "Porcentaje Victorias: " . round($porcentajeVictorias, 2) . " %\n";
        echo "Adivinadas:\n";

        for ($i = 0; $i <= 5; $i++) {
            echo "-Intento " . ($i + 1) . ": " . $resumenJugador["intento" . ($i + 1)] . "\n";
        }

        echo "************************************\n";
    } else {

        echo "\nEl jugador " . $resumenJugador['jugador'] . " no registra partidas guardadas.\n";
    }
}



/** ***COMPLETADO***
 * Función de comparación para ordenar por jugador y por palabra
 * @param array $partida1
 * @param array $partida2
 * @return int
 */
function compararPorJugadorPalabra($partida1, $partida2)
{

    if ($partida1['jugador'] == $partida2['jugador']) {
        $resultado = 0;
    } else if ($partida1['jugador'] < $partida2['jugador']) {
        $resultado = -1;
    } else {
        $resultado = 1;
    }


    if ($resultado === 0) {
        $resultado = ($partida1['palabraWordix'] == $partida2['palabraWordix']) ? 0 : (($partida1['palabraWordix'] < $partida2['palabraWordix']) ? -1 : 1);
    }
    return $resultado;
}

/** ***COMPLETADO***
 * Muestra el listado de partidas ordenadas alfabéticamente por jugador y por palabra.
 * Utiliza la función uasort de PHP para ordenar la estructura.
 * @param array $coleccionPartidas
 */
function listadoOrdenadoDePartidas($coleccionPartidas)
{

    // uasort — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices.
    uasort($coleccionPartidas, 'compararPorJugadorPalabra');

    // print_r — Imprime información legible para humanos sobre una variable.
    echo "\n***Listado ordenado por jugador y palabra***\n";
    print_r($coleccionPartidas);
}


/** ***COMPLETADO***
 * Agrega una palabra de 5 letras a la colección de palabras Wordix.
 * @param array $coleccionPalabras
 * @param string $palabraParaAgregar
 * @return array La colección de palabras actualizada.
 */
function agregarPalabra($coleccionPalabras, $palabraParaAgregar)
{
    $palabraExistente = false;
    $i = 0;
    $numPalabras = count($coleccionPalabras);

    while ($i < $numPalabras && !$palabraExistente) {
        if (strtoupper($coleccionPalabras[$i]) === strtoupper($palabraParaAgregar)) {
            $palabraExistente = true;
        }
        $i++;
    }

    if ($palabraExistente) {
        echo "La palabra ya se encuentra en la colección. Intente con otra palabra.\n";
        return $coleccionPalabras;
    }

    $coleccionPalabras[] = $palabraParaAgregar;
    echo "La palabra se ha agregado correctamente a la colección de palabras Wordix.\n";

    return $coleccionPalabras;
}



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/* Es un programa con un menu de opciones que permite jugar al Wordix y mostrar informacion acerca de las distintas partidas que jugaron los usuarios 

-DECLARACION DE VARIABLES:

$opcion INT
$nroPartida INT
$indicePartida INT
$numero INT
$usuario string
$palabraAleatoria string
$interactivo string
$respuesta string
$jugador string
$palabraParaAgregar string
$usuario string
$palabraElegida String
$nuevaPalabra string
$partidaGuardada array
$partida array
$coleccionPartidas array
$primerPartidaGanada array
$collecionPalabras array
$palabraYaUtilizada booleana

*/

/* INSTRUCCIÓN SWITCH:
 * La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar
 * la misma variable (o expresion) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual.
*/

// INICIALIZACIÓN DE VARIABLES 

$coleccionPalabras = cargarColeccionPalabras();
$coleccionPartidas = cargarColeccionPartidas();

do {

    $opcion = seleccionarOpcion();

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

            $coleccionPartidas = guardarPartida($partida, $coleccionPartidas);

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

            $coleccionPartidas = guardarPartida($partida, $coleccionPartidas);

            break;

        case 3:

            echo "\nIngrese el número de partida que desea ver (entre 1 y " . count($coleccionPartidas) . "): ";
            $nroPartida = solicitarNumeroEntre(1, count($coleccionPartidas));
            mostrarPartida($nroPartida, $coleccionPartidas);

            do {
                echo "\n¿Desea ver otra partida? (SI/NO): ";
                $interactivo = strtoupper(trim(fgets(STDIN)));

                if ($interactivo === "SI") {
                    echo "\nIngrese el número de partida que desea ver: ";
                    $nroPartida = solicitarNumeroEntre(1, count($coleccionPartidas));
                    mostrarPartida($nroPartida, $coleccionPartidas);
                } else if ($interactivo != "NO" && $interactivo != "SI") {
                    echo "Respuesta inválida. Ingrese 'SI' si desea ver otra partida o 'NO' si desea volver al menu principal.\n";
                }
            } while ($interactivo != "NO");

            break;

        case 4:

            do {
                $usuario = solicitarJugador();
                $indicePartida = buscarPrimeraPartidaGanadora($usuario, $coleccionPartidas);

                if ($indicePartida >= 0) {

                    $primerPartidaGanada = $coleccionPartidas[$indicePartida];
                    $nroPartida = $indicePartida + 1;
                    echo "\n******************************************************";
                    echo "\nPartida WORDIX $nroPartida: palabra {$primerPartidaGanada['palabraWordix']}\n";
                    echo "Jugador: " . $primerPartidaGanada['jugador'] . "\n";
                    echo "Puntaje: " . $primerPartidaGanada['puntaje'] . " puntos\n";
                    echo "Intento: Adivinó la palabra en " . $primerPartidaGanada['intentos'] . " intento(s).\n";
                    echo "********************************************************\n";
                } else if ($indicePartida === -1) {
                    echo "\nEl jugador $usuario no registra partidas ganadas.\n";
                } else {
                    echo "\nEl jugador $usuario no registra partidas jugadas en nuestra base de datos.\n";
                }

                echo "\n¿Desea consultar otra partida ganadora? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));


                if ($respuesta != "NO" && $respuesta != "SI") {
                    do {
                        echo "Respuesta inválida. Ingrese 'SI' si desea consultar otra partida ganadora o 'NO' si desea volver al menú principal: ";
                        $respuesta = strtoupper(trim(fgets(STDIN)));
                    } while ($respuesta != "NO" && $respuesta != "SI");
                }
            } while ($respuesta !== "NO");

            break;

        case 5:

            $jugador = solicitarJugador();
            $resumenJugador = mostrarResumenJugador($jugador, $coleccionPartidas);

            $coleccionResumenDeJugador[] = $resumenJugador;

            imprimirResumen($resumenJugador);

            do {
                echo "\n¿Desea consultar el resumen de otro jugador? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));

                if ($respuesta === "SI") {

                    $jugador = solicitarJugador();
                    $resumenJugador = mostrarResumenJugador($jugador, $coleccionPartidas);
                    $coleccionResumenDeJugador[] = $resumenJugador;
                    imprimirResumen($resumenJugador);
                } else if ($respuesta != "NO" && $respuesta != "SI") {

                    echo "Respuesta inválida. Ingrese 'SI' si desea consultar otro resumen o 'NO' si desea volver al menú principal.\n";
                }
            } while ($respuesta !== "NO");

            break;

        case 6:

            listadoOrdenadoDePartidas($coleccionPartidas);
            break;

        case 7:

            $nuevaPalabra = leerPalabra5Letras();

            $coleccionPalabras = agregarPalabra($coleccionPalabras, $nuevaPalabra);

            do {
                echo "\n¿Desea agregar otra palabra a la colección? (SI/NO): ";
                $respuesta = strtoupper(trim(fgets(STDIN)));

                if ($respuesta === "SI") {
                    $nuevaPalabra = leerPalabra5Letras();
                    $coleccionPalabras = agregarPalabra($coleccionPalabras, $nuevaPalabra);
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
