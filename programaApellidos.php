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
Geslowski, Juan Cruz        **  <legajo>  **    TUDW    **  juan.geslowski@est.fi.uncoma.edu.ar  **   /jcg
----------------------------**------------**------------**---------------------------------------**------------------
Martinez, Lucio             **  <legajo>  **    TUDW    **  lucio.martinez@est.fi.uncoma.edu.ar  **   /luciomartinez
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
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS"
        /* Agregar 5 palabras más */
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

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
