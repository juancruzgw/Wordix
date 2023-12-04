<?php

/*
La librería JugarWordix posee la definición de constantes y funciones necesarias
para jugar al Wordix.
Puede ser utilizada por cualquier programador para incluir en sus programas.
*/

/**************************************/
/***** DEFINICION DE   CONSTANTES *******/
/**************************************/
const CANT_INTENTOS = 6;

/*
    disponible: letra que aún no fue utilizada para adivinar la palabra
    encontrada: letra descubierta en el lugar que corresponde
    pertenece: letra descubierta, pero corresponde a otro lugar
    descartada: letra descartada, no pertence a la palabra
*/
const ESTADO_LETRA_DISPONIBLE = "disponible";
const ESTADO_LETRA_ENCONTRADA = "encontrada";
const ESTADO_LETRA_DESCARTADA = "descartada";
const ESTADO_LETRA_PERTENECE = "pertenece";

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/** ***COMPLETADO***
 * Solicita un número y verifica que se encuentre en el rango fijado.
 * @param int $min
 * @param int $max
 * @return int $nro
 */
function solicitarNumeroEntre($min, $max)
{
    //int $nro
    $nro = trim(fgets(STDIN));

    if (is_numeric($nro)) { //determina si un string es un número. puede ser float como entero.
        $nro  = $nro * 1; //con esta operación convierto el string en número.
    }
    while (!(is_numeric($nro) && (($nro == (int)$nro) && ($nro >= $min && $nro <= $max)))) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $nro = trim(fgets(STDIN));
        if (is_numeric($nro)) {
            $nro  = $nro * 1;
        }
    }
    return $nro;
}

/** ***COMPLETADO***
 * Escrbir un texto en color ROJO.
 * @param string $texto
 */
function escribirRojo($texto)
{
    echo "\e[1;37;41m $texto \e[0m";
}

/** ***COMPLETADO***
 * Escrbir un texto en color VERDE.
 * @param string $texto
 */
function escribirVerde($texto)
{
    echo "\e[1;37;42m $texto \e[0m";
}

/** ***COMPLETADO***
 * Escrbir un texto en color AMARILLO.
 * @param string $texto
 */
function escribirAmarillo($texto)
{
    echo "\e[1;37;43m $texto \e[0m";
}

/** ****COMPLETADO***
 * Escrbir un texto en color GRIS.
 * @param string $texto
 */
function escribirGris($texto)
{
    echo "\e[1;34;47m $texto \e[0m";
}

/** ***COMPLETADO***
 * Escrbir un texto pantalla.
 * @param string $texto
 */
function escribirNormal($texto)
{
    echo "\e[0m $texto \e[0m";
}

/** ***COMPLETADO***
 * Escribe un texto en pantalla teniendo en cuenta el estado.
 * @param string $texto
 * @param string $estado
 */
function escribirSegunEstado($texto, $estado)
{
    switch ($estado) {
        case ESTADO_LETRA_DISPONIBLE:
            escribirNormal($texto);
            break;
        case ESTADO_LETRA_ENCONTRADA:
            escribirVerde($texto);
            break;
        case ESTADO_LETRA_PERTENECE:
            escribirAmarillo($texto);
            break;
        case ESTADO_LETRA_DESCARTADA:
            escribirRojo($texto);
            break;
        default:
            echo " $texto ";
            break;
    }
}

/** ***COMPLETADO***
 * Escribe un mensaje de bienvenida en pantalla y resalta el nombre del jugador con color amarillo.
 * @param string $usuario
 */
function escribirMensajeBienvenida($usuario)
{
    echo "***************************************************\n";
    echo "** Hola ";
    escribirAmarillo($usuario);
    echo " Juguemos una PARTIDA de WORDIX! **\n";
    echo "***************************************************\n";
}


/** ****COMPLETADO*****
 * @param string $cadena
 * @return boolean $esLetra
 */
function esPalabra($cadena)
{
    //int $cantCaracteres, $i, boolean $esLetra
    $cantCaracteres = strlen($cadena);
    $esLetra = true;
    $i = 0;
    while ($esLetra && $i < $cantCaracteres) {
        $esLetra =  ctype_alpha($cadena[$i]);
        $i++;
    }
    return $esLetra;
}

/** ***COMPLETADO***
 * Verifica si la palabra ingresada es una palabra con 5 letras.
 * @return string
 */
