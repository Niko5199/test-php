<?php
    // * la funcion rand nos genera un numero aleatorio 
    // * recibe dos parametros el min y max es el rango que nos dara

    function randomSum($num){
        $random = rand(1,10);
        echo $random."<br/>";
        return $num + $random;
    } 

    echo randomSum(10);