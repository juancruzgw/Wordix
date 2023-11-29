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

        ["jugador" => "juan", "partidas" => 7, "puntaje" => 0, "victorias" => 4, "intento1" => 1, "intento2" => 0, "intento3" => 0, "intento4" => 0, "intento5" => 0, "intento6" => 0],
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
    //
    foreach ($coleccionPartidas as $partida) {
        if ($partida["palabraWordix"] == $palabraElegida && $partida["jugador"] == $jugador) {
            return true; // La palabra ya fue utilizada por el jugador
        }
    }
    return false; // La palabra no fue utilizada por el jugador
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

    echo "\nPartida WORDIX $nro: palabra {$partida['palabraWordix']}\n";
    echo "Jugador: {$partida['jugador']}\n";
    echo "Puntaje: {$partida['puntaje']} puntos\n";

    $intentos = $partida['intentos'];

    if ($intentos != 0) {
        echo "Intento: Adivinó la palabra en $intentos intento(s).\n";
    } else {
        echo "Intento: No adivinó la palabra.";
    }
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

            print_r($partidasGuardadas);

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

            print_r($partidasGuardadas);

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

        case 8:
            echo "Saliendo del programa. ¡Hasta la próxima! \n";
            break;
    }
} while ($opcion != 8);