function leerPalabra5Letras()
{
    //string $palabra
    echo "Ingrese una palabra de 5 letras: ";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra);

    while ((strlen($palabra) != 5) || !esPalabra($palabra)) {
        echo "Debe ingresar una palabra de 5 letras:";
        $palabra = strtoupper(trim(fgets(STDIN)));
    }
    return $palabra;
}


/** ***COMPLETADO***
 * Inicia una estructura de datos Teclado. La estructura es de tipo: asociativo.
 *@return array
 */
function iniciarTeclado()
{
    //array $teclado (arreglo asociativo, cuyas claves son las letras del alfabeto).
    $teclado = [
        "A" => ESTADO_LETRA_DISPONIBLE, "B" => ESTADO_LETRA_DISPONIBLE, "C" => ESTADO_LETRA_DISPONIBLE, "D" => ESTADO_LETRA_DISPONIBLE, "E" => ESTADO_LETRA_DISPONIBLE,
        "F" => ESTADO_LETRA_DISPONIBLE, "G" => ESTADO_LETRA_DISPONIBLE, "H" => ESTADO_LETRA_DISPONIBLE, "I" => ESTADO_LETRA_DISPONIBLE, "J" => ESTADO_LETRA_DISPONIBLE,
        "K" => ESTADO_LETRA_DISPONIBLE, "L" => ESTADO_LETRA_DISPONIBLE, "M" => ESTADO_LETRA_DISPONIBLE, "N" => ESTADO_LETRA_DISPONIBLE, "Ñ" => ESTADO_LETRA_DISPONIBLE,
        "O" => ESTADO_LETRA_DISPONIBLE, "P" => ESTADO_LETRA_DISPONIBLE, "Q" => ESTADO_LETRA_DISPONIBLE, "R" => ESTADO_LETRA_DISPONIBLE, "S" => ESTADO_LETRA_DISPONIBLE,
        "T" => ESTADO_LETRA_DISPONIBLE, "U" => ESTADO_LETRA_DISPONIBLE, "V" => ESTADO_LETRA_DISPONIBLE, "W" => ESTADO_LETRA_DISPONIBLE, "X" => ESTADO_LETRA_DISPONIBLE,
        "Y" => ESTADO_LETRA_DISPONIBLE, "Z" => ESTADO_LETRA_DISPONIBLE
    ];
    return $teclado;
}

/** ***COMPLETADO***
 * Escribe en pantalla el estado del teclado. Acomoda las letras en el orden del teclado QWERTY.
 * @param array $teclado
 */
function escribirTeclado($teclado)
{
    //array $ordenTeclado (arreglo indexado con el orden en que se debe escribir el teclado en pantalla)
    //string $letra, $estado
    $ordenTeclado = [
        "salto",
        "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "salto",
        "A", "S", "D", "F", "G", "H", "J", "K", "L", "salto",
        "Z", "X", "C", "V", "B", "N", "M", "salto"
    ];

    foreach ($ordenTeclado as $letra) {
        switch ($letra) {
            case 'salto':
                echo "\n";
                break;
            default:
                $estado = $teclado[$letra];
                escribirSegunEstado($letra, $estado);
                break;
        }
    }
    echo "\n";
};


/** ***COMPLETADO***
 * Escribe en pantalla los intentos de Wordix para adivinar la palabra.
 * @param array $estruturaIntentosWordix
 */
function imprimirIntentosWordix($estructuraIntentosWordix)
{
    //int $cantIntentosRealizados, $estructuraIntento $intentoLetra, $i, $j
    $cantIntentosRealizados = count($estructuraIntentosWordix);
    //$cantIntentosFaltantes = CANT_INTENTOS - $cantIntentosRealizados;

    for ($i = 0; $i < $cantIntentosRealizados; $i++) {
        $estructuraIntento = $estructuraIntentosWordix[$i];
        echo "\n" . ($i + 1) . ")  ";
        foreach ($estructuraIntento as $intentoLetra) {
            escribirSegunEstado($intentoLetra["letra"], $intentoLetra["estado"]);
        }
        echo "\n";
    }

    for ($i = $cantIntentosRealizados; $i < CANT_INTENTOS; $i++) {
        echo "\n" . ($i + 1) . ")  ";
        for ($j = 0; $j < 5; $j++) {
            escribirGris(" ");
        }
        echo "\n";
    }
    //echo "\n" . "Le quedan " . $cantIntentosFaltantes . " Intentos para adivinar la palabra!";
}

