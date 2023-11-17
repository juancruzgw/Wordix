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

/**
 * Obtiene una colección de palabras
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


/**
 * Obtiene una colección de partidas
 * @return array
 */
function cargarPartidas()
{
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
        ["palabraWordix" => "GATOS", "jugador" => "tania", "intentos" => 1, "puntaje" => 16],
        ["palabraWordix" => "RASGO", "jugador" => "lucio", "intentos" => 6, "puntaje" => 11],
        ["palabraWordix" => "MUJER", "jugador" => "seba", "intentos" => 4, "puntaje" => 12],
    ];

    return ($coleccionPartidas);
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


do {

    $opcion = seleccionarOpción();

    switch ($opcion) {

        case 1:
            // completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            $usuario = solicitarJugador();
            escribirMensajeBienvenida($usuario);

            echo "Seleccione un número de palabra para jugar (entre 1 y " . count($coleccionPalabras) . "): \n";
            $numero = solicitarNumeroEntre(1, count($coleccionPalabras));

            $palabraElegida = $coleccionPalabras[$numero - 1];

            $partida = jugarWordix($palabraElegida, $usuario);

            break;

        case 2:
            // completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;

        case 3:
            // completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;

        case 8:
            echo "Saliendo del programa. ¡Hasta la próxima! \n";
            break;
    }
} while ($opcion != 8);
