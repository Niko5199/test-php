<?php

    function sayHi($nombre = "Oscar"){
        return "Hola ".$nombre."<br/>";
    }

    echo sayHi("Josue");
    echo sayHi();