/** ***COMPLETADO***
 * Dada la palabra wordix a adivinar, la estructura para almacenar la información del intento 
 * y la palabra que intenta adivinar la palabra wordix.
 * devuelve la estructura de intentos Wordix modificada con el intento.
 * @param string $palabraWordix
 * @param array $estruturaIntentosWordix
 * @param string $palabraIntento
 * @return array 
 */
function analizarPalabraIntento($palabraWordix, $estruturaIntentosWordix, $palabraIntento)
{
    //int $cantCaracteres, $i
    //array $estructuraPalabrasIntentos (indexado)
    //string $letraIntento, $posicion
    //boolean $estado
    $cantCaracteres = strlen($palabraIntento);
    $estructuraPalabraIntento = []; //almacena cada letra de la palabra intento con su estado 
    for ($i = 0; $i < $cantCaracteres; $i++) {
        $letraIntento = $palabraIntento[$i];
        $posicion = strpos($palabraWordix, $letraIntento);
        if ($posicion === false) {
            $estado = ESTADO_LETRA_DESCARTADA;
        } else {
            if ($letraIntento == $palabraWordix[$i]) {
                $estado = ESTADO_LETRA_ENCONTRADA;
            } else {
                $estado = ESTADO_LETRA_PERTENECE;
            }
        }
        array_push($estructuraPalabraIntento, ["letra" => $letraIntento, "estado" => $estado]);
    }

    array_push($estruturaIntentosWordix, $estructuraPalabraIntento);
    return $estruturaIntentosWordix; //retorna la $estructuraIntentosWordix modificada
}

/** ***COMPLETADO***
 * Actualiza el estado de las letras del teclado. 
 * Teniendo en cuenta que una letra sólo puede pasar:
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_ENCONTRADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_DESCARTADA, 
 * de ESTADO_LETRA_DISPONIBLE a ESTADO_LETRA_PERTENECE
 * de ESTADO_LETRA_PERTENECE a ESTADO_LETRA_ENCONTRADA
 * @param array $teclado
 * @param array $estructuraPalabraIntento
 * @return array 
 */
function actualizarTeclado($teclado, $estructuraPalabraIntento)
{
    //string $letra, $estado
    foreach ($estructuraPalabraIntento as $letraIntento) {
        $letra = $letraIntento["letra"];
        $estado = $letraIntento["estado"];
        switch ($teclado[$letra]) {
            case ESTADO_LETRA_DISPONIBLE:
                $teclado[$letra] = $estado;
                break;
            case ESTADO_LETRA_PERTENECE:
                if ($estado == ESTADO_LETRA_ENCONTRADA) {
                    $teclado[$letra] = $estado;
                }
                break;
        }
    }
    return $teclado; //retorna el estado del teclado segun las letras asignadas a la palabra.
}

/** ***COMPLETADO***
 * Determina si se ganó una palabra intento posee todas sus letras "Encontradas".
 * @param array $estructuraPalabraIntento
 * @return boolean
 */
function esIntentoGanado($estructuraPalabraIntento)
{
    //int $cantLetras, $i
    //boolean $ganado
    $cantLetras = count($estructuraPalabraIntento);
    $i = 0;

    while ($i < $cantLetras && $estructuraPalabraIntento[$i]["estado"] == ESTADO_LETRA_ENCONTRADA) {
        $i++;
    }

    if ($i == $cantLetras) {
        $ganado = true;
    } else {
        $ganado = false;
    }

    return $ganado;
}


/** ***COMPLETADO***
 * Obtiene el puntaje de una palabra Wordix adivinada.
 * @param string $palabraWordix
 * @param int $intentos
 * @return int
 */
function obtenerPuntajeWordix($palabraWordix, $intentos)
{
    //int $puntaje, $valorLetra
    //string $letras
    $puntaje = 0;

    if ($intentos <= 6) {
        $puntaje += (7 - $intentos);
    }

    $letras = str_split(strtoupper($palabraWordix));

    foreach ($letras as $letra) {
        $valorLetra = obtenerValorLetra($letra);
        $puntaje += $valorLetra;
    }

    return $puntaje;
}


/** ***COMPLETADO***
 * Obtiene el valor de las letras que componen la palabra Wordix adivinada, según las reglas especificadas.
 * @param string $letra
 * @return int 
 */

