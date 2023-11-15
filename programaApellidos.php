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
    echo "**************************************************************************************\n";
    echo "| Bienvenido al menú de opciones, por favor ingresá el número de la opción deseada:  |\n";
    echo "**************************************************************************************\n";

    echo "1) Jugar al Wordix con una palabra elegida.\n";
    echo "2) Jugar al Wordix con una palabra aleatoria.\n";
    echo "3) Mostrar una partida.\n";
    echo "4) Mostrar la primer partida ganadora.\n";
    echo "5) Mostrar resumen de Jugador.\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra.\n";
    echo "7) Agregar una palabra de 5 letras a Wordix.\n";
    echo "8) Salir.\n";


    $opcion = fgets(STDIN);

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
