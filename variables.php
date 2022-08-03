<?php
// * Definimos una variable
$nombre = 'Josuê';

//  * Definicion de variables
$url = 'www.youtube.com';

echo $url;

//  * Para concatenar usamos un punto en vez de un mas

// echo $nombre . $url;


// * Otra manera de concatenar variables es con

print "$nombre : $url";


function restar(){
    $num5 = 7;
    $num6 = 4;
    return $num5 - $num6;  
}


$res = restar();

echo "<br/>";
echo "<h1>Este valor esta en H1 $res</h1>";


global $mensaje;
$mensaje = 'Hola';

function mostrarMensaje(){
    $mensaje = 'como estas';
    echo "<br/>";
    echo $mensaje;
}
mostrarMensaje();

echo "<br/>";
echo $mensaje;