function obtenerValorLetra($letra)
{
    //array $vocales (indexado)
    //int $valorVocal, $valorConsonanteAntesM, $valorConsonanteDspuesM
    //boolean $esVocal

    $letra = strtoupper($letra);
    $vocales = ['A', 'E', 'I', 'O', 'U'];
    $valorVocal = 1;
    $valorConsonanteAntesM = 2;
    $valorConsonanteDespuesM = 3;

    $esVocal = false;
    $i = 0;
    $numVocales = count($vocales);

    while ($i < $numVocales && !$esVocal) {
        if (strtoupper($letra) === $vocales[$i]) {
            $esVocal = true;
        }
        $i++;
    }

    if ($esVocal) {
        $resultado = $valorVocal;
    } else if (ord($letra) <= ord('M')) {
        $resultado = $valorConsonanteAntesM;
    } else {
        $resultado = $valorConsonanteDespuesM;
    }
    return $resultado;
}


/** ***COMPLETADO***
 * Dada una palabra para adivinar, juega una partida de wordix intentando que el usuario adivine la palabra.
 * @param string $palabraWordix
 * @param string $nombreUsuario
 * @return array estructura con el resumen de la partida, para poder ser utilizada en estadísticas.
 */
function jugarWordix($palabraWordix, $nombreUsuario)
{
    //array $arregloDeIntentosWordix, $teclado, $partida (asiciativo)
    //int $nroIntento, $indiceIntento, $puntaje
    //string $palabraIntento
    //boolean $ganoIntento

    /*Inicialización*/
    $arregloDeIntentosWordix = [];
    $teclado = iniciarTeclado();
    $nroIntento = 1;
    do {

        echo "Comenzar con el Intento " . $nroIntento . ":\n";
        $palabraIntento = leerPalabra5Letras();
        $indiceIntento = $nroIntento - 1;
        $arregloDeIntentosWordix = analizarPalabraIntento($palabraWordix, $arregloDeIntentosWordix, $palabraIntento);
        $teclado = actualizarTeclado($teclado, $arregloDeIntentosWordix[$indiceIntento]);
        /*Mostrar los resultados del análisis: */
        imprimirIntentosWordix($arregloDeIntentosWordix);
        escribirTeclado($teclado);
        /*Determinar si la plabra intento ganó e incrementar la cantidad de intentos */

        $ganoElIntento = esIntentoGanado($arregloDeIntentosWordix[$indiceIntento]);
        $nroIntento++;
    } while ($nroIntento <= CANT_INTENTOS && !$ganoElIntento);


    if ($ganoElIntento) {
        $nroIntento--;
        $puntaje = obtenerPuntajeWordix($palabraWordix, $nroIntento);
        echo "Adivinó la palabra Wordix en el intento " . $nroIntento . "!: " . $palabraIntento . " Obtuvo $puntaje puntos! \n";
    } else {
        $nroIntento = 0; //reset intento
        $puntaje = 0;
        echo "Seguí Jugando Wordix, la próxima será! \n";
    }

    $partida = [
        "palabraWordix" => $palabraWordix,
        "jugador" => $nombreUsuario,
        "intentos" => $nroIntento,
        "puntaje" => $puntaje
    ];

    return $partida;
}


/** ***COMPLETADO***
 * Solicita el nombre del jugador y lo retorna.
 * @return string $usuario
 */
function solicitarJugador()
{

    do {
        echo "Ingrese el nombre del jugador: ";
        $usuario = strtolower(trim(fgets(STDIN)));

        if (!ctype_alpha($usuario[0])) {
            echo "El nombre debe comenzar con una letra. Inténtelo nuevamente.\n";
        }
    } while (!ctype_alpha($usuario[0]));

    return $usuario;
}


/** ***COMPLETADO***
 * Muestra el menu de opciones del programa principal y retorna la opción elegida.
 * @return int
 */
function seleccionarOpcion()
{
    //int $opcion

    echo "\n**************************************\n";
    echo "** Bienvenido al menú de opciones:  **\n";
    echo "**************************************\n";

    echo "1) Jugar al Wordix con una palabra elegida.\n";
    echo "2) Jugar al Wordix con una palabra aleatoria.\n";
    echo "3) Mostrar una partida.\n";
    echo "4) Mostrar la primer partida ganadora.\n";
    echo "5) Mostrar resumen de Jugador.\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra.\n";
    echo "7) Agregar una palabra de 5 letras a Wordix.\n";
    echo "8) Salir.\n";

    do {
        echo " \nPor favor, ingrese el número de la opción deseada: ";
        $opcion = trim(fgets(STDIN));

        if (!($opcion >= 1 && $opcion <= 8)) {
            echo "\nEl número ingresado no es una opción válida. Elija una opción entre 1 (uno) y 8 (ocho).\n";
        }
    } while (!($opcion >= 1 && $opcion <= 8));

    return $opcion;
}
