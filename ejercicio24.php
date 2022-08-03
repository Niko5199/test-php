<?php

    class Person{

        public $nombre; // propiedades

        private static function asignarNombre(){  // Metodos
            echo "hola";
        }

        public function saludo(){
            $this->asignarNombre();
        }
        
    }

    $objAlumno = new Person(); // Instancia creamos un objeto apartir de la definicion de una clase
    // $objAlumno->asignarNombre("Josue");
    
    $objAlumno->saludo();
?>