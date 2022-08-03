<?php

$frutas = array("manzana","fresa","pera");

print_r($frutas);


foreach ($frutas as $key => $value) {
    echo "<h1>".$value."</h1>";
}