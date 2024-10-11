<?php

include_once "Marca.php";

    Class Coche extends Marca{
        public $matricula;
        public $marca;

        public function __construct($matricula, Marca  $marca){

            $this->matricula = $matricula;
            $this->marca =  $marca;

        }

        public function muestra(){
            return "Matrícula: " .  $this->matricula . " " . $this->marca->marca . " " . $this->marca->modelo;
        }
    }
?>